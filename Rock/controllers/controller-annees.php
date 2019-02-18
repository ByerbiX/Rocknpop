<?php 
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../database/db.php';


$req = $pdo->prepare('SELECT MAX(id) as id, MAX(artiste), MAX(titre) as titre, annee, MAX(album) as album, MAX(link) as link, MAX(thumb) as thumb FROM musics GROUP BY annee');
$req->execute();

$annees = $req->fetchAll();
$req->closeCursor();