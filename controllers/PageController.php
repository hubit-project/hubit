<?php

class PageController extends MainController
{
	function __construct()
	{
		//
	}

	function login()
	{
		$content = $this->showView('login.php');
		echo $content;
	}

	function register()
	{
		$content = $this->showView('registration.php');
		echo $content;
	}
	
	function dashboard()
	{
		$content = $this->showView('profile.php');
		echo $content;
	}

	function hub()
	{
		$content = $this->showView('hub.php');
		echo $content;
	}
	
	function allhubs()
	{
		$content = $this->showView('allhubs.php');
		echo $content;
	}
	
	function createhub()
	{
		$content = $this->showView('createHub.php');
		echo $content;
	}

	function profile()
	{
		$content = $this->showView('registration.php');
		echo $content;
	}

	function album()
	{
		$content = $this->showView('album.php');
		echo $content;
	}

	function gallery()
	{
		$content = $this->showView('gallery.php');
		echo $content;
	}
}

?>