<?php session_start();
  $_SESSION['Farm'] = rand(10,20);
  $_SESSION['Parents'] = rand(5,9);
  $_SESSION['Coding'] = rand(40,50);
  $_SESSION['Casino'] = rand(-500,500);
  
if(! isset($_SESSION['goldearned'])){
  $_SESSION['goldearned'] = 0;
}
?>
<html>
<head>
	<title>Make Money!!</title>
	<link rel="stylesheet" type="text/css" href="ninjagold.css">
</head>
<body>

<h3>Your Gold</h3>
<p><?= $_SESSION['goldearned']?></p>

<form action='goldprocess.php' method='POST'>
<input type='submit' value="Clear Saved Data">
<input type="hidden" name="action" value="Clear">
</form>

<div class= "playBox">
<h2>Farm</h2>
<h2>Earns 10-20 Gold</h2>
<form action='goldprocess.php' method='POST'>
	<input type="submit" value="Find Gold!">
	<input type="hidden" name="action" value="Farm">
</form>
</div>

<div class= "playBox">
<h2>Parents</h2>
<h2>Earns 5-9 Gold</h2>
<form action='goldprocess.php' method='POST'>
	<input type="submit" value="Find Gold!">
	<input type="hidden" name="action" value="Parents">
</form>

</div>

<div class= "playBox">
<h2>Coding</h2>
<h2>Earns 40-50 Gold</h2>
<form action='goldprocess.php' method='POST'>
	<input type="submit" value="Find Gold!">
	<input type="hidden" name="action" value="Coding">
</form>
</div>

<div class= "playBox">
<h2>Casino</h2>
<h2>Earns 500 to -500 Gold</h2>
<form action='goldprocess.php' method='POST'>
	<input type="submit" value="Find Gold!">
	<input type="hidden" name="action" value="Casino">
</form>
</div>
<div style="height:200px;width:770px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<?php if(! isset($_SESSION['Text'])){
  $_SESSION['Text'] = "";
}

echo $_SESSION['Text']?>
</div>

</body>
</html>