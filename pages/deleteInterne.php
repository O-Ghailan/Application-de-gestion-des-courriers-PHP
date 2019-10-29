<?php

session_start();


$con = mysqli_connect('localhost:3308', 'root', '');
mysqli_select_db($con, 'courrier');


?>