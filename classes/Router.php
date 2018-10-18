<?php

class Router
{
	function __construct()
	{
		//
	}

	function go($controller, $action)
	{
		$nameController = $controller."Controller";
		include_once('controllers/'.$nameController.'.php');
		$oController = new $nameController();

		$oController->$action();
	}
}

?>