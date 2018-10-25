<?php
include('connect.php');
$deleteTable = '';
$returnPage = '';
?>
<style>
	.tableRow{
		display: block;
		width: 100%;
		position: relative;
		clear: both;
	}
	.tableCell{
		display: inline-block;
		width: 100px;
		padding: 8px;
		text-align: center;
		border-right: 2px solid;
	}
</style>
<?php

$sql= "SELECT * FROM users where id=1";
//print_r(Connect::runSql("getData", $sql));
include('makeTable.php');
?>
<hr>
<?php

$sql= "SELECT * from 
			hubs_users 
		left join 
			hubs 
		on
			hubs_users.nUserID=1";
//print_r(Connect::runSql("getData", $sql));
include('makeTable.php');
?>
<hr>