
//Déclaration des variables
let input = document.querySelector('#prix');
let error = document.querySelector('small');
let formulaire = document.querySelector('#formulaire');
let coups = 0;
let nombreChoisi;







//cacher le message d'erreur
error.style.display = 'none';

//Générer un nombre aléatoire
let nombreAleatoire = Math.random()*1001;
nombreAleatoire = Math.floor(nombreAleatoire);
console.log(nombreAleatoire);

//Vérifier que l'utilisateur donne un nombre
input.addEventListener('keyup', () => {
    let types= (input.value);
    console.log(types);

   if(isNaN(types)){
       error.style.display = 'inline';
   }
   else{error.style.display='none';}
    
    }
);

//Agir à l'envoi du formulaire 
formulaire.addEventListener('submit', (e)=>{
    e.preventDefault();

    if(isNaN(input.value) || input.value == ''){
        input.style.border = "5px solid red";
    }
    else{
        
        input.style.border = "5px solid silver";
        coups++;
        nombreChoisi = input.value;
        input.value = '';
        console.log(nombreAleatoire);
        verifier(nombreChoisi);

        

    }
})


//Fonction permettant de vérifier le nombre
function verifier(nbre){
if (nbre < nombreAleatoire) {
    let para =  document.createElement('p');
    para.innerHTML = 'Tour n°' + coups + ' / ' + 'Nombre choisi (' + nombreChoisi + ') ' + "C'est plus !";
    para.className ="class_para";
    para.style.backgroundColor = '#DBB671';
    para.style.marginTop = "20px";
    document.body.append(para);

    let tablo = document.getElementsByClassName("class_para");
    console.log(tablo[0]);
    tablo[0].style.marginTop = "500px";
    
    
} else if (nbre > nombreAleatoire) {
    let para =  document.createElement('p');
    para.innerHTML = 'Tour n°' + coups + ' / ' + 'Nombre choisi (' + nombreChoisi + ') ' + "C'est moins !";
    para.className ="class_para";
    para.style.backgroundColor = '#abb7b6';
    para.style.marginTop = "20px";
    document.body.append(para);



    let tablo = document.getElementsByClassName("class_para");
    console.log(tablo[0]);
    tablo[0].style.marginTop = "500px";


}
else {
    let para =  document.createElement('p');
    para.innerHTML = 'Tour n°' + coups + ' / ' + 'Nombre choisi (' + nombreChoisi + ') '+ "C'est gagné !";
    para.className ="class_para";
    para.style.backgroundColor = '#23c443';
    para.style.marginTop = "20px";
    document.body.append(para);

   

    let annuler = document.querySelector('#prix');
    annuler.disabled = true;




    let tablo = document.getElementsByClassName("class_para");
    console.log(tablo[0]);
    tablo[0].style.marginTop = "500px";

}

};


let bouton2 = document.querySelector('#boubou');
bouton2.addEventListener('click', ()=>{location.reload();
    
});










