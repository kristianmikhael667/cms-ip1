<?php

namespace App\Models\Admin\UserAdmin;

use CodeIgniter\Model;

class UserAdmin extends Model
{
    protected $table = "tbl_admin";
    protected $primaryKey = "id_admin";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_admin', 'username', 'alamat', 'email', 'password', 'upload_logo', 'Status'];
}
