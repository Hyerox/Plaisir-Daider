<?php
require_once '../models/contact.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (Contact::ajouter($nom, $prenom, $email, $telephone, $message)) {
        header("Location: ../views/contact.php?success=1");
        exit;
    } else {
        header("Location: ../views/contact.php?error=1");
        exit;
    }
}
