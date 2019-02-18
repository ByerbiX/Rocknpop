<?php 
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../database/db.php';


$req = $pdo->prepare('SELECT MAX(id) as id, artiste, MAX(titre) as titre, MAX(annee) as annee, MAX(album) as album, MAX(link) as link, MAX(thumb) as thumb FROM musics GROUP BY artiste');
$req->execute();

$artistes = $req->fetchAll();
$req->closeCursor();