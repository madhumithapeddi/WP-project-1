<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
	$score = 3;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 2500;
?>

<html>
<head>
	<title>Question 3</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$5000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >At the closest point, which island group is only 50 miles south-east of the coast of Florida?</td>
		</tr>
		<tr>
			<td>A. US Virgin Islands</td>
			<td>B. Bahamas </td><!--Correct-->
		</tr>
		<tr>
			<td>C. Turks and Caicos Islands</td> 
			<td>D. Bermuda</td>
		</tr>
	</table>
	<form action="question4.php" method="post">
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