<?php

//db connect to test db through sqli
$con=mysqli_connect("localhost","ro961590","1Action_Hero1","ro961590");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>