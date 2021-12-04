<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_brg';
    protected $primaryKey       = 'id_brg';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'nama_brg','keterangan','kategori','harga','stok','gambar'
    ];

}
