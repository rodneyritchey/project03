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
   		echo "<h1>Upload your profile pic here:</h1>";
   		echo "<form name='image' id='image' enctype='multipart/form-data' action='scripts/image_up.php' method='POST'>
<div id='choose'><input type='file' class='button' id='browse' name='Photo' size='2000000' accept='image/gif, image/jpeg, image/x-ms-bmp, image/x-png' size='26'><br/>
<INPUT type='submit' class='button' name='Submit' value='  Submit  '> 
&nbsp;&nbsp;<INPUT type='reset' class='button' value='Cancel'></div>
</form>";
   	}   
  }
 ?> 