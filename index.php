<?php
function classLoades($class)
{
	include 'classes/'.$class.'.php';
}
spl_autoload_register('classLoades');

include("controllers/MainController.php");
include("partials/header.php");

$action = (isset($_GET["action"]))?$_GET["action"]:"login";
$controller = (isset($_GET["controller"]))?ucfirst($_GET["controller"]):"Page";

$oRouter = new Router();
$oRouter->go($controller, $action);

include("partials/footer.php");

?>