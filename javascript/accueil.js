//Sélectionner le bloc d'image id sport
let id_sport = document.querySelector('#sport');
id_sport.style.display = 'none';

//Sélectionner le bloc d'image id medias
let id_medias = document.querySelector('#medias');
id_medias.style.display = 'none';

//Sélectionner le bloc d'image id social
let id_social = document.querySelector('#social');
id_social.style.display = 'none';

//Sélectionner tous les spans (titre) de chaque actualités
let span = document.querySelectorAll('span');
console.log(span);

//bloc comprenant les titres + images
let all_actualites = document.querySelector('#all_actualites')



span[2].addEventListener('click', ()=> {
    span[3].style.display = "none";
    span[4].style.display = "none";
    id_sport.style.display = "block";
})


span[3].addEventListener('click', ()=> {
    span[2].style.display = "none";
    span[4].style.display = "none";
    id_medias.style.display = "block";
    all_actualites
 
})


span[4].addEventListener('click', ()=> {
    span[2].style.display = "none";
    span[3].style.display = "none";
    id_social.style.display = "block";
 
})


let bouton_retour = document.querySelector('#bouton_retour');
bouton_retour.addEventListener("click", ()=> {
    location.reload();
})
