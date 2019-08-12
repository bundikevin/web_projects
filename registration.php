<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
    <link rel="stylesheet" type="text/css" href="registration_login.css ">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	
</head>
<body>
	<?php 
		include 'includes/navbar.php'
	?>
	<div class="container">
		<div class="registration-form">
			<form action="registration.php">
				<h4 class="text-center">Registration Form</h4>
				<div class="form-group">
					<input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="middlename" placeholder="Middle Name" required="required">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" name="mobileno" placeholder="Mobile No" required="required">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email1" placeholder="Email" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Password" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="confirpassword" placeholder="Confirm Password" required="required">
				</div>
				<div class="form-group" id="">
					<button type="submit" class="btn btn-primary">Register</button>
					<p class="pull-right">
						Already a member?<a href="login.php">Login</P>
					</p>
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>
