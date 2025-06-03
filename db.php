<?php
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $envFile = __DIR__ . '/.env';
        if (!file_exists($envFile)) {
            throw new Exception('Le fichier .env est manquant');
        }

        $this->loadEnvFile($envFile);
        $this->validateEnvVariables();
        $this->connect();
    }

    private function loadEnvFile($envFile) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (empty($line) || strpos($line, '#') === 0 || strpos($line, '=') === false) {
                continue;
            }
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }

    private function validateEnvVariables() {
        $required = ['HOST', 'DBNAME', 'USERNAME', 'PASSWORD'];
        foreach ($required as $var) {
            if (empty($_ENV[$var])) {
                throw new Exception("Variable d'environnement '$var' manquante");
            }
        }
    }

    private function connect() {
        try {
            $dsn = sprintf(
                "mysql:host=%s;dbname=%s;charset=utf8mb4",
                $_ENV['HOST'],
                $_ENV['DBNAME']
            );
            
            $this->pdo = new PDO($dsn, $_ENV['USERNAME'], $_ENV['PASSWORD'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
        } catch (PDOException $e) {
            error_log("Erreur de connexion BDD : " . $e->getMessage());
            throw new Exception('Erreur de connexion à la base de données');
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->pdo;
    }
    
    public static function getConnection() {
        return self::getInstance();
    }
    
}


