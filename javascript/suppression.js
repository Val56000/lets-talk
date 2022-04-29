let suppression = document.querySelector("#sup");
suppression.addEventListener("click", () => {
    var retVal = confirm("Etes-vous sûr de vouloir supprimer le compte ?");
    if( retVal == true ){
    //ici vous pouvez mettre votre en cas de confirmation
       //moi j'affiche une boite d'alerte
          alert("Compte supprimé avec succès !");
          window.location.replace("/lets-talk/models/suppression.php");
               return true;
            }
               
    else{
          return false;
               
       }
    }

)




