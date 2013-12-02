<?php 
	session_start();

	require_once('db_connect.php');

	$usr=$_COOKIE['usr'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$usr."'");

	
while($row = mysqli_fetch_array($result))
  {
   if($row['tag']) {
   	echo "<span class='tag'>" .$row['tag']. "</span>";
   	}
   	else {
   		echo "<div id='tag_post'>Upload your tag here:";
   		echo "<form id='tag' method='post' onsubmit='' action='scripts/tag_up.php' method='POST'>
        <fieldset>
          <legend>
            <input type='text' name='tag' id='tag' placeholder='Type your Tag here!' />
            <input type='submit' id='submit' value='SUBMIT' />
          </legend>
        </fieldset>
      </form></div>";
   	}   
  }
 ?>