<?php
require_once dirname(__DIR__) . '/config/config.php';
session_start();
require_once BASE_PATH . '/models/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $userModel = new User();
    $user = $userModel->findByEmail($email);

    if ($user && password_verify($password, $user['password'])) {
        // Connexion réussie
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        header('Location: ' . BASE_URL . 'index.php');
        exit;
    } else {
        // Erreur
        $error = 'Email ou mot de passe incorrect.';
        header('Location: ' . BASE_URL . 'views/login.php?error=' . urlencode($error));
        exit;
    }
} else {
    // Rediriger si accès direct sans POST
    header('Location: ' . BASE_URL . 'views/login.php');
    exit;
}
