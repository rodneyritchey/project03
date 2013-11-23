<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tag Fail</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/ajax/tag_success.js"></script>
<script>            
   setTimeout("window.location.replace('display_test.php')", 3500);
</script>
</head>

<body>
	<div class="wrapper">
		<header>
			<div id="logo">
				<img src="img/tagger_logo.png" />
			</div>
		</header>
		<div class="mark" id="green_mark">
			<img src="img/check_mark_green.png" />
		</div>
		<div class="loc_wrapper" id="loc_wrapper">
			<div class="loc_text" id="loc_text"></div>
			<div class="location" id="location"></div>
		</div>
	</div>
</body>

</html>