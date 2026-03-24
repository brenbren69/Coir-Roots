<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Support extends Controller
{
    public function index()
    {
        // Show the support form
        return view('email_support');
    }

    public function send()
    {
        $email = \Config\Services::email();

        // Get form data
        $name = $this->request->getPost('name');
        $emailAddress = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // Validate input
        if (!$name || !$emailAddress || !$subject || !$message) {
            return redirect()->back()->with('error', 'All fields are required!');
        }

        // Set email parameters
        $email->setFrom('brendanmalabanan6@gmail.com', 'Coir Roots PH Support'); // your Gmail
        $email->setTo('brendanmalabanan6@gmail.com'); // where you want to receive support emails
        $email->setReplyTo($emailAddress, $name); // user's email for reply
        $email->setSubject($subject);
        $email->setMessage("
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$emailAddress}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ");

        // Send email
        if ($email->send()) {
            return redirect()->back()->with('success', 'Your message has been sent!');
        } else {
            // Print detailed error for debugging
            $debug = $email->printDebugger(['headers']);
            return redirect()->back()->with('error', 'Failed to send email! Debug: ' . $debug);
        }
    }
}
