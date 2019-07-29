<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	 
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	
</head>
<body>
 <div class="container" style="background: yellow">
	<div id="frm" class="form-group">
		<div class="h1">Login</div>
		<form action="process.php" method="POST" class="form-group" >
			<p>
				<label>Username:</label>
				
				<input type="text" id="user" name="user"/>
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass"/>
			</p>
			<p>
				<input  type="submit" class="btn btn-secondary" value="Login"/>
				<a class="btn" href="">Not Registered?</a>
			</p>
           
			<p>
				<input  type="submit"  class="btn btn-primary" value="Forgot Password?"/>
			</p>
		</form>

	</div>
 </div >	
</body>
</html>