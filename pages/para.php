<?php

session_start();




$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');

$reference = '';
$nom = '';
$mdp = '';
$role = '';
$email = '';






if(isset($_POST['effectuer'])){
    $reference = $_POST['REFERENCE'];
    $nom = $_POST['NOM'];
    $mdp = $_POST['MDP'];
    $role = $_POST['ROLE'];
    $email = $_POST['EMAIL'];

    $con->query("UPDATE utilisateur SET NOM='$nom' , MDP='$mdp' , ROLE='$role' , EMAIL='$email' WHERE REFERENCE=$reference ") or die($con->error());
    
    $_SESSION['message'] = "Modification effectuée avec succès!";
    $_SESSION['msg_type'] = "warning";
    header('location: parametre.php');
}    
?>