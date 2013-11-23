<?php
session_start();

if (isset($_COOKIE['usr'])) {
  echo ('members.php');
}
else {
  echo ('login_index.php');
}

?>