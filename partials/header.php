<?php
	$arrInfo =  getData('profile');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vanarts Project Mockup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/site.webmanifest">
	<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#f17922">
	<meta name="msapplication-TileColor" content="#29abe2">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<header>
		<div id="headDiv" class="container">
			<a class="navHeader" id="logo" href="index.php?controller=Page&action=dashboard"><img src="images/logo.png" alt="hubit" /></a>
			<div class="navHeader">
				<a class="btHeader userHead" href="index.php?controller=Page&action=dashboard"><?=$arrInfo['strFirstName']?></a>
				<div id="userPhoto" class="btHeader coverBg">
					<a href="index.php?controller=Page&action=dashboard"><img src="assets/<?=$arrInfo['strProfilePhoto']?>" alt="user" /></a>
				</div>
				<div id="navIcon" class="btHeader">
					<img class="hMenu" src="images/hamb-menu.svg" alt="hamburguer menu" />
				</div>
			</div>
		</div>
	</header><!-- //header -->