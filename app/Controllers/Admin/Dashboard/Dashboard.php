<?php

namespace App\Controllers\Admin\Dashboard;

use App\Controllers\Base\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard_admin/index');
    }

    //--------------------------------------------------------------------

}
