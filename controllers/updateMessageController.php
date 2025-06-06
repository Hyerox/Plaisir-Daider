<?php
ob_start();
require_once dirname(__DIR__) . '/config/config.php';
require_once BASE_PATH . '/models/contact.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $nom = htmlspecialchars($_POST['nom'] ?? '', ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_POST['prenom'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars($_POST['telephone'] ?? '', ENT_QUOTES, 'UTF-8');
    $message = trim($_POST['message'] ?? '');

    if ($id && Contact::update($id, $nom, $prenom, $email, $telephone, $message)) {
        header('Location: ' . BASE_URL . 'views/requete.php?update_success=1');
    } else {
        header('Location: ' . BASE_URL . 'views/requete.php?update_error=1');
    }
    ob_end_flush();
    exit;
}