<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['login'] = "users/login";
$route['register'] = "users/register";
$route['logout'] = "users/logout";
$route['recipes/add'] = "recipes/add";
$route['recipes/create'] = "recipes/create";
$route['recipes/like/(:any)'] = "recipes/like/$1";
$route['recipes/unlike/(:any)'] = "recipes/unlike/$1";
$route['recipes/(:any)'] = "recipes/show/$1";
$route['404_override'] = '';

//end of routes.php
