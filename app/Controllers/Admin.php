<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\TransactionModel;

class Admin extends BaseController
{
    // =======================
    // DASHBOARD (USER LIST)
    // =======================
    public function index()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->paginate(5, 'users');
        $data['pager'] = $userModel->pager;

        return view('admin_dashboard', $data);
    }

    // =======================
    // EDIT USER
    // =======================
    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);

        if (!$data['user']) {
            return redirect()->to('/admin')->with('error', 'User not found!');
        }

        return view('edit_user', $data);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        $data = [
            'role' => $this->request->getPost('role')
        ];

        $userModel->update($id, $data);

        return redirect()->to('/admin')->with('success', 'User role updated successfully!');
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/admin')->with('success', 'User deleted successfully!');
    }


    // ==================================================
    //  PRODUCT MANAGEMENT (THIS PART WAS MISSING!)
    // ==================================================

    public function manage_products()
    {
        $productModel = new ProductModel();

        $data['products'] = $productModel->findAll();
        return view('admin/manage_products', $data);
    }

    public function add_product()
    {
        return view('admin/add_product');
    }

    public function save_product()
    {
        $productModel = new ProductModel();

        $productModel->save([
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock')
        ]);

        return redirect()->to('/admin/manage_products')->with('success', 'Product added!');
    }

    public function edit_product($id)
    {
        $productModel = new ProductModel();

        $data['product'] = $productModel->find($id);

        if (!$data['product']) {
            return redirect()->to('/admin/manage_products')->with('error', 'Product not found!');
        }

        return view('admin/edit_product', $data);
    }

    public function update_product($id)
    {
        $productModel = new ProductModel();

        $productModel->update($id, [
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock')
        ]);

        return redirect()->to('/admin/manage_products')->with('success', 'Product updated!');
    }

    public function delete_product($id)
    {
        $productModel = new ProductModel();
        $productModel->delete($id);

        return redirect()->to('/admin/manage_products')->with('success', 'Product deleted!');
    }

    public function orders()
    {
        $transactionModel = new TransactionModel();
        $userModel = new UserModel();

        $orders = $transactionModel->orderBy('created_at', 'DESC')->findAll();
        $users = $userModel->findAll();

        $usersById = [];
        foreach ($users as $user) {
            $usersById[$user['id']] = $user;
        }

        $orders = array_map(static function (array $order) use ($usersById): array {
            $order['items'] = json_decode($order['items_json'], true) ?? [];
            $order['user'] = $usersById[$order['user_id']] ?? null;

            return $order;
        }, $orders);

        return view('admin/orders', [
            'orders' => $orders,
        ]);
    }
}
