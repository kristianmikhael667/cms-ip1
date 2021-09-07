<?php

namespace App\Models\Admin\DataAdmins;

use CodeIgniter\Model;

class DataAdmins extends Model
{
    protected $table = 'tbl_admin';
    // protected $primaryKey = "id_admin";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_admin', 'username', 'alamat', 'email', 'password', 'upload_logo', 'Status'];

    public function getDataAdmin($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->first();
    }
}
