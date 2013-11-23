<?php 

	require_once('db_connect.php');
	
	$lat = $_POST["lat"];
	$lon = $_POST["lon"];
	$usr=$_COOKIE['usr'];

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");

	while($row = mysqli_fetch_array($result))
	  {
	   $loc = mysqli_query($con,"SELECT * FROM locations WHERE primary_key = '".$row['progress']."'");
		   while($row = mysqli_fetch_array($loc))
		  {
		   $lat_low = $row['lat_low'];
		   $lat_high = $row['lat_high'];
		   $lon_low = $row['lon_low'];
		   $lon_high = $row['lon_high'];
			if (($lat >= $lat_low && $lat <= $lat_high) && ($lon <= $lon_low  && $lon >= $lon_high)) {
					print "success.php";
				}
				else {
					print "fail.php";
				};
		  };
	  };

	

	

	//print "Your latitude is $lat and your longitude is $lon";

 ?>