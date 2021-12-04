<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('ModelAuth');
        $model->insertBatch([
            [
                'nama' => 'user',
                'username' => 'user',
                'password' => '123',
                'role_id' => '2',
            ],

            [
                'nama' => 'admin',
                'username' => 'admin',
                'password' => '123',
                'role_id' => '1',
            ],
        ]);
    }
}
