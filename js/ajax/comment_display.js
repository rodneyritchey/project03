$(document).ready(function() {
	$('body').on('click', 'a', function(e, comment_id)
		{
			e.preventDefault();

			var comment_id = ($(this).text());
			//var comment_id = ($(this).attr('id'));

			//$('div.comments_wrapper').toggleClass('comments_wrapper comments_wrapper_on');
			//$('#comments_wrapper').empty().html('<h4>Hi ' + comment + '</h4>');

			$.ajax({
					data: {comment_id: comment_id},
					type: 'post',
					url: 'scripts/comment_display.php',
					success: function(responseData) {
						$('#comments_wrapper').empty().html(responseData);
					},
					error: function(responseData) {
						console.log('the login_check.php ajax call failed');
					}
				});

		});


});