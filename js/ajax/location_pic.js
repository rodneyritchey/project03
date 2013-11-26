$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'scripts/location_name.php',
					success: function(responseData) {
						$('h1').empty().html(responseData);
					},
					error: function(responseData) {
						$('h1').empty().html(responseData);
					}
				});
			});
//Location Pic
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'scripts/location_pic.php',
					success: function(responseData) {
						$('#main_img').css({ 'background-image':'url(img/locations/' + responseData + ')' });
					},
					error: function(responseData) {
						$('#main_img').empty().html(responseData);
					}
				});
			});