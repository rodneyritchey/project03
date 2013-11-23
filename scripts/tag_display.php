<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user");

	
while($row = mysqli_fetch_array($result))
  {
   echo "<div class='tag_wrapper'><h3><a href='#''>" .$row['tag']. "</a></h3></div>";  
  }
 ?> 