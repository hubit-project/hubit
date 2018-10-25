<?php

$userHubs = getData('allHubs');

?>
<div class="contentWrapper container">
<?php
	foreach($userHubs as $hub){
?>
	<a href="index.php?controller=Page&action=hub"><?=$hub['strName']?></a><br/>
<?php
	}
?>
	<a href="index.php?controller=Page&action=createhub">Create New Hub</a>
</div>