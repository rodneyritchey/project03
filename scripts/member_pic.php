<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");

	
while($row = mysqli_fetch_array($result))
  {
   if($row['usr_pic']) {
   	echo "<img src='" .$row['usr_pic']."' />";
   	}
   	else {
   		echo "Upload pic here:";
   		echo "<form name='image' id='image' enctype='multipart/form-data' action='scripts/image_up.php' method='POST'>
            <div id='choose'>
              <input type='file' class='button' id='browse' name='Photo' value='Pic File' size='2000000' accept='image/gif, image/jpeg, image/x-ms-bmp, image/x-png' size='26'>
              <INPUT type='submit' class='button' name='Submit' value='Submit'>
            </div>
            </form>";
   	}   
  }
 ?> 