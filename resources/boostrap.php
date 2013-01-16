<?php
//If somebody is trying to directly access this file.
defined('COMPONENT') or die('Access Denied.');

//A list of files to load. An autoloader would be more suitable but this is just a small scale application.
$files = array(
	'config.php',
	'uri.php',
	'db.php',
	'model.php',
	'controller.php'
);

foreach($files as $file){
	require PATH . 'resources/' . $file;
}

//Connect to the database.
DB::connect($config['db']);

//Load the controller.
Controller::load($config);
?>