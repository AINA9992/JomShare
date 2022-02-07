<?php include('server.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style1.css"_>
</head>

<body>
	<div class="header">
		<a href="mainpage.html">
		<img src="img/logo.png" width="200" height="100"></a>
	</div>

	<form method="post" action="register.php">

		<div class="input-group">
		<h2>REGISTER</h2><br>
		</div>

		<?php include('errors.php'); ?>

		<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
		<span class="error1">* <?php echo $error1;?></span>
		</div>
		
		<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
		<span class="error1">* <?php echo $error2;?></span></div>
		
		<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
		<span class="error1">* <?php echo $error3;?></span></div>
		
		<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
		<div class="errormessage">
		<span class="error1">* <?php echo $error4;?></span></div></div>
		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		
	</form>
	
</body>

</html>