<?php

$host = 'localhost';
$user = 'root';
$pass = '';

$dbConnect = mysqli_connect($host, $user, $pass);

if($dbConnect->connect_errno > 0){
    die('Unable to connect to database [' . $dbConnect->connect_error . ']');
}
?>