<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Members Area</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/ajax/member_check.js"></script>
<script src="js/tagit.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46170663-1', 'rodneyritchey.com');
  ga('send', 'pageview');

</script>
</head>

<body>
	<div class="wrapper">
		<div class="top_wrapper" id="top_wrapper">
			<div class="member_wrapper">
				<div class="profile_pic" id="profile_pic"></div>
				<div class="greet" id="greet"></div>
			</div>
			<div id="logo_sm">
				<img src="img/tagger_logo.png" />
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