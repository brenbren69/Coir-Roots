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
            'confirm_email' => 'required|valid_email|matches[email]',
            'mobile_number' => 'required|min_length[10]|max_length[20]',
            'address' => 'required|min_length[10]|max_length[255]',
            'password' => 'required|min_length[6]',
            'confirmpassword' => 'matches[password]'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $userModel = new UserModel();
        $token = bin2hex(random_bytes(32));

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'mobile_number' => $this->request->getVar('mobile_number'),
            'address' => $this->request->getVar('address'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => 'user',
            'email_verification_token' => $token,
            'email_verified_at' => null,
        ];

        $userId = $userModel->insert($data, true);

        if (! $userId) {
            return redirect()->back()->withInput()->with('error', 'Unable to create your account right now. Please try again.');
        }

        if (! $this->sendVerificationEmail($data['email'], $data['username'], $token)) {
            $userModel->delete($userId);

            return redirect()->back()->withInput()->with('error', 'We could not send the verification email. Please check your SMTP settings and try again.');
        }

        return redirect()->to('/login')->with('success', 'Registration successful. Please check your email and verify your account before logging in.');
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
            if (empty($user['email_verified_at'])) {
                return redirect()->back()->withInput()->with('error', 'Please verify your email address first before logging in.');
            }

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
        $userModel = new UserModel();
        $user = $userModel->where('email_verification_token', $token)->first();

        if (! $user) {
            return redirect()->to('/login')->with('error', 'That verification link is invalid or has already been used.');
        }

        $userModel->update($user['id'], [
            'email_verified_at' => date('Y-m-d H:i:s'),
            'email_verification_token' => null,
        ]);

        return redirect()->to('/login')->with('success', 'Your email has been verified. You can now log in.');
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/'); // back to landing page
    }

    protected function sendVerificationEmail(string $emailAddress, string $username, string $token): bool
    {
        $email = \Config\Services::email();
        $verificationLink = site_url('verify-email/' . $token);

        $email->setTo($emailAddress);
        $email->setSubject('Verify Your Coir Roots PH Account');
        $email->setMessage("
            <h2>Welcome to Coir Roots PH, {$username}!</h2>
            <p>Thank you for registering. Please verify your email address to activate your account.</p>
            <p><a href=\"{$verificationLink}\" style=\"display:inline-block;padding:12px 20px;border-radius:999px;background:#6f4b2d;color:#fffdf8;text-decoration:none;font-weight:700;\">Verify Email</a></p>
            <p>If the button does not work, copy and paste this link into your browser:</p>
            <p>{$verificationLink}</p>
        ");

        return $email->send();
    }
}
