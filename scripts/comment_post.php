<?php 
session_start();

	require_once('db_connect.php');

	//$usr=$_COOKIE['usr'];

	$comment = $_POST["comment_post"];
	$usr = $_COOKIE['usr'];

	//echo $comment_id;

	//$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$comment_id."'");
	$progress = mysqli_query($con,"SELECT progress FROM user WHERE usr = '".$usr."'");

while($row = mysqli_fetch_array($progress)) {
	$prog = $row['progress'];
	
	  	if ($prog == 1) {
	  		$sql = mysqli_query($con,"UPDATE user SET comment01= '$comment' WHERE usr='$usr'");
	   		//echo $comment;  
	  	}
	  	else if ($prog == 2) {
	  		$sql = mysqli_query($con,"UPDATE user SET comment02= '$comment' WHERE usr='$usr'");
	  		//echo $comment;
	  	}
	  	else if ($prog == 3) {
	  		$sql = mysqli_query($con,"UPDATE user SET comment03= '$comment' WHERE usr='$usr'");
	  		//echo $comment;
	  	}
	  	else if ($prog == 4) {
	  		$sql = mysqli_query($con,"UPDATE user SET comment04= '$comment' WHERE usr='$usr'");
	  		//echo $comment;
	  	}
	  	else if ($prog == 5) {
	  		$sql = mysqli_query($con,"UPDATE user SET comment05= '$comment' WHERE usr='$usr'");
	  		//echo $comment;
	  	}
	  	else {
	  		echo "Didn't work!";
	  	}
}

	mysqli_close($con);

	echo( '../display_test.php');
?>