<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] = 'Login';
$route['Bantal'] = 'Bantal/index';
$route['Bantal/pagination/(:any)'] = 'Bantal/pagination/$1';
$route['admin'] = 'Admin/index';
$route['admin/ckategori'] = 'admin/ckategori';
$route['admin/(:any)'] = 'Admin/index/$1';
$route['admin/create'] = 'admin/create';

$route['default_controller'] = 'Bantal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
