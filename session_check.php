<?php
session_start();
if (!isset($_SESSION['loggedin']) || !isset($_SESSION['last_activity'])) {
    header("Location: index.php");
    exit;
}

if (time() - $_SESSION['last_activity'] > 300) { // 300 seconds = 5 minutes
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}

$_SESSION['last_activity'] = time();
?>
