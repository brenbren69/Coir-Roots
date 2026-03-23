<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('login');
    }

    public function register()
    {
        helper(['form']);
        return view('register');
    }

    // Registration handler (submission only)
    public function save()
    {
        helper(['form']);
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]|alpha_numeric',
            'email' => 'required|valid_email|is_unique[users.email]',
            'mobile_number' => 'required|min_length[10]|max_length[20]',
            'address' => 'required|min_length[10]|max_length[255]',
            'password' => 'required|min_length[6]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $data = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'mobile_number' => $this->request->getVar('mobile_number'),
                'address' => $this->request->getVar('address'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => 'user'
            ];

            $userModel->save($data);

            // Redirect to landing page with success flashdata
            return redirect()->to('/')->with('success', 'Registration successful! You can now log in.');
        } else {
            // Redirect back to landing page with validation errors
            return redirect()->to('/')->with('validation', $this->validator->getErrors());
        }
    }

    // Login handler (submission only)
    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/')->with('validation', $this->validator->getErrors());
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'role' => $user['role'],
                'isLoggedIn' => true
            ];
            $session->set($sessionData);

            // Redirect based on role
            return ($user['role'] === 'admin')
                ? redirect()->to('/admin')
                : redirect()->to('/customer/products');
        } else {
            return redirect()->to('/')->with('error', 'Invalid credentials!');
        }
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/'); // back to landing page
    }
}
