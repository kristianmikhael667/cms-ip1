<?php

namespace App\Controllers\Auth\Login;

use App\Controllers\Base\BaseController;
use App\Models\Admin\UserAdmin\UserAdmin;
use Config\Services;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/index');
    }

    public function store()
    {
        $data = array();

        $session = Services::session();
        $request = Services::request();

        $model = new UserAdmin();

        $username = $request->getPost('username');
        $password = $request->getPost('password');

        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_admin'       => $data['id_admin'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
}
