<?php
require_once dirname(__FILE__) . "/../config/config.php";

$_SESSION = array();
session_destroy();


header('Location: ' . BASE_URL . '/views/login.php');
exit;
