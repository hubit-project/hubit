<?php
include("../classes/connect.php");
$sql = "SELECT countries_states.* FROM countries_states WHERE countries_states.nCountryID=".$_POST['nCountryID'];
$arrStates = Connect::runSql("getData", $sql);
//selecting the states that matched the countries id

include("../views/getStates.php");
?>