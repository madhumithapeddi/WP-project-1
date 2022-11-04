<!DOCTYPE html>
<?php
	session_start();
	include 'check.php';
    $score = 9;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 500000;
?>

<html>
<head>
	<title>Question 9</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>Correct!</h2>
	<h4>Final Question: $1000000 Question!</h4>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Construction of which of these famous landmarks was completed first?</td>
		</tr>
		<tr>
			<td>A. Empire State Building</td>
			<td>B. Big Ben Clock Tower</td><!--Correct-->
		</tr>
		<tr>
			<td>C. Royal Albert Hall</td> 
			<td>D. Eiffel Tower</td>
		</tr>
	</table>
	<form action="winner.php" method="post">
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