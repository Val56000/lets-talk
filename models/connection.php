<?php

session_start();

//connection à la bdd
require('C:\xampp\htdocs\lets-talk\config\bdd.php');



if(!empty($_POST['username']) && !empty($_POST['password'])){

 
// variables avec htmlspecialchars pour éviter la faille xss + sha1 pour hasher le mot de passe
$username = htmlspecialchars ($_POST['username']);
$password = sha1 ($_POST['password']);


$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];








//On prépare la requête
$req = $bdd->prepare('SELECT * FROM user WHERE username = ? AND password = ? ');

//On execute la requete en passant en argumant les saisies utilisateur dans le formulaire de connexion 
$req->execute(array($username,$password));


// Compte le nombre d'entrée 
$userexist = $req->rowCount();

//Si une ligne est trouvé 
if($userexist == 1) {

  //alors ça me redirige vers l'accueil
  header("Location: /lets-talk/views/accueil.html");

} else {
  header("Location: /lets-talk/views/index.html");
  echo "Mauvais mot de passe";

}

}



?>