<?php

$userHubs = getData('allHubs');

?>
<div class="contentWrapper container">
	<div class="myHubsTitle">
		<h2>My hubs</h2>
	</div><!--myHubsTitle-->
<?php
	foreach($userHubs as $hub){
?>
	<div class="myHubHolder">
		<div class="myHubCover coverBg">
			<a href="index.php?controller=Page&action=hub&hubID=<?=$hub['id']?>">
				<img src="assets/<?=$hub['strCoverPhoto']?>" alt="myhub">
			</a>
		</div><!--myHubCover-->

		<div class="myHubHeadings">
			<h3><?=$hub['strName']?></h3>
			<p>(Admin/s Name)</p>
		</div><!--myHubHeadings-->
	</div><!--myHubHolder-->
<?php
	}
?>
	<div class="myHubHolder">
		<div class="myHubCover coverBg">
			<a href="index.php?controller=Page&action=createhub">
				<img src="images/add-hub-icon.png" alt="myhub">
			</a>
		</div><!--myHubCover-->

		<div class="myHubHeadings">
			<h3>Create new hub</h3>
		</div><!--myHubHeadings-->
	</div><!--myHubHolder-->

</div>