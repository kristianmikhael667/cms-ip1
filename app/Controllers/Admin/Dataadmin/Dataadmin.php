<?php

namespace App\Controllers\Admin\Dataadmin;

use App\Controllers\Base\BaseController;
use App\Models\Admin\DataAdmins\DataAdmins;
use App\Models\Admin\DataCustomers\DataCustomers;
use App\Models\Admin\DataUsers\DataUsers;

class Dataadmin extends BaseController
{
    protected $dataAdmins;
    public function __construct()
    {
        $this->dataAdmins = new DataAdmins();
        $this->dataCustomers = new DataCustomers();
        $this->dataUsers = new DataUsers();
    }

    // View Data Admin
    public function index()
    {
        $data = [
            'title' => 'List Admin',
            'admins' => $this->dataAdmins->getDataAdmin()
        ];

        return view('admin/dataadmin/index', $data);
    }

    // View Data Customers
    public function datacustomer()
    {
        $data = [
            'title' => 'List Customers',
            'customers' => $this->dataCustomers->getDataCustomer()
        ];

        return view('admin/datacustomers/index', $data);
    }

    public function customer_detail()
    {

        $id_customer = $this->request->getVar('id_customer');

        $respon = $this->dataCustomers->getIDDataCustomer($id_customer);
        echo json_encode($respon);
    }

    // View Data Users
    public function datauser()
    {
        $data = [
            'title' => 'List Users',
            'users' => $this->dataUsers->getDataUsers()
        ];

        return view('admin/datausers/index', $data);
    }

    // View Create Admin
    public function create()
    {
        $data = [
            'title' => 'Create Admin',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/dataadmin/create', $data);
    }

    public function create_customer()
    {
        $data = [
            'title' => 'Create Customer',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/datacustomers/create', $data);
    }

    // Post Data Admin
    public function store()
    {
        if (!$this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[tbl_admin.username]|is_unique[tbl_user.username]|is_unique[tbl_customer.username]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ],
                'password' => [
                    'rules' => 'required|is_unique[tbl_admin.password]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                'email' => [
                    'rules' => 'required|is_unique[tbl_admin.email]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                'alamat' => [
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                'upload_logo' => [
                    'rules' => 'max_size[upload_logo,1024]|is_image[upload_logo]|mime_in[upload_logo,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar diatas 1 MB',
                        'is_image' => 'Bukan gambar',
                        'mime_in' => 'Bukan JPG, JPEG, PNG',
                        'required' => '{field} wajib diupload'
                    ]
                ]
            ]
        )) {

            return redirect()->to('/admin/create-admin')->withInput();
        }

        $fileSampul = $this->request->getFile('upload_logo');

        if ($fileSampul->getError() == 4) {
            $namaSampul = 'defaultimg.png';
        } else {
            $namaSampul = $fileSampul->getRandomName();

            $fileSampul->move('img', $namaSampul);
        }
        $this->dataAdmins->save([
            'id_admin' => random_string('nozero', 12),
            'username' => $this->request->getVar('username'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'upload_logo' => $namaSampul,
            'Status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('pesan', 'Data Admin Success Created.');
        return redirect()->to('/admin/list-admin');
    }

    // Post Data Customer
    public function store_customer()
    {
        if (!$this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[tbl_customer.username]|is_unique[tbl_user.username]|is_unique[tbl_customer.username]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ],
                'password' => [
                    'rules' => 'required|is_unique[tbl_customer.password]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                'nama_perusahaan' => [
                    'rules' => 'required|is_unique[tbl_customer.nama_perusahaan]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                'alamat' => [
                    'rules' => 'required|is_unique[tbl_customer.alamat]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                'upload_logo' => [
                    'rules' => 'max_size[upload_logo,1024]|is_image[upload_logo]|mime_in[upload_logo,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran Gambar diatas 1 MB',
                        'is_image' => 'Bukan gambar',
                        'mime_in' => 'Bukan JPG, JPEG, PNG',
                        'required' => '{field} wajib diupload'
                    ]
                ]
            ]
        )) {

            return redirect()->to('/admin/create-customer')->withInput();
        }
        $fileSampul = $this->request->getFile('upload_logo');

        if ($fileSampul->getError() == 4) {
            $namaSampul = 'defaultimg.png';
        } else {
            $namaSampul = $fileSampul->getRandomName();

            $fileSampul->move('img', $namaSampul);
        }
        $this->dataCustomers->save([
            'id_customer' => random_string('nozero', 12),
            'username' => $this->request->getVar('username'),
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'alamat' => $this->request->getVar('alamat'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'upload_logo' => $namaSampul,
            'Status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('pesan', 'Data Customer Success Created.');
        return redirect()->to('/admin/list-customers');
    }
}
