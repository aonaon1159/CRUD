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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Dashboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Welcome/login';
$route['logout'] = 'Welcome/login';
$route['car_brand'] = 'Car_brand/index';
$route['car_brand/(:any)'] = 'Car_brand/$1';
$route['car_brand/(:any)/(:any)'] = 'Car_brand/$1/$2';
$route['api/car_brand/get_all'] = 'api/Car_brand/get_all';
$route['api/car_brand/addnew'] = 'api/Car_brand/addnew';
$route['api/car_brand/edit'] = 'api/Car_brand/edit';
$route['api/car_brand/remove'] = 'api/Car_brand/remove'; 
                  
$route['car_detail'] = 'Car_detail/index';
$route['car_detail/(:any)'] = 'Car_detail/$1';
$route['car_detail/(:any)/(:any)'] = 'Car_detail/$1/$2';
$route['api/car_detail/get_all'] = 'api/Car_detail/get_all';
$route['api/car_detail/addnew'] = 'api/Car_detail/addnew';
$route['api/car_detail/edit'] = 'api/Car_detail/edit';
$route['api/car_detail/remove'] = 'api/Car_detail/remove'; 
                  
$route['car_type'] = 'Car_type/index';
$route['car_type/(:any)'] = 'Car_type/$1';
$route['car_type/(:any)/(:any)'] = 'Car_type/$1/$2';
$route['api/car_type/get_all'] = 'api/Car_type/get_all';
$route['api/car_type/addnew'] = 'api/Car_type/addnew';
$route['api/car_type/edit'] = 'api/Car_type/edit';
$route['api/car_type/remove'] = 'api/Car_type/remove'; 
                  
$route['car_version'] = 'Car_version/index';
$route['car_version/(:any)'] = 'Car_version/$1';
$route['car_version/(:any)/(:any)'] = 'Car_version/$1/$2';
$route['api/car_version/get_all'] = 'api/Car_version/get_all';
$route['api/car_version/addnew'] = 'api/Car_version/addnew';
$route['api/car_version/edit'] = 'api/Car_version/edit';
$route['api/car_version/remove'] = 'api/Car_version/remove'; 
                  
