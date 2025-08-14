<?php
session_start();

// Ruta absoluta completa a la página de login
$login_page_url = "https://legaltech.com.gt/escuelasgc/index.php";

if (!isset($_SESSION['loggedin']) || !isset($_SESSION['last_activity'])) {
    header("Location: " . $login_page_url);
    exit;
}

if (time() - $_SESSION['last_activity'] > 300) {
    session_unset();
    session_destroy();
    header("Location: " . $login_page_url);
    exit;
}

$_SESSION['last_activity'] = time();
?>