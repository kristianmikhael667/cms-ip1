<?php

namespace App\Models\Admin\DataHocs;

use CodeIgniter\Model;

class DataHocs extends Model
{
    protected $table = 'tbl_hoc';
    protected $primaryKey = "id";
    public $incrementing = false;

    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'id_hoc', 'name_hoc', 'ip_router', 'status'];

    public function getIdHOC($id_hoc = false)
    {
        if ($id_hoc == false) {
            return $this->findAll();
        }
        return $this->where(['id_hoc' => $id_hoc])->first();
    }
}
