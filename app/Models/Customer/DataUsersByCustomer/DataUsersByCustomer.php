<?php

namespace App\Models\Customer\DataUsersByCustomer;

use CodeIgniter\Model;

class DataUsersByCustomer extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_user', 'id_customer', 'username', 'alamat', 'password', 'upload_logo', 'Status', 'role'];

    public function getDataUsers($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->first();
    }

    public function getDataUsersbycustomer($id_customer)
    {
        return $this->where(['id_customer' => $id_customer])->findAll();
    }
}
