<?php
namespace App\Models;

use CodeIgniter\Model;
class ModelInvoice extends Model{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_invoice';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'nama','alamat','tgl_pesan','batas_bayar','jasa_pengiriman','bank'
    ];
    public function index($data,$contents)
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $invoice = array (
            'nama'      => $data['nama'],
            'alamat'    => $data['alamat'],
            'jasa_pengiriman'    => $data['jasa_pengiriman'],
            'bank'    => $data['bank'],
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d H:i:s', mktime( date('H'),
                date('i'),date('s'),date('m'), date('d') + 1,date('Y'))
            ),
        );
        $this->insert($invoice);
        $id_invoice = $this->getInsertID();

        foreach ($contents as $item){
            $pesanan = array(
                'id_invoice'        => $id_invoice,
                'id_brg'            => $item['id'],
                'nama_brg'          => $item['name'],
                'jumlah'            => $item['qty'],
                'harga'             => $item['price'],
            );
            $this->db->table('tb_pesanan')->insert($pesanan);
        }

        return TRUE;

    }

    public function tampil_data()
    {        
        return $this->findAll();
    }
}