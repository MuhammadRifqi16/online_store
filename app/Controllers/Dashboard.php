<?php

namespace App\Controllers;
use App\Models\ModelBarang;
use App\Models\ModelInvoice;

class Dashboard extends BaseController{

    public function __construct()
    {
        $this->barang = new ModelBarang();
        $this->invoice = new ModelInvoice();
        $this->cart = \Config\Services::cart();
    }
    public function index()
    {
        $data['barang'] = $this->barang->tampil_data();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('dashboard', $data);
        echo view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $brg = $this->barang->find_data($id);

        $data = array(
            'id'      => $brg['id_brg'],
            'qty'     => 1,
            'price'   => $brg['harga'],
            'name'    => $brg['nama_brg'],
        );

        $this->cart->insert($data);
        return redirect()->route('/');

    }

    public function detail_keranjang()
    {
        $data['total_items'] = $this->cart->totalItems();
        $data['cart'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('keranjang');
        echo view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        return redirect()->route('/');
    }

    public function pembayaran()
    {
        $data['total_items'] = $this->cart->totalItems();
        $data['contents'] = $this->cart->contents();
        echo view('templates/header');
        echo view('templates/sidebar', $data);
        echo view('pembayaran');
        echo view('templates/footer');
    }
    
    public function prosespesanan()
    {
        

        $nama = $this->request->getVar('nama');
        $alamat = $this->request->getVar('alamat');
        $no_telp = $this->request->getVar('no_telp');
        $jasa_pengiriman = $this->request->getVar('jasa_pengiriman');
        $bank = $this->request->getVar('bank');

        $data= [
            'nama'      => $nama,
            'alamat'    => $alamat,
            'no_telp'   => $no_telp,
            'jasa_pengiriman'   => $jasa_pengiriman,
            'bank'      => $bank,
        ];
        $contents = $this->cart->contents();
        $is_processed = $this->invoice->index($data,$contents);



        if($is_processed){
        $this->cart->destroy();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('proses_pesanan');
        echo view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }
}