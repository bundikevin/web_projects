<?php 
// Get values pass from form in login.php

$username = $_POST['username'];
$password = $_POST['password'];

// To prevent mysql injection

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// Connect to the server and select database
require_once "includes/config.php";

// Query the database for user

$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password ) {
	echo "Login Successful!! Welcome".$row	['username'];
} else {
	echo "Failed to Login!";
}

?>