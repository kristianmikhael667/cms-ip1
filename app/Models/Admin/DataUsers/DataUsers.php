<?php

namespace App\Models\Admin\DataUsers;

use CodeIgniter\Model;

class DataUsers extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'id_customer', 'username', 'nama_perusahaan', 'alamar', 'password', 'upload_logo', 'Status'];

    public function getDataUsers($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->first();
    }
}
