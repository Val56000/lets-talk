<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/lets-talk/css/update_profil/nav_update_profil.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>



        <nav>
          
        <img src="/lets-talk/image/logo-unique.jpg" alt="logo lets-talk">
          
          
            <ul id="ul1">
            
              <li class="li1"><a href="accueil.php" class="lien">Actualités</a></li>
              <li class="li1"><a href="\lets-talk\views\canal-g.php" class="lien">Canal général</a></li>
              <li class="li1"><a href="#" class="lien">Divertissements</a></li>
              
                      
                    </ul>


             
            
                


                <div class="mon-profil" class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Mon profil
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="update_profil.php">Modifier profil</a></li>
                      <li><a class="dropdown-item" href="#" id="sup">Suppression du compte</a></li>
                      <li ><a class="dropdown-item" href="index.html" >Déconnexion</a></li>
                    </ul>
                  </div>
                  
        </nav> 







      

<?php
require('C:\xampp\htdocs\lets-talk\config\bdd.php');

//On prépare la requête
$req = $bdd->prepare('SELECT * FROM user WHERE username = ?');
$req->execute(array($_SESSION['username']));


//fetch récupère tous les champs du user
$donnees = $req->fetch();
?>


<div id="container">
<form action="/lets-talk/models/modif_user.php" id="form3" method="post" name="form3">
				<h1>Inscription</h1><label><b>Prenom</b></label> <input name="prenom" value="<?php echo $donnees['prenom'] ?>" required="" type="text"> <label><b>Nom</b></label> <input name="nom" value="<?php echo $donnees['nom'] ?>" required="" type="text"> <label><b>Téléphone</b></label> <input name="telephone" value="<?php echo $donnees['telephone'] ?>" required="" type="text"> <label><b>E-mail</b></label> <input name="email" value="<?php echo $donnees['email'] ?>" required="" type="text"> <label><b>Nom d'utilisateur</b></label> <input name="username" value="<?php echo $donnees['username'] ?>" required="" type="text"> <label><b>Mot de passe</b></label> <input name="password" placeholder="****" required="" type="password"> <label><b>Retaper le mot de passe</b></label> <input name="password2" placeholder="****" required="" type="password"> <input type="submit" value='Modifier' id="formconnexion2"> 
				
			</form>

</div>














        <script src="/lets-talk/javascript/suppression.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>