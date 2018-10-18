<div class="contentWrapper container">
	<h2>Smith's family</h2>
	<h3>Albums</h3>
	<p>#SMITH TBT</p>
</div>

<div class="galleryContainer container">
<?php
$arrPictures = array(
	array(
		'strFile' => 'smith1.jpg'
	),
	array(
		'strFile' => 'smith1.jpg'
	),
	array(
		'strFile' => 'smith1.jpg'
	),
	array(
		'strFile' => 'smith1.jpg'
	),
	array(
		'strFile' => 'smith1.jpg'
	)
); 

foreach($arrPictures as $pictures)
{
?>
	<div class="pictureHolder">
		<div class="coverBg albumPictures">
			<img src="assets/<?=$pictures['strFile']?>">
		</div><!--coverBg-->
	</div><!--pictureHolder-->

<?php } ?>

	<!-- The Modal -->
	<div id="myModal" class="modal">
		  <span class="close">&times;</span>
		  	<img class="modal-content" id="modalImg">
		  <div id="caption"></div><!--caption-->
	</div><!--my modal-->

</div><!--galleryContainer-->

