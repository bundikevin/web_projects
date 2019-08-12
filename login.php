<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="registration_login.css ">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	
</head>
<body>
<?php include 'includes/navbar.php' ?>
 <div class="container" >
 <div class="login-form">
    <form action="process.php" method="post">
        <h2 class="text-center">Login</h2>  
		<hr/>     
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
			<button type="submit" class="btn btn-primary " >Login</button>|
			<label class="pull-right checkbox-inline"><input type="checkbox"> Remember me</label>|
			<a href="#" class="pull-right">Forgot Password?</a>
        </div>
        <div class="clearfix">
            
		</div> 
		<p>
			Not yet a member?<a href="registration.php">Register</P>
		</p>       
    </form>
     
</div>
	 
 </div >	
</body>
</html>