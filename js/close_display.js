/*$('a').click(function(){
	e.preventDefault();
    alert($(this).text());
    return false;
});*/
$(document).ready(function() {
	$('#close_display').click(function(e)
	{
		e.preventDefault();
		$.ajax({
						data: {},
						type: 'get',
						url: 'scripts/progress_update.php',
						success: function(responseData) {
							window.location.replace(responseData);
							//$('#comment_post').empty().html(responseData);
							
						},
						error: function(responseData) {
							console.log('the login.php ajax call failed');
						}
					});

		//window.location.replace("members.php");

	});
});