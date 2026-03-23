<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddContactFieldsToUsersTable extends Migration
{
    public function up()
    {
        $fields = [];

        if (! $this->db->fieldExists('mobile_number', 'users')) {
            $fields['mobile_number'] = [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
                'after' => 'email',
            ];
        }

        if (! $this->db->fieldExists('address', 'users')) {
            $fields['address'] = [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'mobile_number',
            ];
        }

        if ($fields !== []) {
            $this->forge->addColumn('users', $fields);
        }
    }

    public function down()
    {
        if ($this->db->fieldExists('address', 'users')) {
            $this->forge->dropColumn('users', 'address');
        }

        if ($this->db->fieldExists('mobile_number', 'users')) {
            $this->forge->dropColumn('users', 'mobile_number');
        }
    }
}
