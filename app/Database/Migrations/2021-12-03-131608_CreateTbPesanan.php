<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbPesanan extends Migration
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
            'id_invoice'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'id_brg'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'nama_brg'       => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            
            'jumlah'    => [
                'type'       => 'INT',
                'constraint' => 3,
            ],

            'harga'    => [
                'type'       => 'INT',
                'constraint' => 10,
            ],

            'pilihan'    => [
                'type'       => 'TEXT',
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_pesanan');

    }

    public function down()
    {
        $this->forge->dropTable('tb_pesanan');
    }
}
