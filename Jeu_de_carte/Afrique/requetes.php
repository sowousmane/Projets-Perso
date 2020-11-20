
 <link rel="stylesheet" href="../UsefulData/carte.css">
    <style>
    .classee{
        text-align: center;
        margin: auto;
         width: 100%;
      }
    </style>

     
        <h2 style="text-align: center;" class="f5 f1"> Inscription</h2> <div class="classee " id="inscription" >
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
                  <label for="mail" id="mail">Mail:</label>
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
                  <label for="mdp2" id="mdp2">Confirmer votre mot de passe</label>
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