<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmailVerificationToUsersTable extends Migration
{
    public function up()
    {
        $fields = [];

        if (! $this->db->fieldExists('email_verification_token', 'users')) {
            $fields['email_verification_token'] = [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
                'after' => 'password',
            ];
        }

        if (! $this->db->fieldExists('email_verified_at', 'users')) {
            $fields['email_verified_at'] = [
                'type' => 'DATETIME',
                'null' => true,
                'after' => 'email_verification_token',
            ];
        }

        if ($fields !== []) {
            $this->forge->addColumn('users', $fields);
        }

        if ($this->db->fieldExists('email_verified_at', 'users')) {
            $this->db->table('users')
                ->where('email_verified_at', null)
                ->set([
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'email_verification_token' => null,
                ])
                ->update();
        }
    }

    public function down()
    {
        if ($this->db->fieldExists('email_verified_at', 'users')) {
            $this->forge->dropColumn('users', 'email_verified_at');
        }

        if ($this->db->fieldExists('email_verification_token', 'users')) {
            $this->forge->dropColumn('users', 'email_verification_token');
        }
    }
}
