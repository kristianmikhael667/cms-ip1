<?php

namespace App\Models\Admin\UserAdmin;

use CodeIgniter\Model;

class UserAdmin extends Model
{
    protected $table = 'tbl_admin';
    protected $allowedFields = ['id_admin', 'username', 'nama_perusahaan', 'alamat', 'email', 'password', 'upload_logo', 'Status'];
}
