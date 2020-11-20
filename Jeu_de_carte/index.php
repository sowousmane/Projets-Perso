<?php 
session_start();
  include('UsefulData/DataBase.php');
 if(isset($_POST['formconnect']))
  {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mailconnect))
    {
      $requser = $bdd->prepare("select * from Utilisateurs where mail = ? and mot_de_passe = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if( $userexist == 1)
      {

        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['mail'] = $userinfo['mail'];
        header("Location: UsefulData/StamenTileLayer.php?id=".$_SESSION['id']);
      }
      else
      {
        $errorconnection="Mauvais identifiants";
      
      }
    }
    else
    {
      $errorconnection="Remplissez tous les champs";
    }
  }
  /*======================================================================================== */
  /*===========================INSCRIPTION================================================ */
  /*======================================================================================== */
 /** verification du bouton inscription */
 if(isset($_POST['forminscription']))
 { 
    /* empechons qu'il ne reconnaisse du code dans nos champs*/
   /**  pour le sexe*/
   $genre = filter_input(INPUT_POST, 'genre');

   if ($genre==='H')
   {
      $genre="H"; 
   }
   else 
   { 
      $genre="F";
   } 

   $nom= htmlspecialchars($_POST['nom']);
   $prenom= htmlspecialchars($_POST['prenom']); 
   $pseudo= htmlspecialchars($_POST['pseudo']);
   $mail= htmlspecialchars($_POST['mail']);
   $mdp= sha1($_POST['mdp']);
   $mdp2= sha1($_POST['mdp2']);
   /**vérification si tous les champs sont remplis */
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])AND !empty($_POST['mdp2'])AND !empty($_POST['nom'])AND !empty($_POST['prenom']))
   {   
       
     /** pour voir la taille de pseudo */
     $pseudolength=strlen($pseudo);
     if($pseudolength <= 100 )
     {
       /**Vérifions si le mail est correct */
       if(filter_var($mail, FILTER_VALIDATE_EMAIL) and preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']) )
       { /**une requete preparée pour reccuperer tous mails de la base */
         $reqmail=$bdd->prepare("SELECT * FROM Utilisateurs where mail = ?");
         $reqmail->execute(array($mail));
         $mailexist = $reqmail->rowCount();

         /**une requete preparée pour reccuperer tous pseudo de la base */
         $reqpseudo=$bdd->prepare("SELECT * FROM Utilisateurs where pseudo = ?");
         $reqpseudo->execute(array($pseudo));
         $pseudoexist = $reqpseudo->rowCount();

       
         /**Vérifions si le pseudo existe si oui on lui dit que ce pseudo existe déjà sinon on le crée */
         if($pseudoexist == 0)
         {
            /**Vérifions si le mail existe si oui on lui dit que ce mail existe déjà sinon on le crée */ 
           if($mailexist == 0)
           {
              /**Vérifions si les deux mots de passes sont pareils si oui  on le crée sinon on lui dit que les mots de passes ne sont pas pareils */
        
             if($mdp == $mdp2)
             {
               $insertuser=$bdd->prepare("INSERT INTO Utilisateurs(civilite, nom, prenom, pseudo, mail, mot_de_passe) VALUES(?, ?, ?, ?, ?, ?)");
               $insertuser->execute(array($genre, $nom, $prenom, $pseudo, $mail, $mdp));
               $message="votre compte a été bien crée vous pouvez vous connectez";
               header("Location: index.php?#connexion");
             }
             else
             {
               $errorinscription="vos mots de passes ne sont pas pareils";
             }
           }
           else
           {
             $errorinscription="Cet adresse mail existe déjà";
           }
         }
         else
         {
           $errorinscription="Ce pseudo existe déjà";
         }
       }
       else
       {
         $errorinscription="votre email n'est pas valide";
       }
     }
     else
     {
       $errorinscription="votre pseudo ne doit pas depasser 100 caractères!";
     }
   }
   else
   {   /** une variable qui nous dit qu'on doit remplir tous les champs */
     $errorinscription="Tous les champs doivent être remplis";
   }
 }
