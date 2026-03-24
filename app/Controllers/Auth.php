<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);

        return view('login', [
            'validation' => session()->getFlashdata('validation'),
        ]);
    }

    public function register()
    {
        helper(['form']);
        return view('register', [
            'validation' => session()->getFlashdata('validation'),
        ]);
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

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'mobile_number' => $this->request->getVar('mobile_number'),
            'address' => $this->request->getVar('address'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => 'user',
            'email_verification_token' => null,
            'email_verified_at' => date('Y-m-d H:i:s'),
        ];

        if (! $userModel->insert($data, true)) {
            return redirect()->back()->withInput()->with('error', 'Unable to create your account right now. Please try again.');
        }

        return redirect()->to('/login')->with('success', 'Registration successful. You can now log in.');
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
            return redirect()->back()->withInput()->with('validation', $this->validator);
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
            return redirect()->back()->withInput()->with('error', 'Invalid credentials!');
        }
    }

    public function verifyEmail(string $token)
    {
        return redirect()->to('/login')->with('success', 'Your account is already ready to use. You can log in now.');
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/'); // back to landing page
    }
}
