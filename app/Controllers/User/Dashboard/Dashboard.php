<?php

namespace App\Controllers\User\Dashboard;

use App\Controllers\Base\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('users/dashboard_user/index');
    }

    //--------------------------------------------------------------------

}
