<?php
include("../classes/connect.php");
$fileUpload = Connect::uploadImg("strCoverPhoto");

if($fileUpload) {
	$sql = "INSERT INTO 
			hubs(
				strName,
				strDescription,
				strCoverPhoto) 
			VALUES (			
				'".$_POST['strName']."',
				'".$_POST['strDescription']."',
				'".$fileUpload."')
			;";

	Connect::runSql("saveData", $sql);

	header("location: index.php");
} else {
	header("location: ../index.php?controller=Page&action=createhub");
}

?>