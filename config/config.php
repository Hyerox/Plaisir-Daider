<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isProduction = isset($_SERVER['RENDER']) || strpos($_SERVER['HTTP_HOST'], 'onrender.com') !== false;

$baseUrl = $isProduction
    ? 'https://plaisir-daider.onrender.com'
    : 'http://localhost:8080/PlaisirDaider'; 

define('BASE_URL', rtrim($baseUrl, '/') . '/');
define('BASE_PATH', dirname(__DIR__));
