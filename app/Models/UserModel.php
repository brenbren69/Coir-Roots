<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'mobile_number', 'address', 'password', 'role', 'profile_photo', 'created_at'];
}
