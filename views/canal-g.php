<?php
session_start();
include_once 'C:\xampp\htdocs\lets-talk\controllers\my_controllers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/lets-talk/css/conv_gen/nav_conv_gen.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>



        <nav>
          
        <img src="/lets-talk/image/logo-unique.jpg" alt="">
          
          
            <ul id="ul1">
            
              <li class="li1"><a href="\lets-talk\views\accueil.php" class="lien" >Actualités</a></li>
              <li class="li1"><a href="#" class="lien"  style="color: black;">Canal général</a></li>
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




        
        <form action="/lets-talk/models/insert_comm_g.php" method="post">
    
    <legend>Message</legend>
    <textarea name="message" rows="5" cols="80" type="text" id="area"></textarea>
<input type="submit" value="envoyer">
</form>



        <!-- Affichage des commentaires utilisateurs -->




<div id="position_comm">
  <?php
foreach ($getAllCommentaires as $index => $comm){ 
  echo '<div id="bloc_message">';
  echo '<div class="prenom_user">'.$comm['prenom'].'</div>';
  echo '<div class="message_user">'.$comm['commentaires_g'].'</div>';
  echo '</div>';
}
  ?>
 
 </div>















      





        <script src="/lets-talk/javascript/suppression.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>