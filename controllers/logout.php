<?php
require_once dirname(__FILE__) . "/../config/config.php";

// Destroy all session data
$_SESSION = array();
session_destroy();

// Fix: Use absolute path from project root
header('Location: ' . BASE_URL . '/views/login.php');
exit;
