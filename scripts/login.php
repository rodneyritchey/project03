<?php 


require_once ('db_connect.php');

$username = $_POST["username"];
$email = $_POST["email"];

$results = mysqli_query($con,"SELECT * FROM user WHERE usr = '" .$username. "'");
$count = mysqli_num_rows($results);
//echo $count;
if ($count == 1) {

	require_once ('set_cookie.php');
	echo ('members.php');
}
else {
	
	require_once ('set_cookie.php');

 	$sql = mysqli_query($con,"INSERT INTO user (usr, email, progress) VALUES ('$username','$email','1')");
 	echo ('members.php');
}

?>