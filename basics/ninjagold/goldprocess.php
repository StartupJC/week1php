<?php session_start();

if(isset($_POST['action']) && $_POST['action'] == "Farm"){
	$_SESSION['goldearned']= $_SESSION['goldearned']+$_SESSION['Farm'];
	$_SESSION['Text']= $_SESSION['Text']."<p><font color='blue'>You earned ".$_SESSION['Farm']." gold (".date('F jS Y h:i:s A').")</font><p>";
	header('Location: ninjagold.php');
	} 

elseif(isset($_POST['action']) && $_POST['action'] == "Parents"){
	$_SESSION['goldearned']= $_SESSION['goldearned']+$_SESSION['Parents'];
	$_SESSION['Text']= $_SESSION['Text']."<p><font color='blue'>You earned ".$_SESSION['Parents']." gold (".date('F jS Y h:i:s A').")</font><p>";
	header('Location: ninjagold.php');
	} 

elseif(isset($_POST['action']) && $_POST['action'] == "Coding"){
	$_SESSION['goldearned']= $_SESSION['goldearned']+$_SESSION['Coding'];
	$_SESSION['Text']= $_SESSION['Text']."<p><font color='blue'>You earned ".$_SESSION['Coding']." gold (".date('F jS Y h:i:s A').")</font><p>";
	header('Location: ninjagold.php'); 
}

elseif(isset($_POST['action']) && $_POST['action'] == "Casino"){
	$_SESSION['goldearned']= $_SESSION['goldearned']+$_SESSION['Casino'];
	if ($_SESSION['Casino']>=0){
	$_SESSION['Text']= $_SESSION['Text']."<p><font color='blue'>You earned ".$_SESSION['Casino']." gold (".date('F jS Y h:i:s A').")</font><p>";
	}
	else{
	$_SESSION['Text']= $_SESSION['Text']."<p><font color='red'>You lost ".$_SESSION['Casino']." gold (".date('F jS Y h:i:s A').")</font><p>";
	}
	
	header('Location: ninjagold.php'); 	
}
elseif(isset($_POST['action']) && $_POST['action'] == "Clear"){
	$_SESSION['goldearned'] = 0;
	$_SESSION['Text'] ="";

	header('Location: ninjagold.php'); 
}
?>