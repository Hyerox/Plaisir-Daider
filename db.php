<?php
class Database {
    private static $host = 'mysql-server'; // ✅ important
    private static $dbname = 'plaisirdaider';
    private static $username = 'root';
    private static $password = 'root'; // ou le vrai mot de passe

    public static function getConnection() {
        try {
            $dsn = 'mysql:host=' . self::$host . ';dbname=' . self::$dbname . ';charset=utf8mb4';
            $pdo = new PDO($dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}
