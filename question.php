<!DOCTYPE html>
<?php
    session_start();
	$score = 0;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 0;
?>
<html>
<head>
	<title>Question</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$500 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 >Which Disney character famously leaves a glass slipper behind at a royal ball?</td>
		</tr>
		<tr>
			<td>A. Pocahontas</td> <!--Correct-->
			<td>B. Sleeping Beauty</td>
		</tr>
		<tr>
			<td>C. Cinderella</td>
			<td>D. Elsa</td>
		</tr>
	</table>
	<form action="question1.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
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