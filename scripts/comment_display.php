<?php 
	session_start();

	require_once('db_connect.php');

	//$usr=$_COOKIE['usr'];

	$comment_id=$_POST['comment_id'];

	//echo $comment_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$comment_id."'");

	
while($row = mysqli_fetch_array($result))
  {
   echo "<div class='user_says' id='user_says'><h4>" .$row['usr']. " says</h4></div><div class='comment id='comment'>&quot;" .$row['comment']. "&quot;</div>";  
  }
 ?> 