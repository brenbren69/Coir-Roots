<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'transaction_code' => [
                'type' => 'VARCHAR',
                'constraint' => 40,
            ],
            'items_json' => [
                'type' => 'LONGTEXT',
            ],
            'subtotal' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'payment_method' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'fulfillment_method' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'delivery_address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'contact_name' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
            ],
            'contact_number' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'notes' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => 'Completed',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('user_id');
        $this->forge->addUniqueKey('transaction_code');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
