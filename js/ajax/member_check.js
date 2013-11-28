//Cookie check
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/member_check.php',
					success: function(responseData) {
						$('#greet').empty().html(responseData);
					},
					error: function(responseData) {
						$('#greet').empty().html(responseData);
					}
				});
			});
//Member Pic
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/member_pic.php',
					success: function(responseData) {
						$('#profile_pic').empty().html(responseData);
					},
					error: function(responseData) {
						$('#profile_pic').empty().html(responseData);
					}
				});
			});
//Member progress
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/member_progress.php',
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
//Member Tag
$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../scripts/member_tag_check.php',
					success: function(responseData) {
						$('#tag').empty().html(responseData);
					},
					error: function(responseData) {
						$('#tag').empty().html(responseData);
					}
				});
			});