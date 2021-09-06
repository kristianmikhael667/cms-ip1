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
});
$routes->group('auth', function ($routes) {
	$routes->get('login', 'Login::index', ['namespace' => 'App\Controllers\Auth\Login']);
	$routes->post('login', 'Login::store', ['namespace' => 'App\Controllers\Auth\Login']);
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
