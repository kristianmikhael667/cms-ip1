<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers\Admin\Dashboard');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->group('admin', function ($routes) {
	$routes->get('/', 'Dashboard::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
	$routes->get('dashboard-admin', 'Dashboard::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
	$routes->get('list-admin', 'Dataadmin::index', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
	$routes->get('create-admin', 'Dataadmin::create', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
	$routes->post('store', 'Dataadmin::store', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
	$routes->get('list-customers', 'Dataadmin::datacustomer', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
	$routes->get('create-customer', 'Dataadmin::create_customer', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
	$routes->post('store_customer', 'Dataadmin::store_customer', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
	$routes->get('list-users', 'Dataadmin::datauser', ['namespace' => 'App\Controllers\Admin\Dataadmin']);
});

$routes->group('customer', function ($routes) {
	$routes->get('/', 'Dashboard::index', ['namespace' => 'App\Controllers\Customer\Dashboard']);
	$routes->get('dashboard-customer', 'Dashboard::index', ['namespace' => 'App\Controllers\Customer\Dashboard']);
});

$routes->group('user', function ($routes) {
	$routes->get('/', 'Dashboard::index', ['namespace' => 'App\Controllers\User\Dashboard']);
	$routes->get('dashboard-user', 'Dashboard::index', ['namespace' => 'App\Controllers\User\Dashboard']);
});

$routes->group('auth', function ($routes) {
	$routes->get('login', 'Login::index', ['namespace' => 'App\Controllers\Auth\Login']);
	$routes->post('login', 'Login::store', ['namespace' => 'App\Controllers\Auth\Login']);
	$routes->get('logout', 'Login::logout', ['namespace' => 'App\Controllers\Auth\Login']);
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}