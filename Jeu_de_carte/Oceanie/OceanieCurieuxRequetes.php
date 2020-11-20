<?php session_start();
	if (isset($_POST['sow'])) {
	 
 
		include ('../UsefulData/DataBase.php');
	  // Si tout va bien, on peut continuer
	  // On récupère tout le contenu de la table jeux_video
	  $reponse = $bdd->query('SELECT * FROM Questionnaire where continent=\'oceanie\' and theme=\'curieux\'');
	  
	  
	  // On affiche chaque entrée une à une
  

		  while ($donnees = $reponse->fetch())
		  {   

		  if($_POST['sow']== $donnees['id'])
		  {
			  echo $donnees['question'];
			  echo '<img src="../' .$donnees['drapeaux']. '" alt="maPhoto" title="maPhoto"/></img>';
			  $pays=$donnees['pays'];
		  break;
		  }
		  

		  }
	  


}	

if (isset($_POST['donnerjson'])) {


include ('../UsefulData/DataBase.php');
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Questionnaire where continent=\'oceanie\' and theme=\'curieux\'');


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())
{   

if($_POST['donnerjson']== $donnees['id'])
{
echo '{"pays":"'.$donnees['pays'].'","log":"'.$donnees['longitude'].'","lal":"'.$donnees['latitude'].'"}';

break;
}


}


$reponse->closeCursor(); // Termine le traitement de la requête

}
function score_generale($id_user)
{
  include ('../UsefulData/DataBase.php');
  
  $reponse = $bdd->query('SELECT SUM(your_score) as score FROM `score` WHERE id_joueur = "'.$id_user.'" ');
  $val = $reponse->fetch();
  return $val['score'];
	  
}
if (isset($_POST['score'])) {
	if (isset($_SESSION['id'])) {
		include ('../UsefulData/DataBase.php');
		$insertuser=$bdd->prepare("INSERT INTO score(`your_score`, `id_joueur`, `id_questionnaire`) VALUES(?,?,?)");
		$insertuser->execute(array($_POST['score'],$_SESSION['id'], $_POST['id_question']));
		echo "Bonjour ".$_SESSION['pseudo']." votre score est: ".score_generale($_SESSION['id']." pts") ;
	} else {
		echo "Bonjour Utilisateur votre score est: ".$_POST['score']." pts" ; 
	}
	
	
}		
  

?>