<?php

use App\Models\Admin\DataAdmins\DataAdmins;
use App\Models\Admin\DataCustomers\DataCustomers;
use App\Models\Admin\DataUsers\DataUsers;

function totalsadmin()
{
    $dataAdmins = new DataAdmins();
    $data['totaladmin'] = $dataAdmins->getDataAdmin();
    echo count($data['totaladmin']);
}

function totalscustomers()
{
    $dataCustomers = new DataCustomers();
    $data['totalcustomers'] = $dataCustomers->getDataCustomer();
    echo count($data['totalcustomers']);
}

function totalusers()
{
    $dataUsers = new DataUsers();
    $data['totalusers'] = $dataUsers->getDataUsers();
    echo count($data['totalusers']);
}
