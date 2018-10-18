<section class="contentWrapper container">
	<h1>Create a New Account</h1>
	<form method="post" id="regForm" action="models/saveUser.php">
		<div class="fieldModal">
			<label>Username:</label>
			<input id="name" class="required" type="text" name="strUsername" placeholder="i.e. johndoe" />
		</div><!-- End of name -->
		
		<div class="fieldModal">
			<label>E-mail:</label>
			<input id="email" class="required" type="email" name="strEmail" placeholder="email@email.com" />
		</div><!-- End of email -->

		<div class="fieldModal">
			<label>Password:</label>
			<input id="password" class="required" type="password" name="strPassword"  placeholder="Min. 6 characters" />
		</div><!-- End of password -->
		
		<div class="fieldModal">
			<label>First Name:</label>
			<input id="firstName" class="required" type="text" name="strFirstName" placeholder="John" />
		</div><!-- End of firstName -->

		<div class="fieldModal">
			<label>Last Name:</label>
			<input id="lastName" class="required" type="text" name="strLastName" placeholder="Doe" />
		</div><!-- End of lastName -->

		<div class="fieldModal">
			<label>Date of Birth:</label>
			<input id="dob" class="required" type="date" name="dateOfBirth" />
		</div><!-- End of DOB -->

		<div class="fieldModal">
			<label>Job Title:</label>
			<input id="jobTitle" class="required" type="text" name="strJob" placeholder="i.e. Photographer" />
		</div><!-- End of Job -->

		<div class="fieldModal">
			<label>Country:</label>
			<select id="nCountryID" class="required">
				<option value="">Select an option...</option>
		<?php
			$sql = "SELECT * FROM countries";
			$arrCountries = Connect::runSql('getData', $sql);

			foreach ($arrCountries as $country) {
		?>
				<option value="<?=$country['id']?>"><?=$country['strName']?></option>
		<?php
			}
		?>
			</select>
		</div><!-- End of Country -->

		<div class="fieldModal">
			<label>State:</label>
			<select id="nStateID" class="required" name="">
				<option value="">Select an option...</option>
			</select>
		</div><!-- End of State -->

		<div class="fieldModal">
			<label>City:</label>
			<input id="city" class="required" type="text" name="strCity" placeholder="i.e. Vancouver" />
		</div><!-- End of city -->

		<input class="btn orange" type="submit" id="submitForm" value="Register" />
		
		<?php
		include('alerts.html')
		?>
	</form><!-- End of form -->
</section>