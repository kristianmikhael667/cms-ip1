<?php

namespace App\Controllers\Customer\Dashboard;

use App\Controllers\Base\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Customer | Infinity One Plus',
        ];
        return view('customer/dashboard_customer/index', $data);
    }

    //--------------------------------------------------------------------

}
