<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');



$instruction= $_POST['instruction'];


if(isset($_POST['ajouter']))
	{echo" Instruction ajoutée";

	if(isset($_POST['instruction']))
	{
		$reg= "INSERT INTO instruction(instruction) values ('$instruction')";
        mysqli_query($con, $reg);
        
       
        echo" Instruction ajoutée";
		header('location:instructions.php');
		
	}else{
		echo" Instruction non ajoutée!";

	}

	
}

?>