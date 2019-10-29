<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');


$reference = $_POST['reference'];
$designation = $_POST['designation'];
$symbole = $_POST['symbole'];
$responsable = $_POST['responsable'];
$entiteApp = $_POST['entiteApp'];
$grade = $_POST['grade'];

if(isset($_POST['ajouter']))
	{

	if(isset($_POST['reference']) AND isset($_POST['designation']) AND isset($_POST['symbole']) AND isset($_POST['responsable']) AND isset($_POST['entiteApp']) AND isset($_POST['grade']))
	{
		$reg= "INSERT INTO entitesinternes(reference , designation , symbole , responsable , entiteApp , grade) values ('$reference' , '$designation' , '$symbole' , '$responsable' , '$entiteApp' , '$grade')";
        mysqli_query($con, $reg);
        
       

		header('location:entitésInternes.php');
		
	}else{
		echo" entité non ajoutée!";

	}

	
}

?>