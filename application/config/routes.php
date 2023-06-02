<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['about'] = 'pages/view/about';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

// Sign in & Sign Up Routes
$route['default_controller'] = 'login/view';
$route['register'] = 'login/view/register';
$route['recovery-login'] = 'login/view/recovery';

// Console Routes
$route['console'] = 'console/view';

// Any
$route['(:any)'] = 'pages/view/$1';
