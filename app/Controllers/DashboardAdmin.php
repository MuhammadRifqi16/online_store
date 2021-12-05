<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController
{
    public function index()
    {
        echo view('templates_admin/header');
        echo view('templates_admin/sidebar');
        echo view('admin/dashboard');
        echo view('templates_admin/footer');
    }
}
