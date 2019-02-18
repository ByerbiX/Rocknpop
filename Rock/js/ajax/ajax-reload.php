<?php 

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

setcookie("track", $_POST['track'], time()+3600);