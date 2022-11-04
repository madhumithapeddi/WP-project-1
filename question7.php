<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 7;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 100000;
?>

<html>
<head>
	<title>Question 7</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$250000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Which toys have been marketed with the phrase “robots in disguise”?
</td>
		</tr>
		<tr>
			<td>A. Bratz Dolls</td>
			<td>B. Sylvanian Families</td>
		</tr>
		<tr>
			<td>C. Transformers</td> <!--Correct-->
			<td>D. Hatchimals</td>
		</tr>
	</table>
	<form action="question8.php" method="post">
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