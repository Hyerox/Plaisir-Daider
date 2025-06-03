<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once BASE_PATH . '/models/Contact.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    
    if ($id && Contact::delete($id)) {
        header('Location: ' . BASE_URL . 'views/requete.php?delete_success=1');
    } else {
        header('Location: ' . BASE_URL . 'views/requete.php?delete_error=1');
    }
    exit;
}