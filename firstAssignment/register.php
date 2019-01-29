<?php include('server.php') ?>
<!DOCTYPE html>
		<html>
		<head>
		<link rel="stylesheet" href="style.css">
			<meta charset="utf-8">
			<title>Registration</title>
		</head>
		<body>
			<div class = "FullDiv">
				<div class = "leftDiv">
					<img src="1.png">
				</div>
				<div class = "RightDiv">
					<div class = "InsDiv">
						<h1>Create an account</h1>
						<span><i>Already have an account?</i></span>
						<span><a href="login.php"><i>Sign in here</i></a></span></br>
						<form method="post" action="register.php" onsubmit="return SignUpValidForm()">
							<p>YOUR NAME</p>
							<input type="text" name="name" id= "name" placeholder="Full Name" value="<?php echo $username; ?>">
							<p>YOUR EMAIL</p>
							<input type="text" name="email" id="email" placeholder="your-email@example.com" value ="<?php echo $email; ?>">
							<p>YOUR PASSWORD</p>
							<input type="password" name="password_1" id ="password_1" placeholder="Choose something secure">
							<p>REPEAT PASSWORD</p>
							<input type="password" name="password_2"  id ="password_2" placeholder="Type again"></br></br></br>
							<input type="submit" value="CREATE FREE ACCOUNT" name="reg_user">
						</form>

					</div>
				</div>
			</div>
			<script src = "script.js"></script>
		</body>
		</html>