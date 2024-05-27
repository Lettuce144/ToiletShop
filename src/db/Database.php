<?php

final class Database
{
    private static $dbconn;
    private static $dbstatement = null;
    private static $dsn = 'mysql:dbname=webshop_toilet;host=127.0.0.1';
    private static $user = 'dbu5589799';
    private static $password = 'a0U*Lc/Td1WV1O(s';


    /**
     * The constructor establishes a database connection and sets some PDO attributes.
     * Credit: https://github.com/johanstr/06-webshop/blob/master/dev/src/Database/Database.php
     */
    private static function connect(): bool
    {
        // We have to check this otherwise it will connect for every query
        if (!is_null(self::$dbconn)) {
            return true;
        }

        $pdo = null;
        try {
            $pdo = new PDO(self::$dsn, self::$user, self::$password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        self::$dbconn = $pdo;
        return true;
    }
    /**
     * The query method executes a SQL query and returns the result.
     * @param string $query The SQL query to execute.
     * @return bool The result of the query.
     */
    public static function query($query): bool
    {
        if (!self::connect())
            return false;

        try {
            self::$dbstatement = self::$dbconn->prepare($query);
            self::$dbstatement->execute();

        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
   
        return true;
    }

    public static function get($return_type = PDO::FETCH_OBJ): bool|Object|array
    {
        if (!self::connect())
            return false;

        return self::$dbstatement->fetch($return_type);
    }

    public static function getAll($return_type = PDO::FETCH_OBJ): bool|array
    {
        if (!self::connect())
            return false;

        return self::$dbstatement->fetchAll($return_type);
    }

    /**
     * The GetAllUsers method retrieves all users from the webshop.
     * @return array An array of all users.
     */
    public static function GetAllUsers(): array
    {
        return self::query("SELECT * FROM users");
    }

    public static function GetAllProducts(): array
    {
        self::query("SELECT * FROM item");
        return self::getAll();
    }

    /**
     * The insert method inserts a new record into a table.
     * @param string $table The name of the table.
     * @param array $data An associative array where the keys are the column names and the values are the corresponding values to be inserted.
     * @return int The number of affected rows.
     */
    public static function insert($table, $data): int
    {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = self::$dbconn->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $stmt->rowCount();
    }
    /**
     * The update method updates records in a table.
     * @param string $table The name of the table.
     * @param array $data An associative array where the keys are the column names and the values are the corresponding values to be updated.
     * @param string $condition The condition for the update (e.g., "id = 1").
     * @return int The number of affected rows.
     */
    public static function update($table, $data, $condition): int
    {
        $setPart = "";
        foreach ($data as $key => $value) {
            $setPart .= "$key = :$key, ";
        }
        $setPart = rtrim($setPart, ", ");
        $query = "UPDATE $table SET $setPart WHERE $condition";
        $stmt = self::$dbconn->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $stmt->rowCount();
    }
}