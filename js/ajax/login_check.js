$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'scripts/index_redirect.php',
					success: function(responseData) {
						window.location = (responseData);
					},
					error: function(responseData) {
						console.log('the login_check.php ajax call failed');
					}
				});
			});