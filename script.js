/* Fonction qui permet d'aller en haut de page de manière smooth */
function allerEnHaut(){
    document.body.scrollIntoView({
        behavior:"smooth"
    });
}

/* On récupère le bouton et quand il sera cliqué, il utilisera la fonction allerEnHaut() */
let boutonAllerEnHaut = document.querySelector("#revenirEnHaut");
boutonAllerEnHaut.addEventListener("click", allerEnHaut);