?>  
<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="UsefulData/carte.css">
    <style>
        #scroll_to_top { 
          position: fixed; 
          width: 50px; 
          height: 25px; 
          bottom: 50px; 
          right: 30px; 
        } 
        #scroll_to_top img { 
          width: 50px; 
        }
    </style>
  </head>
  <body>
    <?php include("Menus/menu.php"); ?>
    <div class=" container-fluid presentation" style="text-align:center; background-color:rgb(234, 255, 255); margin:auto ;">
      <h1>Find the countrie  </h1>
        <p>Ce jeu consiste à deviner un pays par son drapeau et trouver son emplacement sur la carte. <br>
          Ou on vous donne une carte colorié et vous trouver le pays du drapeau en question.
        </p>
    </div>
    <div class="row  " style="margin-bottom:100px;" >
      <div class="col-sm-6"><?php include('UsefulData/caroussel.php');?>  </div>
      <div class="col-sm-6"><?php include('UsefulData/caroussel1.php');?></div>
    </div>
    <!-- ################################# CONNECTION ##########################################-->
    
        <h2  id="connexion" class="f5 f1" style="text-align:center ; margin-bottom: 0px;"> Connexion</h2><br>
          <!-- Nous allons creer un formulaire pour notre connexion-->
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 container1" >
            <form method="POST" action="">
                <table >
                  <tr>
                    <td>
                      <tr>
                        <td>
                          Entrez vos identifiants pour vous connectez si vous avez un compte.
                        </td>
                      </tr>
                        <tr>
                        <td> <input type="text"  size="60" name="mailconnect" placeholder="Mail"></td>
                        </tr>
                        <tr>
                          <td> <input type="password" name="mdpconnect" size="60" placeholder="Mot de passe"></td>
                        </tr>
                        <tr>
                          <td> <input class="form-check-input" type="checkbox" name="remember" >&emsp; &emsp;Restez connecté(e) </td>
                        </tr>
                        <tr>
                          <td> <input type="submit" name="formconnect" value="se connecter"></div></td>                             
                        </tr>
                      <tr>
                        <td><p>Sinon inscrivez vous</p></td>
                      </tr>
                    </td>
                  </tr>
                </table>
              </form>
              <div id="notconnected" class="Madiverror">
                <?php
                    if(isset($errorconnection))
                    {
                      echo $errorconnection;
                    }
                ?>
            </div>              
           <div class="col-2"></div>
        </div>
            <!-- ici nous avons le fromulaire d'inscription-->          
            <!-- ========================================================= -->
            <!-- =======================INSCRIPTION=======================-->
            <!-- ========================================================= -->
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-1">
        <div id="inscription" >
        <h2 class="f5 f1"> Inscription</h2>
          <div  class="col-sm-4"></div>
          <form method="POST" action="" >
            <table class="container1">
              <tr>
                <td>
                  Civilité:
                </td>
                <td>
                  <div class="form-check-inline ">
                    <label class="form-check-label" for="civilite"></label>
                    <input type="radio" class="form-check-input" id="madame" name="genre" value="F" checked>Madame
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label" for="civ"> </label>
                    <input type="radio" class="form-check-input" id="monsieur" name="genre" value="H">Monsieur
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="nom" id="nom">Nom:</label>
                  </td>
                <td>
                  <input type="text" size="60"name="nom" value="<?php if(isset($nom)) {echo $nom;}?>"/>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="prenom" id="prenom">Prénom:</label>
                </td>
                <td>
                  <input type="text" size="60"name="prenom" value="<?php if(isset($prenom)) {echo $prenom;}?>"/>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="pseudo" id="pseudo">Pseudo:</label>
                </td>
                <td>
                  <input type="text" size="60"name="pseudo" value="<?php if(isset($pseudo)) {echo $pseudo;}?>"/>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="mail" id="mail ">Mail:</label>
                </td>
                <td>
                  <input type="email"size="60" name="mail" value="<?php if(isset($mail)) {echo $mail;}?>"/>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="mdp" size="60"id="mdp">Mot de passe:</label>
                </td>
                <td>
                  <input type="password" size="60"name="mdp">
                </td>
              </tr>
              <tr>
                <td>
                  <label size="60" for="mdp2" id="mdp2">Confirmer votre mot de passe</label>
                </td>
                <td>
                  <input type="password" size="60"  name="mdp2" >
                </td>
              </tr><br>
              <tr>
                <td></td>
                <td>
                  <button type="submit"  value=" inscription" name="forminscription" onclick="functionIns() ">inscription</button>  
                </td>
              </tr> 
               <tr> <td></td>
                <td>
                    <div class="Madiverror">
                      <?php
                        if(isset($errorinscription))
                        {
                          echo $errorinscription;
                        }
                      ?>
                    </div>
                    <?php
                      if(isset($message))
                      {
                        echo $message;
                      }
                    ?> 
                    </div>
                  </td>
                </tr>
          </table>  </form>    
        </div>
        </div>
        <div class="sol-sm-2"></div>
    </div></div>
    <!-- ################################## COMMENTAIRE ##########################################-->
    <div id="commente">
    <h2 class="f5 f1" style="text-align:center ; margin-bottom: 0px;">Donner votre avis</h2>
    <br>
    <div class="row" style="text-align:center">
      <div class="col-2"></div>
      <div class="col-8 container1">  
        <form action="" method="post" >
          <br>
          <div class="row">
            <div clas="col-sm-2"></div>
            <div class="col-sm-10">
            <div>
            <label for="name" class="f2">PSEUDO</label>
            <input type="text" placeholder="Votre pseudo..."id="name" size="50" name="user_name">
          </div>
          <br>
          <div>
            <label for="mail" class="f2">EMAIL</label>
            <input type="email" placeholder="Votre E-mail..." size="50" id="mail" name="user_mail">
          </div>
          <br>
          <div >
            <label for="msg" class="f2">COMMENTAIRE</label>
            <textarea id="commentaire" placeholder="Ecrivez votre commentaire ici ..." rows="10"cols="49" name="user_message"></textarea>
          </div>        
          <div >            
              <button type="submit">Enregistrer</button>  
          </div>
            </div>
            <div class="col-sm-2"></div>
          </div>   
        </form>
      <div>
      </div>
              
    </div>
    </div>
    <!-- CONTACT -->
    <div class="row ">
        <div class="col-2"></div>
        <div class="col-8"  >
          <h2 class="f5 f1" id="contact" style="text-align: center"> Comment nous contacter </h2>
          <br>
          <div class="container1"  >
            <p> &#128222; : <span class="f5">(+33) 7 00 00 00 00</span> ou <span class="f5">(+33) 6 00 00 00 00</span></p>
            <br>
            <p> &#128233; Email : <a class="f5" href="mailto:contact@gmail.com?" target="_top">contact@gmail.com</a> 
           </p>
          </div>
          <br>
          <div class="container1">
            <h4 class="f5">Via un conseiller en ligne</h4>
            <br>
            <div class="row">
              <div class="col-4"></div>
              <div class="col-6">
                <a href="https://www.facebook.com/">
                  <img src="Images/facebook.png"  style="width:110px"  >
                </a>
                <a href="https://twitter.com/">
                  <img src="Images/twitter.png"  style="width:60px"  >
                </a>
                <a href="https://www.linkedin.com/">
                  <img src="Images/linkdin.png"  style="width:90px"  >
                </a>
              </div>
              <div class="col-3"></div>
            </div>
            <br>
            <div class="container1">
            
            <p>Une question, nous sommes disponible en ligne pour vous repondre </p>
            </div>
          </div>
          <br>
          <div class="container1">
          <h4 class="f5" style="text-align:center">En remplissant ce formulaire</h4>
          <br>
          <div class="row">
            <div class="col-2"></div>
            <div class="col-10">  
              <form action="" method="post" >
              <div>
              <label for="civilite">ÊTES-VOUS:</label>
                <select>
                  <option value="Monsieur">Monsieur</option>
                  <option value="Madame">Madame</option>
                </select>
              </div>
                <br>
                <div>
                  <label for="name" class="f2">NOM</label>
                  <input type="text" placeholder="Votre nom..."id="name" size="50" name="user_name">
                </div>
                <br>
                <div>
                  <label for="mail" class="f2">EMAIL</label>
                  <input type="email" placeholder="Votre E-mail..." size="50" id="mail" name="user_mail">
                </div>
                <br>
                <div>
                  <label for="msg" class="f2">MESSAGE</label>
                  <textarea id="msg" placeholder="Ecrivez votre message ici ..." rows="5"cols="49" name="user_message"></textarea>
                </div>
                <div class="button">                
                 <button  class="float-left" type="submit">Envoyer</button>   
            </div>
                </div>
              </form>
            <div>
            </div>         
        </div>
        </div>
      </div> 

    </div>
     <div id="scroll_to_top"> 
      <a href="#top"><img src="Images/monter.png" alt="Retourner en haut" /></a> 
    </div><br><br><br>
  </body>
</html>


