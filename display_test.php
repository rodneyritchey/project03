<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tag Display Test - Rodney Ritchey</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/ajax/tag_display.js"></script>
<script src="js/ajax/location_pic.js"></script>
<script src="js/ajax/comment_display.js"></script>
<script src="js/ajax/comment_post.js"></script>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles2.css" />
</head>

<body>
	<h1></h1>
	
		<div class="img_wrapper" id="main_img">
			<div class="tags_wrapper" id="tags_wrapper"></div>
			<div class="comments_container" id="comments_container">
				<div class="comment_post" id="comment_post">
				<form id="com_post" method="post" onsubmit="" action="#">
					<fieldset>
						<legend>
							<textarea name="post_area" id="post_area" form="com_post" placeholder="Enter comment here."></textarea>
							<input type="submit" id="submit" value="SUBMIT" />
						</legend>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>

</html>