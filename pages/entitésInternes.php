<?php include "deleteInterne.php";?>
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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <title>Gestion du courrier</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
           
            <div class="menu-bar">
                <ul>
                    <li class="active"><a href="menuPrincipal.php"> Référentiel</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="entitésInternes.php">Entités Internes</a></li>
                                <li><a href="entitéDeDestination.php">Entités Destinatrices</a></li>
                                <li><a href="Utilisateurs.php">Utilisateurs</a></li>
                                <li><a href="typesDuCourrier.php">Types du courrier</a></li>
                                <li><a href="supporstDuCourrier.php">Supports du courrier</a></li>
                                <li><a href="instructions.php">Instructions</a></li>
                            </ul>
                        </div>
                    </li>

                    <div id="user1">

                    <li><a href="#"><i class="fa fa-user-o" style="font-size: 2em" aria-hidden="true"></i>
                    </a>
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
    <br><br><br>
    
    <div style="text-align:center">
        <div class="container">
            <?php
             if(isset($_POST['submitDelete'])){
                 $key = $_POST['checkbox[]'];
                 $check = mysqli_query("SELECT * from entitesinternes where reference = '$key'") or die("not found".mysqli_error());
                 if(mysqli_num_rows($check)>0){

                    $queryDelete = mysqli_query("DELETE from entitesinternes WHERE reference='$key' ")
                    or die("not deleted".mysqli_error());
                    
                    ?>

                    <div class="alert alert-success">
                         <p>Record deleted!</p>
                     </div>

                 <?php  }

                 
                 else{
                     // ?>
                     <div class="alert alert-warning">
                         <p>Record does not exist!</p>
                     </div>

                 <?php }
                 }
                 ?>
            <div class="card">
                <h4 class="card-header"><b>Entités internes</b></h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                <th>Référence</th>
                                <th>Désignation</th>
                                <th>symbole</th>
                                <th>Responsable</th>
                                <th>Entité appartenance</th>
                                <th>Grade</th>
                                <th>Selectionner</th>
                                <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn = mysqli_connect("localhost:3308", "root", "", "courrier");
                                    // Check connection
                                    if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT reference, designation, symbole, responsable, entiteApp, grade FROM entitesinternes";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {?>
                                    <form action="deleteInterne.php" methode="POST">
                                        <?php
                                        echo "<tr><td>" . $row["reference"]. "</td><td>" . $row["designation"] . "</td><td>" . $row["symbole"] . "</td><td>" . $row["responsable"] . "</td><td>" . $row["entiteApp"] . "</td><td>"
                                        . $row["grade"]."</td><td><input type ='checkbox' name='checkbox[]' value='".$row["reference"]."</td><td><input type ='checkbox' name='checkbox[]' value='".$row["reference"]."' required></td><td><input type ='submit' name='submitDelete' value='supprimer' class='btn btn-danger'></td></tr>";?>
                                    </form>
                                    <?php
                                    }
                                    echo "</table>";
                                    } else { echo "0 results"; }
                                    $conn->close();

                                ?>
                                
                            </tbody>
                                
                            

                            <a href="entitésInternes.html"  data-toggle="modal" data-target="#myModal">Ajouter une entité interne</a>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                    
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Ajouter une entité interne</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    
                                  </div>
                                  <div class="modal-body">
                                        <form action="interne.php" method="POST">
                                            <div class="form-group row">
                                                <div class="form-group col-md-6">
                                                    <label class="sr-only" for="reference">Référence</label>
                                                    <input type="text" class="form-control form-control-sm mr-1" name="reference" id="reference" placeholder="Référence" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="sr-only" for="designation">Désignation</label>
                                                    <input type="text" class="form-control form-control-sm mr-1" name="designation" id="designation" placeholder="Désignation" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="sr-only" for="symbole">Symbole</label>
                                                    <input type="text" class="form-control form-control-sm mr-1" name="symbole" id="symbole" placeholder="Symbole" required>
                                                </div>
                
                                                <div class="form-group col-md-6">
                                                    <label class="sr-only" for="responsable">Responsable</label>
                                                    <input type="text" class="form-control form-control-sm mr-1" name="responsable" id="responsable" placeholder="Responsable" required>
                                                </div>
                
                                                <div class="form-group col-md-6">
                                                    <label class="sr-only" for="entiteApp">Entité appartenance</label>
                                                    <input type="text" class="form-control form-control-sm mr-1" name="entiteApp" id="entiteApp" placeholder="Entité appartenance" required>
                                                </div>
                
                                                <div class="form-group col-md-6">
                                                    <label class="sr-only" for="grade">Grade</label>
                                                    <input type="number" class="form-control form-control-sm mr-1" name="grade" id="grade" placeholder="Grade" required>
                                                </div>
                                            
                                            </div>
                                            <div class="form-row">
                                                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Annuler</button>
                                                <button name="ajouter" type="submit" class="btn btn-primary btn-sm ml-1">Ajouter</button>        
                                            </div>
                                        </form>

                                  </div>
                                 
                                </div>
                            
                              </div>
                            </div>
                        <br><br>

                        </table>
                    </div>
                </div>
            </div>
        </div>        
    
    </div>
    
          

    
  

 
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
</html>