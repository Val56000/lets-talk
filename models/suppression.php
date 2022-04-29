<?php
session_start();


//connection à la bdd
require('C:\xampp\htdocs\lets-talk\config\bdd.php');


//On prépare la requete avec delete et on passe en argument le 'username' indiqué par l'utilisateur à la connexion
$bdd->prepare("DELETE FROM user WHERE username = ? ")->execute(array($_SESSION['username'])) ;

if ($bdd == true){
    header("Location: /lets-talk/views/index.html");
    exit;
}


?>