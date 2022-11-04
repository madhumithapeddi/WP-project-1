<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 4;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 5000;
?>

<html>
<head>
	<title>Question 4</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$10000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >What name is given to the revolving belt machinery in an airport that delivers checked luggage from the plane to baggage reclaim?</td>
		</tr>
		<tr>
			<td>A. Carousel</td><!--Correct-->
			<td>B. Hangar</td>
		</tr>
		<tr>
			<td>C. Terminal</td> 
			<td>D. Concourse</td>
		</tr>
	</table>
	<form action="question5.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="true">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>