<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//
// Auth
//
$route['login']['post'] = 'Login/proses_login';
$route['logout']['get'] = 'Login/logout';
$route['register']['get'] = 'Login/register';
$route['register-store']['post'] = 'Login/store_register';

//
// Dashboard
//
$route['dashboard']['get'] = 'Dashboard/index';

//
// User Management
//
$route['user']['get'] = 'User/index';
$route['user-tambah']['get'] = 'User/tambah';
$route['user-store']['post'] = 'User/store';
$route['user-hapus/(:num)']['get'] = 'User/hapus/$1';
$route['user-aktifasi/(:num)/(:any)']['get'] = 'User/aktifasi/$1/$2';

//
// Kategori Buku
//
$route['kategori']['get'] = 'Kategori/index';
$route['kategori-tambah']['get'] = 'Kategori/tambah';
$route['kategori-store']['post'] = 'Kategori/store';
$route['kategori-edit/(:num)']['get'] = 'Kategori/edit/$1';
$route['kategori-update']['post'] = 'Kategori/edit_store';
$route['kategori-hapus/(:num)']['get'] = 'Kategori/hapus/$1';

//
// Buku
//
$route['buku']['get'] = 'Buku/index';
$route['buku-tambah']['get'] = 'Buku/tambah';
$route['buku-store']['post'] = 'Buku/store';
$route['buku-edit/(:num)']['get'] = 'Buku/edit/$1';
$route['buku-update']['post'] = 'Buku/edit_store';
$route['buku-hapus/(:num)']['get'] = 'Buku/hapus/$1';

//
// Order Admin
//
$route['order']['get'] = 'Order/index';
$route['order-verifikasi/(:any)']['get'] = 'Order/verifikasi/$1';
$route['order-verifikasi-store']['post'] = 'Order/verifikasi_store';
$route['order-input-resi']['post'] = 'Order/input_resi';
$route['order-detail/(:any)']['get'] = 'Order/detail/$1';
$route['order-hapus/(:num)']['get'] = 'Order/hapus/$1';

//
// Order Pengguna
//
$route['daftar-buku']['get'] = 'Buku/user_index';
$route['buku-order-detail/(:num)']['get'] = 'Order/user_order/$1';
$route['buku-order-store']['post'] = 'Order/user_order_store';

//
// Riwayat
//
$route['riwayat']['get'] = 'Riwayat/index';
$route['riwayat-selesai/(:any)']['get'] = 'Riwayat/selesai/$1';
$route['riwayat-upload-bukti']['post'] = 'Riwayat/upload_bukti';
$route['riwayat-detail/(:any)']['get'] = 'Riwayat/detail_order/$1';

//
// Laporan
//
$route['laporan']['get'] = 'Laporan/index';
$route['laporan-print/(:num)/(:num)/(:any)']['get'] = 'Laporan/print/$1/$2/$3';