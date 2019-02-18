/*PARTIE NAVIGATION*/

//On détecte le click sur nos .dynamicLinks
//On passe l'événement (e) en paramètre de la fonction afin d'en stoper le comportement par défaut
$(document).on('click', '.dynamicLinks', function (e) {
    e.preventDefault() //Annulation du comportement par défaut

    var target = $(this).attr('data-target') //Récupération de la page ciblée
    var id = $(this).attr('data-id') //Récupération des infos nécessaire à la navigation
    var annee = $(this).attr('annee') //Détection si on vient de la page annee
    //S'il y a des infos, id sera défini donc on entre dans le if
    if(id != undefined) {
        //Si infos il y a alors on fait notre requête en ajax
        $.ajax({
            type: 'post',
            url: '../js/ajax/ajax-' + target + '.php',
            data: { 'id': id, 'location' : target, 'annee': annee }
        })
    }
    
    //Dans tous les cas je charge la page demandé via la variable target crée
    $( ".container" ).load("../views/" + target + ".php ." + target + "-module" )

})


/*PARTIE LECTEUR*/

//Déclaration des variables concernant les éléments HTML
var playerValue = document.getElementById('player')
var thumbValue = document.getElementById('thumb')
var titreValue = document.getElementById('titre')
var artisteValue = document.getElementById('artiste')

//Mise en place des infos du player en fonction du CLICK
$(document).on('click', '.dynamicSongs', function () {
    //Déclaration des variables dynamiques en récupérant les "data"
    var link = $(this).attr('data-link')
    var thumb = $(this).attr('data-thumb')
    var titre = $(this).attr('data-titre')
    var artiste = $(this).attr('data-artiste')
    //On récupérer l'ensemble des chansons => ça donnera un tableau du type songs[machanson]
    var songs = document.querySelectorAll('.dynamicSongs')
    //currentSong c'est la valeur de l'attribut data-track de la chanson surlaquelle tu viens de cliquer
    var currentSong = $(this).attr('data-track')
    
    //Insertion des informations dans le player au CLICK
    $(playerValue).attr('autoplay', true)
    $(playerValue).attr('src', link)
    $(thumbValue).attr('src', thumb)
    $(titreValue).text(titre)
    $(artisteValue).text(artiste)

    //Début du code quand le player a fini
    $(playerValue).on('ended', function() {
        //on incrémente la valeur de currentSong
        currentSong++
        //on séléctionne la chanson correspondant donc à currentSong++ (donc la suivante)
        var nextSong = songs[currentSong]

        //On récupère les informations de la chanson séléctionnée au dessus (nextSong) via ses attributs
        link = $(nextSong).attr('data-link')
        thumb = $(nextSong).attr('data-thumb')
        titre = $(nextSong).attr('data-titre')
        artiste = $(nextSong).attr('data-artiste')
        
        //On réinjecte dans notre lecteur les informations de la chanson suivante
        $(playerValue).attr('autoplay', true)
        $(playerValue).attr('src', link)
        $(thumbValue).attr('src', thumb)
        $(titreValue).text(titre)
        $(artisteValue).text(artiste)
    })
})

//Déclaration d'une fonction pour récupérer les cookies
function getCookieValue(a) {
    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
    return b ? b.pop() : '';
}

//Mise en place des infos du player en fonction des cookies s'il y en a
var trackLink = getCookieValue('trackLink')
var trackThumb = getCookieValue('trackThumb')
var trackTitre = getCookieValue('trackTitre')
var trackArtiste = getCookieValue('trackArtiste')
var currentTimer = getCookieValue('currentTimer')
$(window).on('load', function () {
    $(playerValue).attr('autoplay', false)
    $(playerValue).attr('src', trackLink)
    $(thumbValue).attr('src', trackThumb)
    $(titreValue).text(trackTitre)
    $(artisteValue).text(trackArtiste)
    playerValue.currentTime = currentTimer
})


/*PARTIE COOKIE*/

//Refresh, on déclare nos cookies pour les garder en mémoire
$(window).on('unload', function () {
    document.cookie = "trackLink=" + $(playerValue).attr('src') + "; expires=Thu, 14 May 2020 12:00:00 UTC"
    document.cookie = "trackThumb=" + $(thumbValue).attr('src') + "; expires=Thu, 14 May 2020 12:00:00 UTC"
    document.cookie = "trackTitre=" + $(titreValue).text() + "; expires=Thu, 14 May 2020 12:00:00 UTC"
    document.cookie = "trackArtiste=" + $(artisteValue).text() + "; expires=Thu, 14 May 2020 12:00:00 UTC"
    document.cookie = "currentTimer=" + playerValue.currentTime + "; expires=Thu, 14 May 2020 12:00:00 UTC"
})