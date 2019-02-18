<?php 

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['navigation']['location'] = $_POST['location'];
$_SESSION['navigation']['id'] = $_POST['id'];