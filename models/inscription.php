<?php

//On récupère la connexion à la bdd
require('C:\xampp\htdocs\lets-talk\config\bdd.php');
 

//on vérifie si il existe des champs de formulaires qui sont envoyés
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['username']) && isset($_POST['password'])) {
  


    // On récupère la saisie dans les champs du formulaire et on met ces valeurs dans des variables
    // Sécurise les variables avec htmlspecialchars contre les failles xss
    $prenom =  htmlspecialchars ($_POST['prenom']);
    
    $nom =  htmlspecialchars ($_POST['nom']);

    $telephone =  htmlspecialchars ($_POST['tel']);

    $email =  htmlspecialchars ($_POST['mail']);
     
    $username = htmlspecialchars ($_POST['username']);


    //hachage mot de passe
    $password = sha1 ($_POST['password']);

    $password2 = sha1 ($_POST['password2']);


    


   



    //On vérifie si le mot de passe 2 est identique au mot de passe 1
    if($password == $password2){

      //On prépare la requete pour l'insertion de données, 
      $requete = $bdd->prepare ("INSERT INTO user (prenom, nom, telephone, email, username, password)
                VALUES (?, ?, ?, ?, ?, ?)");
                
      //On execute la requete avec en paramètre les saisies utilisateurs          
       $requete->execute(array($prenom, $nom, $telephone, $email, $username, $password));  
       
       //Redirection en cas de succès
       header('Location: /lets-talk/views/index.html');
       echo "Inscription effectuée avec succès";

    }
    else {
     echo "Vos mots de passes ne correspondent pas !";
     
}


}
?>