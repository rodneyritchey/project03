<?php include "scripts/base.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tagger Login</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<?php  
		if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))  
		{  
		     echo "<meta http-equiv='refresh' content='=2;members.php' />";  
		}  
		elseif(!empty($_POST['username']) && !empty($_POST['email']))  
		{  
		    $username = mysql_real_escape_string($_POST['username']);  
		    $email = mysql_real_escape_string($_POST['email']);  
		      
		    $checklogin = mysql_query("SELECT * FROM users WHERE usr = '".$username."'");  
		      
		    if(mysql_num_rows($checklogin) == 1)  
		    {  
		        $row = mysql_fetch_array($checklogin);  
		        $email = $row['EmailAddress'];  
		          
		        $_SESSION['Username'] = $username;  
		        $_SESSION['EmailAddress'] = $email;  
		        $_SESSION['LoggedIn'] = 1;  
		          
		        echo "<h1>Success</h1>";  
		        echo "<p>We are now redirecting you to the member area.</p>";  
		        echo "<meta http-equiv='refresh' content='=2;tagger_index.php' />";  
		    }  
		    else  
		    {  
		        echo "<h1>Error</h1>";  
		        echo "<p>Sorry, your account could not be found. Please <a href=\"tagger_index.php\">click here to try again</a>.</p>";  
		    }  
		}  
		else  
		{  
		    ?>
		<header>
			<div id="logo">
				<img src="img/tagger_logo.png" />
			</div>
		</header>
		<div id="search_form">
			<form id="register" method="post" onsubmit="" action="tagger_index.php">
				<fieldset>
					<legend>
						<input type="text" name="username" id="username" placeholder="Username" />
						<input type="email" name="email" id="email" placeholder="@knightsmail.ucf.edu" /> 
						<input type="submit" id="submit" value="SUBMIT" />
					</legend>
				</fieldset>
			</form>
			<?php  
			}  
			?> 
		</div>
	</div>
</body>

</html>