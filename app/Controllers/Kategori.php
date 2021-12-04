<?php 

namespace App\Controllers;
use App\Models\ModelKategori;

class Kategori extends BaseController{
    public function __construct()
    {
        $this->kategori = new ModelKategori();
        $this->cart = \Config\Services::cart();
    }
    public function smartphone()
    {
        $data['smartphone'] = $this->kategori->
            data_smartphone();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('smartphone',$data);
        echo view('templates/footer');
    }

    public function laptop()
    {
        $data['laptop'] = $this->kategori->
            data_laptop();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('laptop',$data);
        echo view('templates/footer');
    }

    public function tablet()
    {
        $data['tablet'] = $this->kategori->
            data_tablet();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('tablet',$data);
        echo view('templates/footer');
    }

    public function tv()
    {
        $data['tv'] = $this->kategori->
            data_tv();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('tv',$data);
        echo view('templates/footer');
    }

    public function headset()
    {
        $data['headset'] = $this->kategori->
            data_headset();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates/header');
        echo view('templates/sidebar',$data);
        echo view('headset',$data);
        echo view('templates/footer');
    }
}