//Ce fichier permet de mettre un margin-bottom au dernier commentaire de "Canal General"
//Aussi margin-top sur le premier prénom
let classes = document.getElementsByClassName('message_user');
let classes2 = document.getElementsByClassName('prenom_user');

//sélection du premier prenom
let first_prenom =classes2[0];
first_prenom.style.marginTop = "150px";

//sélection du dernier commentaire
let last_element = (classes[classes.length-1]);
last_element.style.marginBottom = "80px";


