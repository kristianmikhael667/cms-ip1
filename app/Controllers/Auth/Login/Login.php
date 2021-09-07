<?php

namespace App\Controllers\Auth\Login;

use App\Controllers\Base\BaseController;
use App\Models\Admin\UserAdmin\UserAdmin;
use App\Models\Customer\UserCustomer\UserCustomer;
use App\Models\User\Users\Users;
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

        $modeladmin = new UserAdmin();
        $modelcustomer = new UserCustomer();
        $modeluser = new Users();

        $username = $request->getPost('username');
        $password = $request->getPost('password');

        $dataUserAdmin = $modeladmin->where([
            'username' => $username,
        ])->first();

        $dataUserCustomer = $modelcustomer->where([
            'username' => $username,
        ])->first();

        $dataUsers = $modeluser->where([
            'username' => $username,
        ])->first();

        if ($dataUserAdmin) {
            if (password_verify($password, $dataUserAdmin->password)) {
                session()->set([
                    'id_admin' => $dataUserAdmin->id_admin,
                    'username' => $dataUserAdmin->username,
                    'alamat' => $dataUserAdmin->alamat,
                    'email' => $dataUserAdmin->email,
                    'password' => $dataUserAdmin->password,
                    'upload_logo' => $dataUserAdmin->upload_logo,
                    'Status' => $dataUserAdmin->Status,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/admin/dashboard-admin'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } elseif ($dataUserCustomer) {
            if (password_verify($password, $dataUserCustomer->password)) {
                session()->set([
                    'id_customer' => $dataUserCustomer->id_customer,
                    'username' => $dataUserCustomer->username,
                    'nama_perusahaan' => $dataUserCustomer->nama_perusahaan,
                    'password' => $dataUserCustomer->password,
                    'alamat' => $dataUserCustomer->alamat,
                    'upload_logo' => $dataUserCustomer->upload_logo,
                    'Status' => $dataUserCustomer->Status,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/customer/dashboard-customer'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } elseif ($dataUsers) {
            if (password_verify($password, $dataUsers->password)) {
                session()->set([
                    'id_customer' => $dataUsers->id_customer,
                    'username' => $dataUsers->username,
                    'nama_perusahaan' => $dataUsers->nama_perusahaan,
                    'password' => $dataUsers->password,
                    'alamat' => $dataUsers->alamat,
                    'upload_logo' => $dataUsers->upload_logo,
                    'Status' => $dataUsers->Status,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/user/dashboard-user'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
