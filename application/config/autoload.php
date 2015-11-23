<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();

// make sure you load the database, form_validation and session libraries automatically
$autoload['libraries'] = array('database', 'session', 'form_validation');

// autoload the URL helper as well
// URL will be helpful later when we deal with redirects 
$autoload['helper'] = array('url');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('user', 'recipe');

//end of autoload.php