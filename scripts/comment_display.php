<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");

	
while($row = mysqli_fetch_array($result))
  {
   echo "<h4>" .$usr. " says <span class='comment_tag'>" .$row['comment']. "</span></h4></div>";  
  }
 ?> 