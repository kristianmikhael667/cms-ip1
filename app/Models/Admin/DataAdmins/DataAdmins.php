<?php

namespace App\Models\Admin\DataAdmins;

use CodeIgniter\Model;

class DataAdmins extends Model
{
    protected $table = 'tbl_admin';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_admin', 'username', 'nama_perusahaan', 'alamat', 'email', 'password', 'upload_logo', 'Status'];

    public function getDataAdmin($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->first();
    }
}
