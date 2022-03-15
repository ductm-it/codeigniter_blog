<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'admin@gmail.com',
                'password' => password_hash('1234', PASSWORD_BCRYPT),
                'name' => 'Account Admin'
            ],
              [
                'email' => 'user@gmail.com',
                'password' => password_hash('1234', PASSWORD_BCRYPT),
                'name' => 'Account User'
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
