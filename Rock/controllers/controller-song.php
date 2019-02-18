<?php 

include '../database/db.php';

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

//On récupère l'id de la chanson greffé à notre album

$clicked_song = $_SESSION['navigation']['id'];
unset($_SESSION['navigation']['id']);


$req = $pdo->prepare('SELECT album FROM musics WHERE id = :clicked_song');
$req->execute(array(
    ':clicked_song' => $clicked_song
));
$clicked_album = $req->fetch();
$req->closeCursor();

//On récupère ensuite l'album qui correspond à la chanson

$req = $pdo->prepare('SELECT * FROM musics WHERE album = :album');
$req->execute(array(
    ':album' => $clicked_album['album']
));
$songs = $req->fetchAll();

//Mise en place du titre
$albumTitre = " - " . $songs[0]['album'];


