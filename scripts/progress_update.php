<?php 

//Model function that adds a user by creating a new auto incremented record

require_once ('db_connect.php');

$usr=$_COOKIE['usr'];
//$tag = $_POST["tag"];

	//Sets cookie with id user and $vote_id as value
	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");
while($row = mysqli_fetch_array($result))
  {
  	$prog = ++$row['progress'];
	$sql="UPDATE user SET progress= '$prog' WHERE usr='$usr'";

	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	}
	//echo "1 record added";
	mysqli_close($con);

	//header( 'Location: ../members.php');
?>