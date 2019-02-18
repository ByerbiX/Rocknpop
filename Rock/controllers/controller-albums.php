<?php 
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../database/db.php';

/*D'abord on vérifie que l'id est défini MAIS que nous ne venons de la page annee*/
if(isset($_SESSION['navigation']['id']) && !isset($_SESSION['navigation']['annee'])) {
    $id = $_SESSION['navigation']['id'];
    unset($_SESSION['navigation']['id']);
    
    $req = $pdo->prepare('SELECT artiste FROM musics WHERE id = :id');
    $req->execute(array(
    ':id' => $id
    ));
    $clicked_artist = $req->fetch();
    $req->closeCursor();
    
    $subReq = "SELECT * FROM musics WHERE artiste = :artiste";
    $req = $pdo->prepare("SELECT MAX(id) as id, MAX(artiste) as artiste, MAX(titre) as titre, MAX(annee) as annee, album, MAX(link) as link, MAX(thumb) as thumb FROM ($subReq) as subReq GROUP BY album");
    $req->execute(array(
        ':artiste' => $clicked_artist['artiste']
    ));
    $albums = $req->fetchAll();
    $artisteTitre = " - " . $albums[0]['artiste'];
} else if (isset($_SESSION['navigation']['annee'])) { //on vient de la page annee
    $id = $_SESSION['navigation']['id'];
    unset($_SESSION['navigation']['id']);
    unset($_SESSION['navigation']['annee']);
    
    $req = $pdo->prepare('SELECT annee FROM musics WHERE id = :id');
    $req->execute(array(
    ':id' => $id
    ));
    $clicked_artist = $req->fetch();
    $req->closeCursor();
    
    $subReq = "SELECT * FROM musics WHERE annee = :annee";
    $req = $pdo->prepare("SELECT MAX(id) as id, MAX(artiste) as artiste, MAX(titre) as titre, annee, MAX(album) as album, MAX(link) as link, MAX(thumb) as thumb FROM ($subReq) as subReq GROUP BY album");
    $req->execute(array(
        ':annee' => $clicked_artist['annee']
    ));
    $albums = $req->fetchAll();
    $artisteTitre = " - " . $albums[0]['annee'];
} else { //le reste des cas => je clique sur le menu albums
    $req = $pdo->prepare('SELECT MAX(id) as id, MAX(artiste) as artiste, MAX(titre) as titre, MAX(annee) as annee, album, MAX(link) as link, MAX(thumb) as thumb FROM musics GROUP BY album');
    
    $req->execute();
    $albums = $req->fetchAll();
}
$req->closeCursor();
