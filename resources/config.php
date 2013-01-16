<?php
//If somebody is trying to directly access this file.
defined('COMPONENT') or die('Access Denied.');

$config = array(
	//Database information.
	'db' => array(
		'user' => 'root',
		'pass' => '',
		'name' => 'blog',
		'host' => 'localhost',
		'port' => '3306'
	),

	//Installation directory. Leave off the beginning "/".
	'dir' => 'blog/'
)
?>