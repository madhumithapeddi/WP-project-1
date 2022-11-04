<?php
	session_start();
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		header('Location: home.php');
		exit();
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<section>
		<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
		<img src="logo.png"><br/>
	
		<h1>LOGIN <a href="register.php"></a> </h1>
	
		<div>
			<form action="login-submit.php" method="post">
				
				<label for="username">Username:</label>
				<input type="text" name="username" required=""><br><br>
		
				<label for="password">Password:</label>
				<input type="password" name="password" required=""><br><br>
		
				<button>Submit</button><br><br>
			</form>
		</div>
	</section>
</body>
</html>