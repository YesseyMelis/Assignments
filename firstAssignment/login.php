<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style2.css">
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
	<div class = "FullDiv">
		<div class = "leftDiv">
		</div>
		<div class = "RightDiv">
			<div class = "InsDiv">
				<h1>Sign In</h1>
				<span><i>Account Registration</i></span>
				<form method="post" action="login.php" onsubmit="return LogInValidForm()">
					<span><a href="register.php"><i>Sign up here</i></a></span></br>
					<p>YOUR EMAIL</p>
					<input type="text" name="email" id="email" placeholder="your-email@example.com">
					<p>YOUR PASSWORD</p>
					<input type="password" name="password" id="password" placeholder="Write ypur password"></br></br></br>
					<input type="submit" name="login_user" value="Sign In">
				</form>

			</div>
		</div>
	</div>
	<script src = "script.js"></script>
</body>
</html>