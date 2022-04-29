<?php

session_start();

//connection à la bdd
require('C:\xampp\htdocs\lets-talk\config\bdd.php');



if(!empty($_POST['message'])){

 
// variables avec htmlspecialchars pour éviter la faille xss + sha1 pour hasher le mot de passe
$message = htmlspecialchars ($_POST['message']);



$req = $bdd->prepare('SELECT id_user, prenom FROM user WHERE username = ?');
$req->execute(array($_SESSION['username']));
$ki = $req->fetch();






//On prépare la requete pour l'insertion de données, 
$requete = $bdd->prepare ("INSERT INTO commentaire_general (id_user, prenom, commentaires_g, date_ajout)
VALUES (?, ?, ?, NOW())");

//On execute la requete avec en paramètre les saisies utilisateurs          
$requete->execute(array($ki[0], $ki[1], $message));  


//Redirection en cas de succès
header('Location: /lets-talk/views/canal-g.php');
}



?>