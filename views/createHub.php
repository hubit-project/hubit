<section class="contentWrapper container">
	<h1>Create a New Hub</h1>
	<form method="post" id="hubForm" action="models/saveHub.php" enctype="multipart/form-data">
		<div class="fieldModal">
			<label>Hub Name:</label>
			<input id="name" class="required" type="text" name="strName" placeholder="i.e. Web14" />
		</div><!-- End of Hub Name -->
		
		<div class="fieldModal">
			<label>Short Description:</label>
			<textarea id="description" name="strDescription" placeholder="Talk about the hub..."></textarea>
		</div><!-- End of Description -->

		<div class="fieldModal">
			<label>Cover Photo:</label>
			<input id="coverPhoto" type="file" name="strCoverPhoto" />
		</div><!-- End of Cover Photo -->		

		<input class="btn orange" type="submit" id="submitHub" value="Create Hub" />
		
		<?php
		include('alerts.html')
		?>
	</form><!-- End of form -->
</section>