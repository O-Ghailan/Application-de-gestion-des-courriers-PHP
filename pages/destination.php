<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');


$entite = $_POST['entite'];
$entiteDes = $_POST['entiteDes'];
$reference = $_POST['reference'];


if(isset($_POST['ajouter']))
	{

	if(isset($_POST['entite']) AND isset($_POST['entiteDes']) AND isset($_POST['reference']))
	{
		$reg= "INSERT INTO entitesdestination(entite , entiteDes, reference) values ('$entite' , '$entiteDes' , '$reference')";
        mysqli_query($con, $reg);
        
       

		header('location:entitéDeDestination.php');
		
	}else{
		echo" entité non ajoutée!";

	}

	
}

?>