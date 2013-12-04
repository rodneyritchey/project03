<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Members Area</title>
<link rel="icon" href="img/favicon.ico" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/ajax/member_check.js"></script>
<script src="js/tagit.js"></script>
</head>

<body>
	<div class="wrapper">
		<div class="top_wrapper" id="top_wrapper">
			<div class="member_wrapper">
				<div class="profile_pic" id="profile_pic"></div>
				<div class="greet" id="greet"></div>
			</div>
			<div id="logo_sm">
				<img src="img/tagger_logo.png" alt="Tagger" />
				<div class="line" id="line"></div>
				<div class="tag" id="tag"></div>
			</div>
		</div>
		
		<div class="btm_wrapper" id="btm_wrapper">
			<div class="loc_wrapper" id="loc_wrapper">
				<div class="loc_text" id="loc_text"></div>
				<div class="location" id="location"></div>
			</div>
			<div id="tagit">
				<button onclick="getLocation()">TAG IT!</button>
			</div>
			<div id="response"></div>
		</div>
	</div>
</body>

</html>