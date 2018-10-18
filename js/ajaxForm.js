$(function(){
	$("#submitForm").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveUser.php",
				method: "POST",	
				data: 
				{
					strUsername: $("#name").val(),
					strEmail: $("#email").val(),
					strPassword: $("#password").val(),
					strFirstName: $("#firstName").val(),
					strLastName: $("#lastName").val(),
					dateOfBirth: $("#dob").val(),
					strJob: $("#jobTitle").val(),
					nStateID: $("#nStateID").val(),
					strCity: $("#city").val(),
				},				
				success: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "green"
					}).html('Saved!');;
					$("#regForm")[0].reset();
				},
				error: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "red"
					}).html('Sorry! Please try later again.');
				}
			});
		}
	return false;
	});
});