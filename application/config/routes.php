<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['admin/orders'] = "order/getOrders";
$route['admin'] = 'order/admin';
$route['default_controller'] = 'order';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
