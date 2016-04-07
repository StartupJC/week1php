<?php session_start();

	if($_POST["guess"] < $_SESSION['answer']){
		$_SESSION['display'] ="<div id= 'tooLow'><h1>Too Low!!</h1></div>";
	}
	elseif ($_POST["guess"] > $_SESSION['answer']) {
	$_SESSION['display'] =
	"<div id= 'tooHigh'>
		<h1>Too High!!</h1>
	</div>";
	}
	else{
	$_SESSION['display'] =
	"<div id= 'correct'>
		<h1>CORRECT!!</h1>
		<h2>{$_SESSION['answer']} was the number</h2>
	</div>
	<form action='numberGame.php' method='GET'>
	<input type='submit' value='Play Again'>
	</form>" ;
	
}
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
	<?= $_SESSION['display'] ?>

</body>

</html>



<!-- header("Location: http://localhost:8888/numberGame/numberGame.php");
die(); -->