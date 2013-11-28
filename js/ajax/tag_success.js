//Member progress
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/tag_success.php',
					success: function(responseData) {
						$('#loc_text').empty().html(responseData);
					},
					error: function(responseData) {
						$('#loc_text').empty().html(responseData);
					}
				});
			});

//Location Pic
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/progress_pic.php',
					success: function(responseData) {
						$('#location').empty().html(responseData);
					},
					error: function(responseData) {
						$('#location').empty().html(responseData);
					}
				});
			});