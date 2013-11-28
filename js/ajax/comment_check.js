$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/comment_check.php',
					success: function(responseData) {
						$('#comments_container').empty().html(responseData);
					},
					error: function(responseData) {
						$('#comments_container').empty().html(responseData);
					}
				});
			});