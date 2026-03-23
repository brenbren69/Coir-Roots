<?php

namespace App\Controllers;

class User extends BaseController
{
    public function welcome()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('welcome', ['username' => $session->get('username')]);
    }
    public function profile()
{
    $session = session();
    if (!$session->get('isLoggedIn')) return redirect()->to('/login');

    $userModel = new \App\Models\UserModel();
    $user = $userModel->find($session->get('id')); // get the logged-in user

    return view('profile', [
        'username'      => $session->get('username'),
        'email'         => $session->get('email'),
        'mobile_number' => $user['mobile_number'] ?? null,
        'address'       => $user['address'] ?? null,
        'profile_photo' => $user['profile_photo'] ?? null
    ]);
}

    public function upload()
{
    $session = session();
    $userId = $session->get('id');

    $userModel = new \App\Models\UserModel();

    $image = $this->request->getFile('profile_image');

    if ($image && $image->isValid() && !$image->hasMoved()) {

        $newName = $image->getRandomName();

        // Move to public/uploads/
        $image->move(ROOTPATH . 'public/uploads/', $newName);

        // Resize
        \Config\Services::image()
            ->withFile(ROOTPATH . 'public/uploads/' . $newName)
            ->resize(300, 300, true)
            ->save(ROOTPATH . 'public/uploads/' . $newName);

        // Save filename to DB
        $userModel->update($userId, [
            'profile_photo' => $newName
        ]);

        return redirect()->to('/profile')->with('success', 'Profile photo updated!');
    }

    return redirect()->to('/profile')->with('error', 'Failed to upload file!');
}

}
