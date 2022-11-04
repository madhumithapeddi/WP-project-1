<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
	$score = 2;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 1000;
?>

<html>
<head>
	<title>Question 2</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$2500 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >In the UK, the abbreviation NHS stands for National what Service?</td>
		</tr>
		<tr>
			<td>A. Humanity</td>
			<td>B. Household</td>
		</tr>
		<tr>
			<td>C. Honour</td> 
			<td>D. Health</td><!--Correct-->
		</tr>
	</table>
	<form action="question3.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="true">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>