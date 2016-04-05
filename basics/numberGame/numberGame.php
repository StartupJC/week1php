<?php session_start();
$_SESSION['answer'] = rand(1,10);
?>
<html>
<head>
	<title>Number Game</title>
	<link rel="stylesheet" type="text/css" href="numberGame.css">
</head>
<body>
	<h1>Welcome to the Great Number Game</h1>
	<p>I am thinking of a number between 1 and 100.<br> take a guess!!</p>
	
	<form action= "numberProcess.php" method="POST">
	
	<input type= "text" name="guess">
	<input type= "submit">
	
	</form>
</body>
</html>