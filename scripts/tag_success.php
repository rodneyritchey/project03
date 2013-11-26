<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");


  while($row = mysqli_fetch_array($result))
  {
   $pic = mysqli_query($con,"SELECT * FROM locations WHERE primary_key = '".$row['progress']."'");
	   while($row = mysqli_fetch_array($pic)){
	   	if($row['primary_key'] == 1) {
	   		echo "<h3>Congratulations!</h3><h3>You tagged the " .$row['name']. "!</h3>";
	  	}
	  	else if($row['primary_key'] == 3 || $row['primary_key'] == 4) 
	  	{
	  		echo "<h3>Congratulations!</h3><h3>You tagged " .$row['name']. "!</h3>";
	  	}
	  	else {
	  		echo "<h3><h3>Congratulations!</h3><h3>You tagged the " .$row['name']. "!</h3>";
	  	}
	};
  }
 ?> 