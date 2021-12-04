<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbInvoice extends Migration
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
                'constraint' => 56,
            ],

            'alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => 225,
            ],

            'tgl_pesan'       => [
                'type'       => 'DATETIME',
            ],
            
            'batas_bayar'    => [
                'type'       => 'DATETIME',
            ],

            'jasa_pengiriman'       => [
                'type'       => 'VARCHAR',
                'constraint' => 225,   
            ],
            
            'bank'       => [
                'type'       => 'VARCHAR',
                'constraint' => 225,   
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_invoice');

    }

    public function down()
    {
        $this->forge->dropTable('tb_invoice');
    }
}
