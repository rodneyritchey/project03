//Member progress
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'scripts/comment_display.php',
					success: function(responseData) {
						$('#comments_wrapper').empty().html(responseData);
					},
					error: function(responseData) {
						$('#comments_wrapper').empty().html(responseData);
					}
				});
			});