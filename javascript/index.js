let btn1 = document.querySelector('#bouton1');
let btn2 = document.querySelector('#bouton2');
let formulaire = document.querySelector('#form1');
let formulaire2 = document.querySelector('#form2')
let container2 = document.querySelector('#container2');
let span = document.querySelectorAll('span');
let logo = document.querySelector('#logo-unique')
console.log(btn1);




//événement sur le bouton connection
  btn1.addEventListener('click', () => {
container2.style.display = "none";
formulaire.style.display = "block";
  })


  //événement sur le bouton connection
  btn2.addEventListener('click', () => {
    container2.style.display = "none";
    formulaire2.style.display = "block";
    logo.style.display = "none";
      })


  //bouton retour du formulaire connexion
  span[0].addEventListener('click', () => {
    location.reload();
       })



  //bouton retour du formulaire d'inscription
span[1].addEventListener('click', () => {
   location.reload();
      })

      


   


