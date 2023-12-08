<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// user routes
$route['default_controller'] = 'users_controllers/welcome'; 

// admin routes
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
