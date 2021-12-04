<?php

namespace App\Controllers;
use App\Models\ModelAuth;

class Auth extends BaseController {

    public function __construct()
    {
        $this->auth = new ModelAuth();
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function login()
    {

        $validate = $this->validate([
            'username' => [
                'rules'=>'required|string|min_length[3]',
                'errors'=>[
                    'required'=>'username harus diisi',
                    'string'=>'username harus diisi dengan karakter',
                    'min_length'=>'username minimal 3 karakter',
                ]
            ],
            'password' => [
                'rules'=>'required|string|min_length[3]',
                'errors'=>[
                    'required'=>'password harus diisi',
                    'string'=>'password harus diisi dengan karakter',
                    'min_length'=>'password minimal 3 karakter',
                ]
            ],
        ]);
        if ($validate==FALSE)
        {
            $data['session'] = $this->session;
            $data['validation'] =\Config\Services::validation();
            echo view('templates/header');
            echo view('form_login',$data);
            echo view('templates/footer');
        }else{
            $auth = $this->auth->cek_login(
                $this->request->getVar('username'),
                $this->request->getVar('password'),
            );

            if($auth == FALSE)
            {
                $this->session->setFlashdata('pesan','<div 
                class="alert alert-danger 
                alert-dismissible fade show" 
                role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="btn-close" 
                data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>');
              return redirect()->to('/auth/login')->withInput();
            }else{
                $this->session->setFlashdata('username',$auth-> username);
                $this->session->setFlashdata('role_id',$auth->role_id);

                switch($auth->role_id){
                    case 1 : 
                    return redirect()->to('/admin/dashboardadmin');
                            break;
                    case 2 : 
                    return redirect()->to('/dashboard');
                            break;
                    default: break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
}