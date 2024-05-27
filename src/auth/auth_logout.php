<?php
@require_once("auth.php");


// CHECK 1 - CHECK Request type
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Geen POST-request dus stoppen we
    // We keren terug naar de login pagina
    header('Location: ../login.php');
    exit();
}

//Dubble check if the user is logged in
if(Auth\isloggedin())
{
    Auth\logout();
    header('Location: ../index.php');
    exit();
}