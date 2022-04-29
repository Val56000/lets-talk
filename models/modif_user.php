<?php

session_start();

//On récupère la connexion à la bdd
require('C:\xampp\htdocs\lets-talk\config\bdd.php');


//on vérifie si il existe des champs de formulaires qui sont envoyés
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])) {


    // On récupère la saisie dans les champs du formulaire et on met ces valeurs dans des variables
    // Sécurise les variables avec htmlspecialchars contre les failles xss
    $prenom =  htmlspecialchars ($_POST['prenom']);
    
    $nom =  htmlspecialchars ($_POST['nom']);

    $telephone =  htmlspecialchars ($_POST['telephone']);

    $email =  htmlspecialchars ($_POST['email']);
     
    $username = htmlspecialchars ($_POST['username']);


    //hachage mot de passe
    $password = sha1 ($_POST['password']);

    $password2 = sha1 ($_POST['password2']);


//On vérifie si le mot de passe 2 est identique au mot de passe 1
if($password == $password2){

//on prepare la requete avec update afin d'effectuer des modifications à la table indiquée dans la requete
$req = $bdd->prepare('UPDATE user SET prenom = ?, nom = ?, telephone = ?, email = ?, username = ?,
 password = ? WHERE username = ?'); 

$req->execute(array($prenom, $nom, $telephone, $email, $username, $password, $_SESSION['username']));



 //Redirection en cas de succès
 header('Location: /lets-talk/views/update_profil.php');


}

else{
    echo "echec 1 !";
}

}

else{
    echo "echec 2 ! ";
}




?>