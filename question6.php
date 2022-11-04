<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 6;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 50000;
?>

<html>
<head>
	<title>Question 6</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h2>$100000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >What does the word loquacious mean?</td>
		</tr>
		<tr>
			<td>A. Angry</td>
			<td>B. Shy</td>
		</tr>
		<tr>
			<td>C. Chatty</td> <!--Correct-->
			<td>D. Beautifull</td>
		</tr>
	</table>
	<form action="question7.php" method="post">
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