<?php session_start();
 
 function score_generale($id_user)
{
  include ('../UsefulData/DataBase.php');
  
  $reponse = $bdd->query('SELECT SUM(your_score) as score FROM `score` WHERE id_joueur = "'.$id_user.'" ');
  $val = $reponse->fetch();
  return $val['score'];
	  
}
 

?>
<?php 
if (isset($_GET['deconnexion'])) {
     $_SESSION = array();
      session_destroy();
      header("Location: ../index.php");
}
     

      
    ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Menus/menu_jouer.css">
    <script type="text/javascript" src="../UsefulData/carte.js"></script>
  </head>
  <body>
    <div class="container-fluid ContainGeneral">

      <div  class="container p-3 my-3  text-white text-center row divHaut">
        <div class="col monimage ">
          <a href="../index.php" class="btn ">
            <img src="../Images/Planete_terre.png"  style="width:60px"  >
          </a>
          <a href="../UsefulData/StamenTileLayer.php" class="btn ">
            retour
          </a>
        </div> 
        <div class="col-sm-"></div>
         <!-- Dropdown1 -->

        <div class=" col maDivtheme">
              
          <p class="nav-link dropdown message_score" href="#" id="navbardrop" data-toggle="dropdown" style="color:black;">
             Bonjour <?php if (isset($_SESSION['pseudo'])) {
               echo $_SESSION['pseudo']." votre score est: ".score_generale($_SESSION['id']." pts ");?></p>
              <a href="../Menus/menu_jouer.php?deconnexion"  class="btn btn-warning">Deconnexion</a>          
        
          <?php   }else {
               echo " Nouveau utilisateur";
             } ?>  

             
          <!-- </p> -->
          </div> 
      </div>
        
        <div class="container   text-white row divMenu">
          <nav class="navbar navbar-expand-sm   NavMenu">

            <!-- Links -->
            <ul class="navbar-nav">
             <!-- Dropdown1 -->
              <div class=" maDivGrande">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">
                    A propos
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" onclick="functionContact()">Présentation</a>
                    <a class="dropdown-item" onclick="demomofunction()">Qui sommes-nous?</a>
                  </div>
                </li>
                
              </div>
              
              
              
               <!-- Dropdown1 -->
              <div class=" maDivGrande">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">
                    <p>Le coin malin &#128512;</p>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.cdiscount.com/telephonie/r-carte+du+monde+avec+pays.html#_his_">achter une carte</a>
                    <a class="dropdown-item" href="http://www.unecartedumonde.fr/">une carte aléatoire</a>
                    <a class="dropdown-item" href="https://www.cadeau-maestro.com/1552-carte-monde">Idées cadeaux</a>
                  </div>
                </li>
              </div>
                <!-- Dropdown1 -->
                <div >
                    <li >
                      <a  class="btn btn-light btnContact" href="../index.php#contact" >Contactez-nous </a>
                      </li>
                </div>
                <div class=" maDivGrande pull-righ">
                    <li class="nav-item dropdown">
                      <a  class="btn btn-light btnContact" href="../index.php#commente" >laissez-nous un commentaire </a>
                   </li>
                </div>
            </ul>
          </nav>
          <br>
          <div id="demo" style="display:none">
            <div class="row contact">
              Quizz : Les pays du Monde vous avez suivi des cours de géographie??? avez vous fait le tour du monde?? Nous sommes fier de vous présenter ce jeu qui vous permet à partir des questions aleatoires avec un drapeau, de localiser un pays donné sur la carte du monde sans indication majeure et c'est à vous à travers des clicks sur la carte de tenter de retrouver la localisation la plus proche des coordonnées du pays. Vous vous sentez prêt à faire voyager votre souris et de tester vos connaisances? ALLER LET'S GO!
           </div>
        </div>
          <div class="row contact" id="demomo" style="display:none">
            Nous somme un groupe d'étudiants en 3eme année de licence informatique pour plus d'info cliquez sur Contactez-nous &#128070;
          
        </div>
      </div>
  </body>
</html>