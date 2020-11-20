<?php 

try
    {
// On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=carte;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
        exit;
    }
?>