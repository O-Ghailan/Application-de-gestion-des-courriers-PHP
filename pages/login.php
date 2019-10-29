<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');

$reference = $_POST['REFERENCE'];
$nom = $_POST['NOM'];
$mdp = $_POST['MDP'];

$s = " select * from utilisateur where REFERENCE = '$reference' && NOM = '$nom' && MDP = '$mdp'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:menuPrincipal.php');
    

}else{
    header('location:login.html');
}



?>