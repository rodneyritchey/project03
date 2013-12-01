//Ajax call for login.php
$(document).ready(function() {
				$('form').validate({
					rules: {
						username: {
							required: true,
							minlength: 5,
							maxlength: 11,
						},
						email: {
							required: true,
							email: true,
						},
					},
					messages: {
						username: {
							required: "Please enter a username",
							minlength: "Your username must be at least 5 characters long.",
							maxlength: "Your username cannot be more than 11 characters long.",
						},
						email: "Please enter an email.",

					},

					
					
					submitHandler: function(form) {
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
									//$('#response').empty().html(responseData);
									//console.log(responseData);
									
								},
								error: function(responseData) {
									console.log('the login.php ajax call failed');
								}
							});
						});
					}
				});
			});