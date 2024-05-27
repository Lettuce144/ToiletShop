<?php
// Create an auth class that will handle all authentication
namespace Auth {

    use Database;
    use PDO;

    // Create a function that will check if the user is logged in
    function check(): bool
    {
        // Check if the session is set
        if (isset($_SESSION['user'])) {
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

    function register($username, $password): bool
    {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        Database::query("INSERT INTO users (name, password) VALUES ('$username', '$hashed')");
        return Database::get();
    }

// Create a function that will log the user out
    function logout() {
        // Unset the session
        unset($_SESSION['user']);
    }
}
