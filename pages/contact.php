<?php

session_start();



$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$codepostal = $_POST['codepostal'];
$telnum = $_POST['telnum'];
$civi = $_POST['civi'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];


if(isset($_POST['mailform']))
	{

	if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['codepostal']) AND isset($_POST['telnum']) AND isset($_POST['civi']) AND isset($_POST['email']) AND isset($_POST['feedback']))
	{
		$reg= "INSERT INTO contact(nom , prenom , codepostal , telnum , civi , email , feedback ) values ('$nom' , '$prenom', '$codepostal', '$telnum', '$civi' , '$email' , '$feedback')";
		mysqli_query($con, $reg);
		
		header('location:messageEnvoyé.html');
		
	}else{
		echo" message non envoyé";

	}

	
}

?>
