<?php session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	}
	else{
		header('Location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h2>WHO WANTS TO BE A MILLIONAIRE?</h2>
	<img src="logo.png"><br/>
<div>
	<h2>WELCOME, <?php print $_SESSION["username"] ?></h2>
	
	<p> <b>RULES:</b> <br> GET ALL THE QUESTIONS RIGHT TO BE A MILLIONAIRE!<br/>
	</p>

    <div>
        <button onclick="document.location='question.php'">Questions</button>
		<button onclick="document.location='leaderboard.php'">Leaderboard</button>
		<button onclick="document.location='logout.php'">Log Out</button>
    </div>
</div>
</body>