<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 8;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 250000;
?>

<html>
<head>
	<title>Question 8</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$500000 Question!</h2>
    <table>
		<tr style="height:100px">
			<td colspan=2 >Obstetrics is a branch of medicine particularly concerned with what?</td>
		</tr>
		<tr>
			<td>A. Childbirth</td><!--Correct-->
			<td>B. Broken bones</td>
		</tr>
		<tr>
			<td>C. Heart conditions</td> 
			<td>D. Old age</td>
		</tr>
	</table>
	<form action="question9.php" method="post">
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