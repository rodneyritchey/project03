//Member progress
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'scripts/comment_display.php',
					success: function(responseData) {
						$('#comment').empty().html(responseData);
					},
					error: function(responseData) {
						$('#comment').empty().html(responseData);
					}
				});
			});