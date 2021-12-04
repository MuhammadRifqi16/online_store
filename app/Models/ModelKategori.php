<?php
namespace App\Models;

use CodeIgniter\Model;
class ModelKategori extends Model{

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
    public function data_smartphone(){
        return $this->db->table('tb_brg')->getWhere(array('kategori' => 'smartphone'))->getResult('array');
    }

    public function data_laptop(){
        return $this->db->table('tb_brg')->getWhere(array('kategori' => 'laptop'))->getResult('array');
    }

    public function data_tablet(){
        return $this->db->table('tb_brg')->getWhere(array('kategori' => 'tablet'))->getResult('array');
    }

    public function data_tv(){
        return $this->db->table('tb_brg')->getWhere(array('kategori' => 'tv'))->getResult('array');
    }

    public function data_headset(){
        return $this->db->table('tb_brg')->getWhere(array('kategori' => 'headset'))->getResult('array');
    }
}