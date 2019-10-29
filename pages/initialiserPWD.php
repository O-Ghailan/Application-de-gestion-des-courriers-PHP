<!DOCTYPE html>
<html lang="en">

<head>
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

     <title>Gestion du courrier</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Apropos.html"><span class="fa fa-info fa-lg"></span> À propos</a></li>                    
                    <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
                <span class="navbar-text">
                    <a id="loginButton">
                    <span class="fa fa-sign-in"></span> Se connecter en tant qu'administrateur </a>
                </span>
            </div>           
        </div>
    </nav>

    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Se connecter en tant qu'administrateur </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="REFERENCE">Référence</label>
                                <input type="number" class="form-control form-control-sm mr-1" name="REFERENCE" id="REFERENCE" placeholder="Référence" required>
                            </div>
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="NOM">Nom</label>
                                    <input type="text" class="form-control form-control-sm mr-1" name="NOM" id="NOM" placeholder="Nom" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="MDP">Mot de passe</label>
                                <input type="password" class="form-control form-control-sm mr-1" name="MDP" id="MDP" placeholder="Mot de passe" required>
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Se souvenir de moi </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Se connecter</button>        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div style="text-align:center">
        <br><br><br>
        <img src="logo.jpg" alt="Avatar" style="width:10%" class="center">
        <div class="container">
            <h4><b>Royaume du Maroc</b></h4>
            <p>Ministère de l'Energie des Mines, de l'Eau et de l'environnement</p>

            <br><br>
            

            <div class="card">
                <h5 class="card-header"><b>Initialiser votre mot de passe</b></h5>
                <div class="card-body">
                    <form>
                        <div class="input-group col-md-10 col-md-offset-1">
                            <label>Veuillez saisir votre Email de récuperation:</label> &nbsp; &nbsp; &nbsp;
                            <input type="email" name="Email" class="form-control" placeholder="Email" autofocus required="required" >
                        </div>
                    <br>

                    <button type="submit" class="btn btn-success">Initialiser le mot de passe</button>
                
                    </form>
                </div>
            </div>
                    
        </div>
                               
    </div>
        
    <br><br><br>
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 col-sm-2 offset-1">
                    <h5>Liens</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Accueil</a></li>
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
