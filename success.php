<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tag Success</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/ajax/tag_success.js"></script>
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
		<header>
			<div id="logo">
				<img src="img/tagger_logo.png" />
			</div>
		</header>
		<div class="mark" id="green_mark">
			<img src="img/check_mark_green.png" />
		</div>
		<div class="btm_wrapper2">
			<div class="loc_wrapper" id="loc_wrapper">
				<div class="loc_text" id="loc_text"></div>
				<div class="location" id="location"></div>
			</div>
		</div>
	</div>
</body>
<script>            
   	$(setTimeout("window.location.replace('display_test.php')", 3500));
</script>
</html>