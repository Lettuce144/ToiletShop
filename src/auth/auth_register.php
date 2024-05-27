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
// Check if repass is set incase the user forgets to fill in the field
if(!isset($_POST['email']) && !isset($_POST['password']) && 
   !isset($_POST['firstName']) && !isset($_POST['address']) && 
   !isset($_POST['lastName']) && !isset($_POST['repass']))
{
    // Geen email of wachtwoord dus stoppen we
    // We keren terug naar de login pagina
    header('Location: ../login.php');
    exit();
}

// Nu kunnen we pas verder, maar beveiligen de input wel eerst tegen injectie
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);
$firstname = htmlentities($_POST['firstName']);
$address = htmlentities($_POST['address']);
$lastname = htmlentities($_POST['lastName']);

//Check if this 
if(!Auth\login($email, $password)) {
    Auth\register($email, $password, $firstname, $lastname, $address);
    // Als het gelukt is, sturen we de gebruiker door naar de homepagina
    header('Location: ../index.php');
    exit();
} else {
    // Als het niet gelukt is, sturen we de gebruiker terug naar de login pagina
    header('Location: ../login.php');
    exit();
}