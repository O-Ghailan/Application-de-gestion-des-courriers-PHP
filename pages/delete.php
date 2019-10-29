<?php 

session_start();

$conn = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($conn, 'courrier');

if(!$conn){
    die ("connection failed:" .mysqli_connect_error());
}

if(isset($_POST['supprimer'])){
    $chkarr = $_POST['checkbox'];
    foreach($chkarr as $reference){
        
        mysqli_query($conn, "DELETE from entitesdestination Where reference=".$reference);

    }
    header('location:entitéDeDestination.php');


}
mysqli_close($conn);
?>