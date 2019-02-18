<?php 
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

require '../database/db.php';

$req = $pdo->prepare('SELECT * FROM musics');
$req->execute();
$musics = $req->fetchAll();

//shuffle permet de mélanger un tableau
shuffle($musics);

