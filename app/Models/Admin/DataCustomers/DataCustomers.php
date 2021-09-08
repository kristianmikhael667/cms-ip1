<?php

namespace App\Models\Admin\DataCustomers;

use CodeIgniter\Model;

class DataCustomers extends Model
{
    protected $table = 'tbl_customer';
    // protected $primaryKey = "id_customer";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_customer', 'username', 'nama_perusahaan', 'password', 'alamat', 'upload_logo', 'Status'];

    public function getDataCustomer($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->first();
    }

    public function getIDDataCustomer($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_customer' => $id])->first();
    }
}
