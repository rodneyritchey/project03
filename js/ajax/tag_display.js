//Member progress
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'scripts/tag_display.php',
					success: function(responseData) {
						$('#tags_wrapper').append(responseData);
					},
					error: function(responseData) {
						$('#tags_wrapper').empty().html(responseData);
					}
				});
			});