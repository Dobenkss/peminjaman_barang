<?php

namespace Config;

use App\Controllers\AdminPeminjamanController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// login
$routes->get('/', 'UserController::indexLogin');
$routes->post('user/login', 'UserController::Login');

//signup
$routes->get('/signup', 'UserController::indexSignUp');
$routes->post('/user/signup', 'UserController::SignUp');

$routes->get('/logout', 'UserController::logout');

$routes->get('/admin/index', 'AdminController::index');
$routes->get('/admin_list', 'AdminController::admin');
$routes->get('/peminjam/index', 'PeminjamController::index');
$routes->get('/peminjam_list', 'PeminjamController::member');

$routes->get('/logout', 'AdminController::logout');

// barang
$routes->get('/barang', 'BarangController::index');
$routes->get('/barang/create', 'BarangController::create');
$routes->post('/barang/store', 'BarangController::store');
$routes->get('/barang/edit/(:num)', 'BarangController::edit/$1');
$routes->post('/barang/update/(:num)', 'BarangController::update/$1');
$routes->get('/barang/delete/(:num)', 'BarangController::delete/$1');

//peminjaman
$routes->get('/peminjaman', 'PeminjamanController::index');
$routes->get('/daftar_barang', 'PeminjamanController::daftarBarang');
$routes->get('/prosespeminjaman(:num)', 'PeminjamanController::prosesPeminjaman/$1');
$routes->post('/peminjaman/store', 'PeminjamanController::store');

$routes->get('admin/peminjaman/ubah-status/(:num)', 'PeminjamanController::ubahStatus/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
