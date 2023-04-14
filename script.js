let messageConfirmation = document.querySelector(".messageConfirmation"); // On a la boîte du message de confirmation
let messageConfirmationEmail = document.querySelector(".messageConfirmationEmail"); // On a la boîte du message de confirmation de l'email

window.addEventListener("load", function(){ // Lorsque la page va se charger
    if(messageConfirmation.innerHTML){
        messageConfirmation.classList.add("afficher"); // On ajoute la classe afficher pour rendre la boîte visible
        setTimeout(function(){
            messageConfirmation.classList.remove("afficher"); // 3 secondes plus tard, on l'enlève pour la faire disparaître
        }, 3000);
    }
    else if(messageConfirmationEmail.innerHTML){
        messageConfirmationEmail.classList.add("afficher"); // On ajoute la classe afficher pour rendre la boîte visible
        setTimeout(function(){
            messageConfirmationEmail.classList.remove("afficher"); // 3 secondes plus tard, on l'enlève pour la faire disparaître
        }, 3000);
    }
})

/* Fonction qui permet d'aller en haut de page de manière smooth */
function allerEnHaut(){
    document.body.scrollIntoView({
        behavior:"smooth"
    });
}

/* On récupère le bouton et quand il sera cliqué, il utilisera la fonction allerEnHaut() */
let boutonAllerEnHaut = document.querySelector("#revenirEnHaut");
boutonAllerEnHaut.addEventListener("click", allerEnHaut);