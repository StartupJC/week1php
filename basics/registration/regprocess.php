<?php
session_start();

$_SESSION['error_text'] = "";

function checkName($name){
    if (empty($name)) {
        return "name was left blank.<br>";}
    elseif (!preg_match("/^[a-zA-Z]+$/", $name)){
        return "name can only have letters a-z.<br>";
    }
    return "";
} 

function checkPassword($password) {
    if (empty($password)) {
        return "password was left blank.<br>";}
    elseif(strlen($password) < 6) {
        return "At least 6 characters required.<br>";}
    //You were making use of the local password up to that point
    //So i just changed $_POST['password'] to the local $password
    elseif($_POST['confirm_password']!= $password){
        return "Password fields do not match.<br>";}
    else{
        return "";
    }
}
 

function checkBirthDate($date) {
    $date_regex = '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/';
    if(preg_match($date_regex, $date)) {
      return "";
    }
    //This won't run if "if" statement runs, therefore no need for else :)
    return "Please input date in MM/DD/YYYY<br>";
}
    
    //Lazy Programmer work arounds incoming!!!!

    $_SESSION['error_text'] .= checkName($_POST['first_name']);
    $_SESSION['error_text'] .= checkName($_POST['last_name']);
    $_SESSION['error_text'] .= checkPassword($_POST['password']);
    $_SESSION['error_text'] .= checkBirthDate($_POST['birth_date']);

    if ($_SESSION['error_text'] == ""){
        header('Location: success.php');}
    else{
        header('Location: registration.php');
    }

 ?>         