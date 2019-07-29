<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	 
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap.css">
</head>
<body>

<div class="container" style="background: yellow">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
  </a>
</nav>
	<div id="frm" class="form-group">
		<div class="h1">Login</div>
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				
				<input type="text" id="user" name="user"/>
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass"/>
			</p>
			<p>
				<input  type="submit" id="btn1" value="Login"/>
				<a id="btn2" href="">Not Registered?</a>
			</p>
           
			<p>
				<input  type="submit" id="btn3" value="Forgot Password?"/>
			</p>
		</form>

	</div>
</div >	
</body>
</html>