<?php

namespace App\Models\User\Users;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = "tbl_user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'id_customer', 'username', 'nama_perusahaan', 'alamat', 'password', 'upload_logo', 'Status', 'role'];
}
