<?php
require_once __DIR__ . '/../db.php';


class Contact {
    public static function ajouter($nom, $prenom, $email, $telephone, $message) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("INSERT INTO contact (nom, prenom, email, telephone, message) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nom, $prenom, $email, $telephone, $message]);
    }

    public static function getAll() {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM contact ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("DELETE FROM contact WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function update($id, $nom, $prenom, $email, $telephone, $message) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("UPDATE contact SET nom = ?, prenom = ?, email = ?, telephone = ?, message = ? WHERE id = ?");
        return $stmt->execute([$nom, $prenom, $email, $telephone, $message, $id]);
    }
}
