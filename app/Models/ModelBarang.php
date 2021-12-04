<?php
namespace App\Models;

use CodeIgniter\Model;
class ModelBarang extends Model{
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
    public function tampil_data(){
       return $this->findAll();
    }

    public function tambah_barang($data){
       $this->insert($data); 
    }

    public function edit_barang($id){
        return $this->find($id);
    }

    public function update_data($data)
    {
        $this->save($data);
    }

    public function hapus_data($id){
        $this->delete($id);
    }

    public function find_data($id)
    {
        $result = $this->find($id);
        if($result){
            return $result;
        }else{
            return array();
        }
    }

}