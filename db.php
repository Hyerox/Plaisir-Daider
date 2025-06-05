<?php
class Database {
    private static $instance = null;
    private $pdo;

    // Déclaration des propriétés pour éviter les erreurs avec PHP 8.2+
    private $HOST;
    private $DBNAME;
    private $USERNAME;
    private $PASSWORD;

    private function __construct() {
        $envFile = __DIR__ . '/.env';

        // Si le fichier .env existe (en local), on le charge
        if (file_exists($envFile)) {
            $this->loadEnvFile($envFile);
            $this->HOST     = $_ENV['HOST']     ?? null;
            $this->DBNAME   = $_ENV['DBNAME']   ?? null;
            $this->USERNAME = $_ENV['USERNAME'] ?? null;
            $this->PASSWORD = $_ENV['PASSWORD'] ?? null;
        } else {
            // Sinon, on suppose qu'on est sur Render et on utilise getenv()
            $this->HOST     = getenv('HOST');
            $this->DBNAME   = getenv('DBNAME');
            $this->USERNAME = getenv('USERNAME');
            $this->PASSWORD = getenv('PASSWORD');
        }

        $this->validateEnvVariables();
        $this->connect();
    }

    private function loadEnvFile($envFile) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (empty($line) || strpos($line, '#') === 0 || strpos($line, '=') === false) continue;
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }

    private function validateEnvVariables() {
        if (!$this->HOST || !$this->DBNAME || !$this->USERNAME) {
            throw new Exception("Une ou plusieurs variables d’environnement sont manquantes.");
        }
    }

    private function connect() {
        try {
            $dsn = "mysql:host={$this->HOST};dbname={$this->DBNAME};charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->USERNAME, $this->PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Erreur de connexion à la base de données");
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getConnection() {
        return self::getInstance()->pdo;
    }
}
