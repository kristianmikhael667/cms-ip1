<?php

namespace App\Controllers\Customer\Datacustomer;

use App\Controllers\Base\BaseController;
use App\Models\Customer\DataUsersByCustomer\DataUsersByCustomer;
use App\Models\Customer\RequestLog\RequestLog;

class Datacustomer extends BaseController
{
    protected $dataLog;
    public function __construct()
    {
        // All Modals
        $this->dataLog = new RequestLog();
        $this->dataCustomers = new DataUsersByCustomer();
    }

    // View Data User by customer
    public function datauser()
    {
        $id = session('id_customer');
        $data = [
            'title' => 'List My Users',
            'customers' => $this->dataCustomers->getDataUsersbycustomer($id)
        ];
        return view('customer/datauserbycustomer/index', $data);
    }

    public function data_log()
    {
        $data = [
            'title' => 'List Request Log',
            'logs' => $this->dataLog->getLogs()
        ];
        return view('customer/requestlog/index', $data);
    }
}
