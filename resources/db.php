<?php
//If somebody is trying to directly access this file.
defined('COMPONENT') or die('Access Denied.');

class DB {
	private static $config = array();
	private static $connection = null;

	//Attempt to connect to the database.
	public static function connect($config){
		$base = 'mysql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['name'];

		static::$config = $config;
		static::$connection = new PDO($base, $config['user'], $config['pass']);
	}

	//Performs database queries but returns the PDO object.
	public static function queryObj($query, $param){
		//Prepare the query.
		$query = static::$connection->prepare($query);

		//Bind data.
		if(!is_null($param) && is_array($param)){
			foreach($param as $key => $value){
				$query->bindValue($key, $value);
			}
		}

		//Execute the query.
		$query->execute();

		return $query;
	}

	//Perform database queries and returns the result.
	public static function query($query, $param, $type){
		$query = static::queryObj($query, $param);

		//Return the results.
		$result = $query->fetchAll($type);

		return $result;
	}

	//Returns a single specified value.
	public static function single($query, $param, $col){
		$result = static::query($query, $param, PDO::FETCH_ASSOC);

		return is_array($result) ? $result[0][$col] : null;
	}

	public static function isConnected(){
		return static::$connection !== null;
	}
}
?>