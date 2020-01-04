<?php 
require 'environment.php';

define("BASE", "http://localhost:8080/projeto_ead/");

global $config;
$config = array();

if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'mod_ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'mod_ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

 ?>