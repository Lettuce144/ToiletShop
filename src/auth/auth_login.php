<?php
@require_once("auth.php");

// NOTE: EMAIL = USERNAME

// CHECK 1 - CHECK Request type
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Geen POST-request dus stoppen we
    // We keren terug naar de login pagina
    header('Location: ../login.php');
    exit();
 }

// CHECK 2 - CHECK Form fields
if(!isset($_POST['email']) || !isset($_POST['password'])) {
    // Geen email of wachtwoord dus stoppen we
    // We keren terug naar de login pagina
    header('Location: ../login.php');
    exit();
}

// Nu kunnen we pas verder, maar beveiligen de input wel eerst tegen injectie
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);

if(Auth\login($email, $password)) {
    // We proberen de gebruiker in te loggen
    Auth\login($email, $password);
    // Als het gelukt is, sturen we de gebruiker door naar de homepagina
    header('Location: ../index.php');
    exit();
} else {
    // Als het niet gelukt is, sturen we de gebruiker terug naar de login pagina
    header('Location: ../login.php');
    exit();
}