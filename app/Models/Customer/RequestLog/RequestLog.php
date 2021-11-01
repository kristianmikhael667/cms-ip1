<?php

namespace App\Models\Customer\RequestLog;

use CodeIgniter\Model;

class RequestLog extends Model
{
    protected $table = "request_log";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'type', 'uuid', 'phone', 'otp', 'status', 'time'];

    public function getLogs($uuid = false)
    {
        if ($uuid == false) {
            return $this->findAll();
        }

        return $this->where(['uuid' => $uuid])->first();
    }
}
