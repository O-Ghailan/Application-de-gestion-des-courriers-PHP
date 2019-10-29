<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$reference = $_POST['reference'];
$entite = $_POST['entite'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];


if(isset($_POST['ajouter']))
	{

	if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['reference']) AND isset($_POST['entite']) AND isset($_POST['email']) AND isset($_POST['mdp']))
	{
		$reg= "INSERT INTO utilisateur_nv(nom , prenom , reference , entite , email , mdp) values ('$nom' , '$prenom' , '$reference' , '$entite' , '$email' , '$mdp')";
        mysqli_query($con, $reg);
        
       

		header('location:ConfirmationCompte.php');
		
	}else{
		echo" utilisateur non ajouté!";

	}

	
}

?>
