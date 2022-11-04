<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 5;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 10000;
?>

<html>
<head>
	<title>Question 5</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$50000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Which of these brands was chiefly associated with the manufacture of household locks?</td>
		</tr>
		<tr>
			<td>A. Phillips</td>
			<td>B. Flymo</td>
		</tr>
		<tr>
			<td>C. chubb</td> <!--Correct-->
			<td>D. Ronseal</td>
		</tr>
	</table>
	<form action="question6.php" method="post">
		<p>Choose your answer:
			<select name="answer">
				<option value="false">A</option>
				<option value="false">B</option>
				<option value="true">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class = "submit">
		</p>
	</form>
</body>


</html>