$(function(){
	$('#nCountryID').on('change', function(){
		$.ajax(
		{
			url: "models/getStates.php",
			method: "POST",
			data:
			{
				nCountryID: $('#nCountryID').val()
			},
			success: function(result){				
				$("#nStateID").html(result);
			},
			error: function(response){
				console.log(response.statusText);
			}
		});
	});
});