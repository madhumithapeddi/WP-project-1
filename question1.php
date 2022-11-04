<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
	$score = 1;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 500;
?>

<html>
<head>
	<title>Question 1</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$1000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Which of these religious observances lasts for the shortest period of time during the calendar year?</td>
		</tr>
		<tr>
			<td>A. Ramadan</td>
			<td>B. Diwali</td>
		</tr>
		<tr>
			<td>C. Lent</td> <!--Correct-->
			<td>D. Hanukkah</td>
		</tr>
	</table>
	<form action="question2.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="true">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>