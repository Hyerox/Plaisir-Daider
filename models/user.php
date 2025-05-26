<?php
require_once __DIR__ . '/../db.php';


class User {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function findByEmail($email) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Debug
            if (!$user) {
                error_log("Aucun utilisateur trouvé pour l'email: " . $email);
            }
            return $user;
        } catch (PDOException $e) {
            error_log("Erreur DB dans findByEmail: " . $e->getMessage());
            return false;
        }
    }

    public function findById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
