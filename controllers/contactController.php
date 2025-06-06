<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once BASE_PATH . '/models/contact.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $message = trim($_POST['message']);

    if (Contact::ajouter($nom, $prenom, $email, $telephone, $message)) {
        header('Location: ' . BASE_URL . 'views/contact.php?success=1');
        exit;
    } else {
        header('Location: ' . BASE_URL . 'views/contact.php?error=1');
        exit;
    }
}
