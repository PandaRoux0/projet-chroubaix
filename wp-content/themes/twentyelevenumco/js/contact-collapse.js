
/*
* Programme permettant d'afficher les coordonnées dans la barre de naviguation
* Langage: jQuery (Framework JavaScript)
*/

$(document).ready(function(){
    //Initialisation des variables
    var $adresse = $(".contact #text-adresse");
    var $phone = $(".contact #text-telephone");
    //Le texte est caché
    $(".contact p").hide();
    //Lorsque l'on clique , il s'affiche ou se cache
    $(".contact #icon-adresse").click(function(){
        $adresse.toggle(500);
    });

    $(".contact #icon-telephone").click(function(){
        $phone.toggle(500);
    });

});
