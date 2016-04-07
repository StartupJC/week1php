<?php
		session_start();
	  	if(! isset($_SESSION['error_text'])){
  			$_SESSION['error_text'] = "";
}
?>
<html>
    <head>
  <title>Form Test Show</title>
  <link rel="stylesheet" type="text/css" href="surveyForm.css">
    </head>
    <body>
    	<div id = 'Text_Dimensions'>
	  	   	<form action = 'regprocess.php' method = 'POST'>
	  	   		<p><?php echo $_SESSION['error_text']; session_destroy();
?></p>
	  	   	<fieldset>
	  	   		<legend>Submit Info</legend>

		  		<h4>Email:</h4>
		  		<input type = 'email' name = 'email'>
		    	<h4>First Name:</h4>
		    	<input type = 'text' name = 'first_name'>
				<h4>Last Name:</h4>
		    	<input type = 'text' name = 'last_name'>
				<h4>Password:</h4>
				<input type = 'password' name = 'password'>
				<h4>Confirm Password:</h4>
				<input type = 'password' name = 'confirm_password'>
				<h4>Birth Date:</h4>
				<input type = 'text' name = 'birth_date' value='MM/DD/YYYY'>
				<input id = 'Submit' type = 'submit' value = 'submit'>
		</div>

			</fieldset>
			</form>
			
    </body>
</html>
