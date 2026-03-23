<?php

namespace App\Controllers;

use App\Models\TransactionModel;

class Customer extends BaseController
{
    protected $helpers = ['form'];

    public function products()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        return view('customer/products', [
            'products' => coir_catalog(),
        ]);
    }

    public function startCheckout()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $slug = (string) $this->request->getPost('product_slug');
        $quantity = max(1, (int) $this->request->getPost('quantity'));
        $product = coir_product($slug);

        if (! $product) {
            return redirect()->to(site_url('customer/products'))->with('error', 'Selected product was not found.');
        }

        $checkoutItem = [
            'slug' => $product['slug'],
            'name' => $product['name'],
            'category' => $product['category'],
            'price' => (float) $product['price'],
            'unit' => $product['unit'],
            'description' => $product['description'],
            'image' => $product['image'],
            'quantity' => $quantity,
            'total' => (float) $product['price'] * $quantity,
        ];

        session()->set('pendingCheckout', $checkoutItem);

        return redirect()->to(site_url('customer/checkout'));
    }

    public function checkout()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $checkoutItem = session()->get('pendingCheckout');

        if (! $checkoutItem) {
            return redirect()->to(site_url('customer/products'))->with('error', 'Choose a product first before proceeding to checkout.');
        }

        return view('customer/checkout', [
            'item' => $checkoutItem,
        ]);
    }

    public function placeOrder()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $checkoutItem = session()->get('pendingCheckout');

        if (! $checkoutItem) {
            return redirect()->to(site_url('customer/products'))->with('error', 'Your checkout session has expired. Please choose a product again.');
        }

        $rules = [
            'contact_name' => 'required|min_length[3]',
            'contact_number' => 'required|min_length[7]',
            'payment_method' => 'required|in_list[Cash on Delivery,Gcash,Bank Transfer,Pay at Pickup]',
            'fulfillment_method' => 'required|in_list[Pickup,Delivery]',
            'notes' => 'permit_empty|max_length[500]',
        ];

        $fulfillmentMethod = (string) $this->request->getPost('fulfillment_method');

        if ($fulfillmentMethod === 'Delivery') {
            $rules['delivery_address'] = 'required|min_length[10]';
        } else {
            $rules['delivery_address'] = 'permit_empty';
        }

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $transactionModel = new TransactionModel();
        $userId = (int) session()->get('id');
        $transactionCode = 'TXN-' . date('YmdHis') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));

        $transactionModel->insert([
            'user_id' => $userId,
            'transaction_code' => $transactionCode,
            'items_json' => json_encode([$checkoutItem]),
            'subtotal' => $checkoutItem['total'],
            'payment_method' => (string) $this->request->getPost('payment_method'),
            'fulfillment_method' => $fulfillmentMethod,
            'delivery_address' => $fulfillmentMethod === 'Delivery' ? (string) $this->request->getPost('delivery_address') : null,
            'contact_name' => (string) $this->request->getPost('contact_name'),
            'contact_number' => (string) $this->request->getPost('contact_number'),
            'notes' => (string) $this->request->getPost('notes'),
            'status' => 'Completed',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        session()->remove('pendingCheckout');

        return redirect()->to(site_url('customer/transactions'))->with('success', 'Order placed successfully. Your transaction has been recorded.');
    }

    public function transactions()
    {
        if ($redirect = $this->requireLogin()) {
            return $redirect;
        }

        $transactionModel = new TransactionModel();
        $rows = $transactionModel
            ->where('user_id', (int) session()->get('id'))
            ->orderBy('created_at', 'DESC')
            ->findAll();

        $transactions = array_map(static function (array $transaction): array {
            $transaction['items'] = json_decode($transaction['items_json'], true) ?? [];
            return $transaction;
        }, $rows);

        return view('customer/transactions', [
            'transactions' => $transactions,
        ]);
    }

    private function requireLogin()
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }

        return null;
    }
}
