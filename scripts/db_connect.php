<?php

//db connect to test db through sqli
$con=mysqli_connect("localhost","root","root","tagger");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>