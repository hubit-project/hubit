<?php 
include("../classes/connect.php");

$sql = "SELECT id, strPassword FROM users WHERE strUsername='".$_POST["strUsername"]."'";
$arrLoggedUser = Connect::runSql("singleData", $sql);

$passHash = $arrLoggedUser["strPassword"];

if(password_verify($_POST["strPassword"], $passHash)){
	session_start();
	$_SESSION["nUserID"] = $arrLoggedUser["id"];
	header("location: ../index.php?controller=Page&action=dashboard");
} else {
	header("location: ../index.php?error=true");
}
?>