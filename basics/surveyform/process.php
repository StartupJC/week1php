<html>
    <head>
  <title>Form Test Show</title>
  <link rel="stylesheet" type="text/css" href="surveyForm.css">
    </head>
    <body>
    	<fieldset>
    	<div id = 'Text_Dimensions'>
    		<h3> Submitted Information</h3>
<?php
function checkUsername($username) {
    if (empty($first_name)) {
        return "first_name was left blank.";
    // }elseif (strlen($first_name) < 4) {
    //     return "first_name was too short";
    // }elseif (strlen($first_name) > 26) {
    //     return "first_name was too long";
    }elseif (!preg_match('~^[a-z]{2}~i', $first_name)) {
        return "first_name must start with two letters";
    }elseif (preg_match("/^[a-zA-Z]+$/", $str) == 1) ) {
        return "first_name contains invalid characters.";
    // }elseif (substr_count($first_name, ".") > 1) {
    //     return "first_name may only contain one or less periods.";
    // }elseif (substr_count($first_name, "_") > 1) {
    //     return "first_name may only contain one or less underscores.";
    }
    return true;
} 

$validInput = checkInput($username);

if ($validusername !== true) {
     echo "An error occured: " . $validUsername;
}
 ?>   
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