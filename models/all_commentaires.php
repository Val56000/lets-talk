<?php

/**
*
* @return array
*/
function getAllCommentaires(){
    $bdd = new PDO('mysql:host=localhost;dbname=lets_talk;charset=utf8', 'root', '');
   
   $reqUsers = $bdd->prepare('SELECT prenom, commentaires_g, date_ajout FROM commentaire_general ORDER BY date_ajout ASC');
   $reqUsers->execute([]);
   return $reqUsers->fetchAll();


   }

   ?>