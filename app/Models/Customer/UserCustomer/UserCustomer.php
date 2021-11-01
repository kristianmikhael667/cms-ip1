<?php

namespace App\Models\Customer\UserCustomer;

use CodeIgniter\Model;

class UserCustomer extends Model
{
    protected $table = "tbl_customer";
    protected $primaryKey = "id_customer";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_customer', 'username', 'nama_perusahaan', 'alamat', 'password', 'upload_logo', 'Status', 'role'];
}
