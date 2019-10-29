<?php	
$serveur = 'localhost:3308';
$base = 'courrier';
$user = 'root';
$pass = '';

	
		
	    $con = mysqli_connect($serveur, $user, $pass, $base) or die(mysqli_error($con));
	
		//die('Erreur : impossible de se connecter à la base de donnée');

?>