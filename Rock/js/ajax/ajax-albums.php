<?php 

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

//En injecte juste nos $_POST dans notre session
$_SESSION['navigation']['location'] = $_POST['location'];
$_SESSION['navigation']['id'] = $_POST['id'];
$_SESSION['navigation']['annee'] = $_POST['annee'];