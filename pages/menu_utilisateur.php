<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
    *{
        margin:0px;
        padding:0px;
    }
    #menu-bar ul{
        list-style:none;
    }
    #menu-bar ul li{
        background-color: rgba(194, 221, 247, 0.8);
        width: 150px;
        border: 1px solid white;
        height:50px;
        line-height:50px;
        text-align:center;
        float:left;
        color:white;
        font-size:18px;
        position:relative;
    }
    #menu-bar ul li:hover{
        background-color: rgba(194, 221, 247, 0.8);
    }
    #menu-bar ul ul{
        display:none;
    }
    #menu-bar ul li:hover > ul{
        display:block;}
    #menu-bar ul ul ul{
        margin-left:150px;
        top:0px;
        position:absolute;}
    }





</style>

     <!-- Required meta tags always come first -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link href="../css/styles.css" rel="stylesheet">
     <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
     <link rel="icon" type="image/jpg" href="logo.jpg" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <title>Gestion du courrier</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            
            <div id="menu-bar">
                <ul>
                    <li class="active"><a href="menu_utilisatuer.php"> Instructions</a>
                          
                            <ul>
                                <li><a href="instances.php">Instances</a></li>
                                <li><a href="retards.php">Retards</a></li>
                                <li><a href="consultation.php">Consultation</a></li>
                                
                            </ul>
                       
                        
                    </li>
                    <li class="active"><a href="menu_utilisatuer.php"> Editions</a>
                        
                            <ul>
                                <li><a href="arrivées.php">Arrivées</a>
                                    
                                        <ul>
                                            <li><a href="recherche.php">Recherche</a></li>
                                            <li><a href="Cheminement.php">Cheminement</a></li>
                                            <li><a href="RegistreArrivées.php">Registre Arrivées</a></li>
                                            <li><a href="Historique1.php">Historique </a></li>
                                            <li><a href="Traitements.php">Traitements</a></li>
                                            <li><a href="RegistreArrivées.php">Tableau de bord</a></li>
                                            <li><a href="CourriersTraités.php">Courriers traités</a></li>
                                    

                                        </ul>
                                    
                                </li>
                                <li><a href="départs.php">Départs</a>
                                    
                                        <ul>
                                            <li><a href="recherche.php">Recherche</a></li>
                                        
                                            <li><a href="RegistreDéparts.php">Registre Départs</a></li>
                                            <li><a href="Historique2.php">Historique</a></li>

                                    
                                        </ul>
                                    
                                </li>
                                
                            </ul>
                        
                    </li>
                

                    <div id="user1">

                        <li><a href="#"><i class="fa fa-user-o" style="font-size: 18px" aria-hidden="true">Utilisateur</i></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="logout.php">Se déconnecter</a></li>
                                    <li><a href="parametre.php">Paramètres du compte</a></li>
                                </ul>

                            </div>
                        

                        
                        </li>
                    </div>
                </ul>
            </div>
        </div>    
    </nav>  
    
    <div style="text-align:center">
        <br><br><br>
        <img src="logo.jpg" alt="Avatar" style="width:10%" class="center">
        <div class="container">
            <h4><b>Royaume du Maroc</b></h4>
            <p>Ministère de l'Energie des Mines, de l'Eau et de l'environnement</p>
        </div>
    </div>
  

 
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 col-sm-2 offset-1">
                    <h5>Liens</h5>
                    <ul class="list-unstyled">
                        <li><a href="login.html">Accueil</a></li>
                        <li><a href="./Apropos.html">À propos</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Notre adresse</h5>
                    <address>
                    Rue Hassan Benchekroun<br>
                    RABAT<br>
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>: 
                        <a href="mailto:water@gmail.com">water@gmail.com</a>
                </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                            <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                            <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>        
                </div>
            </div>
            <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2019</p>
                </div>
            </div>
        </div>
    </footer>
        
    

    <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>