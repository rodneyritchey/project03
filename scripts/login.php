<?php 

//Model function that adds a user by creating a new auto incremented record

require_once ('db_connect.php');

$username = $_POST["username"];
$email = $_POST["email"];
//Sets Session with vote_id
//require_once ('set_session.php');

$results = mysqli_query($con,"SELECT * FROM user WHERE usr = '".$username."'");
if($results) {

        //Sets cookie with id user and $vote_id as value
 require_once ('set_cookie.php');

 $sql="INSERT INTO user (usr, email, progress) VALUES ('$username','$email','1')";

 if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 //echo "1 record added";
 //mysqli_close($con);

 echo ('members.php');
}
else {
 require_once ('set_cookie.php');
 echo ('members.php');
}
?>