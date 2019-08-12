<?php 
// Get values pass from form in login.php

$email = $_POST['email'];
$password = $_POST['password'];

// To prevent mysql injection

$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

// Connect to the server and select database
require_once "includes/config.php";

// Query the database for user

$result = mysql_query("select * from users where email = '$email' and password = '$password'") or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['email'] == $email && $row['password'] == $password ) {
	echo "Login Successful!! Welcome".$row	['email'];
} else {
	echo "Failed to Login!";
}

//Register Button Functionality

if (isset($_POST['register'])){

	$firstname = "";
	$middlename = "";
	$lastname = "";
	$mobileno = "";
	$email = "";
	$password = "";
	$confirmpassword = "";
	$errors = array();

	//Prevent Injection
	$firstname = mysql_real_escape_string($firstname);
	$middlename = mysql_real_escape_string($middlename);
	$lastname = mysql_real_escape_string($lastname);
	$mobileno = mysql_real_escape_string($mobileno);
	$email = stripcslashes($email);
	$password = stripcslashes($password);
	$confirmpassword = stripcslashes($confirmpassword);

	//Ensure the two passwords match
	if($password != $confirmpassword){
		array_push($errors, "Passwords must match");
	}

	//If no errors save user Details
	if(count($errors == 0)){

		$password = md5($confirmpassword);
		$sql = "INSERT INTO users (first name, middle name, last name, mobile no, email, password) 
		VALUES('$firstname', '$middlename', '$lastname', '$mobileno', '$email', '$password')";
	}
}

?>