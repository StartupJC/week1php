<html>
    <head>
  <title>Form Test Show</title>
  <link rel="stylesheet" type="text/css" href="surveyForm.css">
    </head>
    <body>
    	<fieldset>
    	<div id = 'Text_Dimensions'>
    		<h3> Submitted Information</h3>
    		<p>Your name is: <?php echo $_POST['first_name']; ?></p>
			<p>Dojo location: <?php echo $_POST['locations']; ?></p>
			<p>Favorite language: <?php echo $_POST['languages']; ?></p>
			<p>Comment: <?php echo $_POST['comments']; ?></p>
			
			<form action="surveyForm.php" method = "GET">
			<button id= "go_back" value= "Go Back" >Go Back</button>
			</form>
		</div>
			</fieldset>
    </body>
</html>