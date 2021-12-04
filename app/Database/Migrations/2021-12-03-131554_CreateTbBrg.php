<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbBrg extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_brg'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_brg'       => [
                'type'       => 'VARCHAR',
                'constraint' => 120,
            ],

            'keterangan'       => [
                'type'       => 'VARCHAR',
                'constraint' => 225,
            ],

            'kategori'       => [
                'type'       => 'VARCHAR',
                'constraint' => 60,
            ],
            
            'harga'    => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'stok'    => [
                'type'       => 'INT',
                'constraint' => 4,
            ],

            'gambar'    => [
                'type'       => 'TEXT',
            ],
            
        ]);
        $this->forge->addKey('id_brg', true);
        $this->forge->createTable('tb_brg');
        $seeder = \Config\Database::seeder();
        $seeder->call('BarangSeeder');

    }

    public function down()
    {
        $this->forge->dropTable('tb_brg');
    }
}
