<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');



$reference = $_POST['reference'];
$designation = $_POST['designation'];

if(isset($_POST['ajouter']))
	{

	if(isset($_POST['reference']) AND isset($_POST['designation']))
	{
		$reg= "INSERT INTO typeCourrier(reference , designation) values ('$reference' , '$designation')";
        mysqli_query($con, $reg);
        
       

		header('location:typesDuCourrier.php');
		
	}else{
		echo" type non ajoutée!";

	}

	
}

?>