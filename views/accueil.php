<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/lets-talk/css/page_accueil/nav_accueil.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>



        <nav>
          
        <img src="/lets-talk/image/logo-unique.jpg" alt="">
          
          
            <ul id="ul1">
            
              <li class="li1"><a href="#" class="lien"  style="color: black;">Actualités</a></li>
              <li class="li1"><a href="\lets-talk\views\canal-g.php" class="lien">Canal général</a></li>
              <li class="li1"><a href="divertissement.html" class="lien">Divertissements</a></li>
              
                      
                    </ul>


             
            
                


                <div class="mon-profil" class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Mon profil
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="update_profil.php">Modifier profil</a></li>
                      <li><a class="dropdown-item" href="#" id="sup">Suppression du compte</a></li>
                      <li><a class="dropdown-item" href="index.html">Déconnexion</a></li>
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






<p>Let's Talk News </p>

<div id="spans">
<span>Actualités Sport</span>
<span>Actualités Médias</span>
<span>Réseaux sociaux</span>
</div>

<div id="all_actualites">
  


<div id="sport">
<a href="https://www.eurosport.fr/" target="_blank"><img src="..\image\actualite\eurosport.jpg" alt="Eurosport" class="sport"></a>
<a href="https://www.matchendirect.fr/" target="_blank"><img src="..\image\actualite\match-en-direct.png" alt="Match En Direct" class="sport"></a>
<a href="https://www.lequipe.fr/" target="_blank"><img src="..\image\actualite\lequipe.png" alt="L'Equipe" class="sport"></a>
</div>


<div id="medias">
<a href="https://www.lefigaro.fr/" target="_blank"><img src="..\image\actualite\le-figaro.png" alt="Le Figaro" class="medias"></a>
<a href="https://www.lemonde.fr/" target="_blank"><img src="..\image\actualite\le-monde.jpg" alt="Le Monde" class="medias"></a>
<a href="https://www.ouest-france.fr/" target="_blank"><img src="..\image\actualite\ouest-france.png" alt="Ouest France" class="medias"></a>
<a href="https://www.konbini.com/fr/" target="_blank"><img src="..\image\actualite\konbini.png" alt="Konbini" class="medias"></a>
<a href="https://www.brut.media/fr/news" target="_blank"><img src="..\image\actualite\brut.png" alt="Brut" class="medias"></a>
</div>


<div id="social">
<a href="https://www.instagram.com/?hl=fr" target="_blank"><img src="..\image\actualite\instagram.jpg" alt="Instagram" class="social"></a>
<a href="https://twitter.com/?lang=fr" target="_blank"><img src="..\image\actualite\twitter.png" alt="Twitter" class="social"></a>
</div>


</div>

<div id="bloc-btn">
<button id="bouton_retour">Retour</button>
</div>


        <script src="/lets-talk/javascript/accueil.js"></script>
        <script src="/lets-talk/javascript/suppression.js"></script>
        <script src="/lets-talk/javascript/meteo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>