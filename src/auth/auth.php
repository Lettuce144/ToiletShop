<?php
// Create an auth class that will handle all authentication
namespace Auth {
    @require(__DIR__.'/../db/Database.php');

    // Make sure that the session is started before doing anything related to authentication
    if (session_status() !== PHP_SESSION_ACTIVE) @session_start();

    use Database;
    use PDO;

    // Create a function that will check if the user is logged in
    function isloggedin(): bool
    {
        // Check if the session is set
        if (isset($_SESSION['user']) && $_SESSION['user'] != 'Guest') {
            return true;
        } else {
            return false;
        }
    }

// Create a function that will log the user in
    function login($username, $password): bool {
        // Get the user from the database
        Database::query("SELECT * FROM `users` WHERE name = '$username'");
        $result = Database::getAll(PDO::FETCH_ASSOC);
        // Check if the user exists
        if ($result > 0) {
            // Check if the password is correct
            if (password_verify($password, $result[0]['password'])) {
                $_SESSION['user'] = $result[0]['name'];
                return true;
            } else {
                return false;

            }
        } else {
            return false;
        }
    }

    //username is email
    function register($username, $password, $firstname, $lastname, $address): bool
    {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        Database::query("INSERT INTO users (name, password) VALUES ('$username', '$hashed')");
        Database::query("INSERT INTO klanten (voornaam, achternaam, adres) VALUES ('$firstname', '$lastname', '$address'");
        return Database::get();
    }

    function guest()
    {
        $_SESSION['user'] = 'Guest';
    }

// Create a function that will log the user out
    function logout() {
        // Unset the session
        unset($_SESSION['user']);
    }
}
