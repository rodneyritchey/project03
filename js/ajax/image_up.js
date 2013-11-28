//Ajax call for login.php
$(document).ready(function() {
				$('form').submit(function(e) {
					e.preventDefault();
					var fd = new FormData();

            		fd.append( "fileInput", $("#fileInput")[0].files[0]);
					$.ajax({
						data: fd,
                		processData: false,
                		contentType: false,
						type: 'post',
						url: '../scripts/image_up.php',
						success: function(responseData) {
							window.location.replace(responsedata);
							//$('body').empty().html(responseData);
							
						},
						error: function(responseData) {
							console.log('the login.php ajax call failed');
						}
					});
				});
			});