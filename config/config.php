<?php
// config.php

// Chemin absolu vers la racine du site
define('BASE_PATH', __DIR__);

// URL dynamique en fonction de l'environnement
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$baseDir = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)); // ex: /plaisirdaider si nécessaire
define('BASE_URL', $protocol . '://' . $host . '/'); // ou avec $baseDir si sous-dossier
?>
