<?php
session_start();
    if(! isset($_SESSION['error_text'])){
        $_SESSION['error_text'] = "";
}

function checkName($name){
    if (empty($name)) {
        return "name was left blank.";}
    elseif (!preg_match("/^[a-zA-Z]+$/", $name)){
        return "name can only have letters a-z.";
    }
    return true;
} 

function checkPassword($password) {
    if (empty($password)) {
        return "password was left blank.";}
    if (strlen($password) < 6) {
        return "At least 6 characters required.";}
    elseif($_POST['confirm_password']!= $_POST['password']){
        return "Password fields do not match.";}
    else{
        return true;
    }
}
 

function checkBirthDate($date) {
    $date_regex = '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/';
    if(preg_match($date_regex, $date)) {
      return true;} 
    else{
      return "Please input date in MM/DD/YYYY";
    }
}
    
    $validInput = checkName($_POST['first_name']);
    if ($validInput !== true) {
         $_SESSION['error_text'] = "An error occured: first " . $validInput;
    }
    $validInput = checkName($_POST['last_name']);
    if ($validInput !== true) {
         $_SESSION['error_text'] = "An error occured: last" . $validInput;
    }
    $validInput = checkPassword($_POST['password']);
    if ($validInput !== true) {
        $_SESSION['error_text'] = "An error occured: " . $validInput;
    }
    $validInput = checkBirthDate($_POST['birth_date']);
    if ($validInput !== true) {
        $_SESSION['error_text'] = "An error occured: " . $validInput;
    }
    if ($_SESSION['error_text'] == ""){
        header('Location: success.php');}
    else{
        header('Location: registration.php');
    }

 ?>         