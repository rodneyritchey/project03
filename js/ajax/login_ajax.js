//Ajax call for login.php
$(document).ready(function() {
				$('form').submit(function(e) {
					e.preventDefault();
					var username = document.getElementById('username').value;
					var email = document.getElementById('email').value;
					$.ajax({
						data: {username: username, email: email},
						type: 'post',
						url: 'scripts/login.php',
						success: function(responseData) {
							window.location.replace(responseData);
							//$('body').empty().html(responseData);
							
						},
						error: function(responseData) {
							console.log('the login.php ajax call failed');
						}
					});
				});
			});