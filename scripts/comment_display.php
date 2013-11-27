<?php 
	session_start();

	require_once('db_connect.php');

	//$usr=$_COOKIE['usr'];

	$comment_id=$_POST['comment_id'];
	$usr=$_COOKIE['usr'];

	//echo $comment_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$comment_id."'");
	$progress = mysqli_query($con,"SELECT progress FROM user WHERE usr = '".$usr."'");

while($row = mysqli_fetch_array($progress)) {
	$prog = $row['progress'];
	while($row = mysqli_fetch_array($result))

	  {
	  	if ($prog == 1) {
	   		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment01']. "&quot;</div></div>";  
	  	}
	  	else if ($prog == 2) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment02']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 3) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment03']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 4) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment04']. "&quot;</div></div>";
	  	}
	  	else if ($prog == 5) {
	  		echo "<div class='comments_wrapper' id='comments_wrapper'><div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment05']. "&quot;</div></div>";
	  	}
	  	else {}
	  }
}
 ?> 