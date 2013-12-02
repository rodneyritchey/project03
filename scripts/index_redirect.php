<?php
session_start();

require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");

if (isset($_COOKIE['usr'])) {
	while($row = mysqli_fetch_array($result)) {
	  	if($row['progress'] == 6) {
	  		echo "finished.php";
	  	}
	  	else {
  			echo ('members.php');
		}
	}
}
else {
  echo ('login_index.php');
}

?>