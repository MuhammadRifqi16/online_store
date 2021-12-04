<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

use App\Models\ModelInvoice;

class Invoice extends BaseController{
    public function __construct()
    {
        $this->invoice = new ModelInvoice();
        $this->cart = \Config\Services::cart();
    }
    public function index()
    {
        $data['invoice'] = $this->invoice->tampil_data();
        $data['total_items'] = $this->cart->totalItems();
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar',$data);
        echo view('admin/invoice',$data);
        echo view('templates_admin/footer');
    }
}