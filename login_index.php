<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tagger Login</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="js/ajax/login_ajax.js"></script>
</head>

<body>
	<div class="wrapper">
		<header>
			<div id="logo">
				<img src="img/tagger_logo.png" alt="Tagger" />
			</div>
		</header>
		<div class="line" id="login_line"></div>
		<div id="search_form">
			<div id="response"></div>
			<form id="register" method="post" onsubmit="" action="#">
				<fieldset>
					<legend>
						<input type="text" name="username" id="username" placeholder="Username" />
						<input type="email" name="email" id="email" placeholder="@knightsmail.ucf.edu" /> 
						<input type="submit" id="submit" value="SUBMIT" />
					</legend>
				</fieldset>
			</form>
		</div>
	</div>
</body>

</html>