//Ajax call for login.php
$(document).ready(function() {
				$('form').submit(function(e) {
					e.preventDefault();
					var comment_post = document.getElementById('post_area').value;
					$.ajax({
						data: {comment_post: comment_post},
						type: 'post',
						url: 'scripts/comment_post.php',
						success: function(responseData) {
							window.location.replace(responseData);
							//$('#comment_post').empty().html(responseData);
							
						},
						error: function(responseData) {
							console.log('the login.php ajax call failed');
						}
					});
				});
			});