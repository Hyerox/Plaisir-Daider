<?php
session_start();

// Destroy all session data
$_SESSION = array();
session_destroy();

// Fix: Use absolute path from project root
header('Location: ../views/login.php');
exit;
