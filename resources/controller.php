<?php
//If somebody is trying to directly access this file.
defined('COMPONENT') or die('Access Denied.');

//Handles all user interaction.
class Controller{
	//Our request URI.
	private static $uri = null;
	private static $config = null;

	//Create a new URI object and load the view.
	public static function load($config){
		static::$config = $config;

		static::$uri = new URI();

		//If a page was specified load the view for that page.
		$arg = static::$uri->getArg(0);

		if($arg == 'post'){
			$arg = static::$uri->getArg(1);

			if(preg_match('/\d+/', $arg)){
				require 'views/post.php';
			}
		}
		//Just load the index page.
		else{
			require 'views/index.php';
		}
	}

	//Returns the current URI object.
	public static function getURI(){
		return static::$uri;
	}

	//Returns the current post ID. -1 if not available.
	public static function getPost(){
		$arg = static::$uri->getArg(0);

		if($arg == 'post'){
			$arg = static::$uri->getArg(1);

			if(preg_match('/\d+/', $arg)){
				return $arg;
			}
		}
		else{
			return -1;
		}
	}

	//Returns the application configuration.
	public static function getConfig($key){
		return static::$config[$key];
	}
}
?>