<?php

namespace App\Controllers\Admin\Dataadmin;

use App\Controllers\Base\BaseController;
use App\Models\Admin\DataAdmins\DataAdmins;

class Dataadmin extends BaseController
{
    protected $DataAdmins;
    public function __construct()
    {
        $this->DataAdmins = new DataAdmins();
    }
    public function index()
    {
        $data = [
            'title' => 'List Admin',
            'admins' => $this->DataAdmins->getDataAdmin()
        ];

        return view('admin/dataadmin/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Admin',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/dataadmin/create', $data);
    }

    public function store()
    {
        //validasi input
        if (!$this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[tbl_admin.username]',
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
                    'rules' => 'required|is_unique[tbl_admin.alamat]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],
                // 'upload_logo' => [
                //     'rules' => 'max_size[upload_logo,1024]|is_image[upload_logo]|mime_in[upload_logo,image/jpg,image/jpeg, image/png]',
                //     'errors' => [
                //         'max_size' => 'Ukuran Gambar diatas 1 MB',
                //         'is_image' => 'Bukan gambar',
                //         'mime_in' => 'Bukan JPG, JPEG, PNG',
                //         'required' => '{field} wajib diupload'
                //     ]
                // ],
                'status' => [
                    'rules' => 'required|is_unique[tbl_admin.status]',
                    'errors' => [
                        'required' => '{field} wajib diisi.',
                    ]
                ],


            ]
        )) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/create-admin')->withInput();
        }

        // ambil gambar
        $fileSampul = $this->request->getFile('upload_logo');

        //apakah tidak ada gambar diupload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'defaultimg.png';
        } else {
            //generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            //pindahkan ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        // $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->admins->save([
            'id_admin' => 'uuid()',
            'username' => $this->request->getVar('username'),
            'nama_perusahaan' => $this->request->getVar('penulis'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            // 'password' => $this->request->getVar('password'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),

            'upload_logo' => $namaSampul,
            'Status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/list-admin');
    }
}
