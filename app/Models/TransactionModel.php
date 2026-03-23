<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'user_id',
        'transaction_code',
        'items_json',
        'subtotal',
        'payment_method',
        'fulfillment_method',
        'delivery_address',
        'contact_name',
        'contact_number',
        'notes',
        'status',
        'created_at',
    ];
}
