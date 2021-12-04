<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],

            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],

            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            
            'role_id'    => [
                'type'       => 'INT',
                'constraint' => 1,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_user');
        $seeder = \Config\Database::seeder();
        $seeder->call('UserSeeder');

    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}
