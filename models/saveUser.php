<?php
include("../classes/connect.php");

$hashpass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);

$sql = "INSERT INTO 
		users(
			strUsername,
			strEmail,
			strPassword,
			strFirstName, 
			strLastName,  
			dateOfBirth, 
			strJob,
			nStateID, 
			strCity) 
		VALUES (			
			'".$_POST['strUsername']."',
			'".$_POST['strEmail']."',
			'".$hashpass."',
			'".$_POST['strFirstName']."',
			'".$_POST['strLastName']."',
			'".$_POST['dateOfBirth']."',
			'".$_POST['strJob']."',
			'".$_POST['nStateID']."',
			'".$_POST['strCity']."')
		;";

Connect::runSql("saveData", $sql);
?>