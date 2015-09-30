<?php 

//Created to test out PHPs built in password hashing function.

if($_POST['submit'] == "submit")
{
	
include '../includes/dbConnect.php';

$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$hash = password_hash($password, PASSWORD_DEFAULT);

$dbSelect = mysqli_select_db($dbConnect, 'rationarium');

$query = mysqli_query($dbConnect, "INSERT INTO users (username, password) VALUES ('$username', '$hash')") ;

if (!$query) {
   echo '<p>Unable to query the database: ' . mysqli_error($dbConnect) . ' .</p>';
} else {
   echo '<p>Added!</p>';
}

mysqli_close($dbConnect);
}

?>