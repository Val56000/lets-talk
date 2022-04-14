<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/lets-talk/css/page_accueil/accueil.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>



        <nav>
          <div id="mon-image">
        <img src="/lets-talk/image/logo-unique.jpg" alt="">
          </div>
          
            <ul id="ul1">
            
              <li class="li1">Actualités</li>
              <li class="li1">Canal général</li>
              <li class="li1">Conversation privée</li>
              
                      
                    </ul>


             
            
                


                <div class="mon-profil" class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Mon profil
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Modifier profil</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li ><a class="dropdown-item" href="index.html">Déconnexion</a></li>
                    </ul>
                  </div>
                  
        </nav> 







        <!-- HTML météo -->
<div id="general">

        <div class="container">
  
          <div class="row justify-content-center">
            
            <div class="col-md-8">
              <!-- Titre -->
              <h1 class="text-center mt-5">Météo</h1>
              
              <!-- Ville / Temperature -->
              <div class="text-center">
                <span id="ville">paris</span>
                
                <div id="temperature">
                  <span id="temperature_label">
                    xx.x
                  </span> °C
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="row justify-content-center">  
            <div class="col-md-8 text-center">
              <!-- Changer de ville -->
              <div id="changer" class="mt-2 text-center p-3 text-white font-weight-bold text-uppercase d-inline-block">
                Changer de ville
              </div>
            </div>
            
          </div>
          
        </div>

<!--div avec l'id prénom sera utilisée pour donner un style au prénom de l'utilisateur sur l'interface d'accueil-->
<div id="prenom">

<?php
require('C:\xampp\htdocs\lets-talk\config\bdd.php');

//On prépare la requête
$req = $bdd->prepare('SELECT * FROM user WHERE username = ?');
$req->execute(array($_SESSION['username']));

//fetch analyse les entrées une par une jusqu'à trouver la bonne ligne qui sera stockée dans la variable $donnees
while($donnees = $req->fetch()){

//Code php pour afficher le prénom de l'utilisateur sur la page d'accueil (avec concaténation)
echo "Hello ".$donnees['prenom']."";

}
?>
</div>

</div>




        <script src="/lets-talk/javascript/meteo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>