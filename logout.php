<?php
session_start();
// Eliminar todas las variables de sesión
	session_unset();
// Destruir la sesión
	session_destroy();
// Borrar la cookie de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// Evitar caché
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: 0");
header("Pragma: no-cache");
// Redirigir al login
header("Location: index.php");
exit;
?>
