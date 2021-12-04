<?php 

namespace App\Controllers\admin;
use App\Controllers\BaseController;

use App\Models\ModelBarang;

class DataBarang extends BaseController{
    public function __construct()
    {
        $this->model_barang = new ModelBarang();
    }
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data();
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('admin/data_barang', $data);
        echo view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg           = $this->request->getVar('nama_brg');
        $keterangan         = $this->request->getVar('keterangan');
        $kategori           = $this->request->getVar('kategori');
        $harga              = $this->request->getVar('harga');
        $stok               = $this->request->getVar('stok');
        $gambar     = $this->request->getFile('image');
        $name = $gambar->getRandomName();
        $gambar->move('uploads',$name);

        $data = array (
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $name
        );

        $this->model_barang->tambah_barang($data);
        return redirect()->to('/admin/databarang');


    }

    public function edit($id)
    {
        $data['barang'] = $this->model_barang->edit_barang($id);
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('admin/edit_barang', $data);
        echo view('templates_admin/footer');
    }

    public function update(){
        $id_brg          = $this->request->getVar('id_brg');
        $nama_brg        = $this->request->getVar('nama_brg');
        $keterangan      = $this->request->getVar('keterangan');
        $kategori        = $this->request->getVar('kategori');
        $harga           = $this->request->getVar('harga');
        $stok            = $this->request->getVar('stok');

        $data = array(
            'id_brg'    => $id_brg,

            'nama_brg'     => $nama_brg,
            'keterangan'   => $keterangan,
            'kategori'     => $kategori,
            'harga'        => $harga,
            'stok'         => $stok
        );


        $this->model_barang->update_data($data);
        return redirect()->to('/admin/databarang');

    }

    public function hapus ($id)
    {
        $this->model_barang->hapus_data($id);
        return redirect()->to('/admin/databarang');

    }
}