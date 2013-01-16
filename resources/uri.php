<?php
//If somebody is trying to directly access this file.
defined('COMPONENT') or die('Access Denied.');

//Handles the URI.
class URI {
	//The requested URI as well as its arguements seperated using "/" as the delimeter.
	private $uri = null;
	private $original = null;
	private $args = array();

	//Basic constructor.
	function __construct(){
		//Set the current URI.
		$this->uri = $this->original = $_SERVER['REQUEST_URI'];

		//Remove the initial "/".
		$this->uri = substr($this->uri, 1);

		//Remove the installation directory from the path.
		$this->uri = preg_replace('#^' . Controller::getConfig('dir') . '#', '', $this->uri);

		//Split the URI into args based on "/".
		$this->args = explode('/', $this->uri);
	}

	public function getOriginal(){
		return $this->original;
	}

	//Returns the nubmer of arguements.
	public function length(){
		return count($this->args);
	}

	//Gets the argument at $index.
	public function getArg($index){
		if($index < $this->length()){
			return $this->args[$index];
		}
		else{
			return null;
		}
	}

	//Returns the arguement list.
	public function getArgs(){
		return $this->args;
	}
}
?>