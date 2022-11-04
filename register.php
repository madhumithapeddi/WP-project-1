<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<section>
		<img src="logo.png"><br/>

		<h1>Register to start the game</h1>
		<div>
			<form action="register-submit.php" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" required=""></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password1" required=""></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="password2" required=""></td>
					</tr>
				</table>
				<br>
					
				<button>Submit</button>
				<br><br>
				<a href="login.php">Already Registered? Login here</a>
			</form>
		</div>
	</section>
	
</body>
</html>