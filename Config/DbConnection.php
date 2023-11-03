<?php
class Database {
    private static $pdo;

    private function __construct() {
        // Replace with your database credentials
        $host = "localhost";
        $dbname = "";
        $username = "root";
        $password = "";

        try {
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) { 
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$pdo) {
            new self();
        }

        return self::$pdo;
    }
}
