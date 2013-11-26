<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	$result = mysqli_query($con,"SELECT * FROM user");
	$progress = mysqli_query($con,"SELECT progress FROM user WHERE usr = '".$usr."'");

while($row = mysqli_fetch_array($progress)) {
	$prog = $row['progress'];
	while($row = mysqli_fetch_array($result))

	  {
	  	if ($prog == 1 && !empty($row['comment01'])) {
	   		echo "<div class='tag_wrapper'><h3><a href='#'' id='" .$row['usr']. "'>" .$row['tag']. "</a></h3></div>";  
	  	}
	  	else if ($prog == 2 && !empty($row['comment02'])) {
	  		echo "<div class='tag_wrapper'><h3><a href='#'' id='" .$row['usr']. "'>" .$row['tag']. "</a></h3></div>";
	  	}
	  	else if ($prog == 3 && !empty($row['comment03'])) {
	  		echo "<div class='tag_wrapper'><h3><a href='#'' id='" .$row['usr']. "'>" .$row['tag']. "</a></h3></div>";
	  	}
	  	else if ($prog == 4 && !empty($row['comment04'])) {
	  		echo "<div class='tag_wrapper'><h3><a href='#'' id='" .$row['usr']. "'>" .$row['tag']. "</a></h3></div>";
	  	}
	  	else if ($prog == 5 && !empty($row['comment05'])) {
	  		echo "<div class='tag_wrapper'><h3><a href='#'' id='" .$row['usr']. "'>" .$row['tag']. "</a></h3></div>";
	  	}
	  	else {}
	  }
}
 ?> 