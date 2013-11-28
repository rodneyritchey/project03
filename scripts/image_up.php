<?PHP
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost 
$db_user = "root"; // change to your database password 
$db_password = "root"; // change to your database password 
$database = "tagger"; // provide your database name 
$db_table = "user"; // Your Table Name where you want to Store Your Image. 
# STOP HERE 
#################################################################### 
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE 
$db = mysql_connect($hostname, $db_user, $db_password); 
mysql_select_db($database,$db);
$uploadDir = '../img/users/'; //Image Upload Folder
$setdir = 'img/users/';
if(isset($_POST['Submit']))
{
$fileName = $_FILES['Photo']['name'];
$tmpName  = $_FILES['Photo']['tmp_name'];
$fileSize = $_FILES['Photo']['size'];
$fileType = $_FILES['Photo']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}

$usr=$_COOKIE['usr'];
$query = "UPDATE $db_table SET usr_pic= '$setdir$filePath' WHERE usr='$usr'";
mysql_query($query) or die('Error, query failed'); 
};
header( 'Location: ../members.php');
?>