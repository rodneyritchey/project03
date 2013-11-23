<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");

	
while($row = mysqli_fetch_array($result))
  {
   $pic = mysqli_query($con,"SELECT * FROM locations WHERE primary_key = '".$row['progress']."'");
	   while($row = mysqli_fetch_array($pic))
	  {
	   echo "<h3>This is not the " .$row['name']. "!</h3>";
	      
	  };  
  }
 ?> 