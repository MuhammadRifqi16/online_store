<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class DashboardAdmin extends BaseController{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('admin/dashboard');
        echo view('templates_admin/footer');
    }
}