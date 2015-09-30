<?php 

if($_POST['submit'] == "submit")
{
include '../includes/dbConnect.php';

$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$dbSelect = mysqli_select_db($dbConnect, 'rationarium');

$findUser = mysqli_query($dbConnect, "SELECT * FROM users WHERE username='$username'");

$row = mysqli_fetch_array($findUser);

$hashed_password = $row['password'];

if(password_verify($password, $hashed_password)){
header("location: ../jazzstorage.php");
} else {
header("location: ../notjazzstorage.php");
}

mysqli_close($dbConnect);
}

?>