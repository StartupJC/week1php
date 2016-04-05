
<html>
    <head>
  <title>Form Test Show</title>
  <link rel="stylesheet" type="text/css" href="surveyForm.css">
    </head>
    <body>
    	<div id = 'Text_Dimensions'>
	  	   	<form action = 'process.php' method = 'POST'>
	  	   		<fieldset>
	  	   			<legend>Submit Info</legend>
	  		<h4>your name:</h4>
	  		<input type = 'text' name = 'first_name'>
	    	<h4>Dojo Location:</h4>
	    	<select name="locations">
				<option value="Seattle">Seattle</option>
				<option value="Dallas">Dallas</option>
				<option value="San Fran">San Fran</option>
			</select>
			<h4>Favorite Language:</h4>
	    	<select name="languages">
				<option value="Python">Python</option>
				<option value="PHP">PHP</option>
				<option value="Ruby">Ruby</option>
			</select>
			<h4>comment (optional):</h4>
			<input id = 'Comment_Box' type = 'text' name = 'comments'>
			<input id = 'Submit' type = 'submit' value = 'submit'>
		</div>

			</fieldset>
			</form>

			
    </body>
</html>
