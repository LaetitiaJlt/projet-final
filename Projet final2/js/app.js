/***********************Déclaration des variables************************/

let coms = document.getElementById("commentaire");
let form =  document.getElementById("formulaire");
let erreur= document.getElementById("erreur");
let message = [];
/**********************Définition des fonctions**********************/
function noValide(e){
    if (coms.value.length <= 20){
        e.preventDefault();
        message.push('Ton commentaires Bordel !!!')
    }
   
}
/***************************Exécution ***************************/

form.addEventListener('submit', noValide)
