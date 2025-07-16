<?php
session_start();

// Set session timeout to 5 minutes (300 seconds)
$session_timeout = 300;

// Check if user is logged in and session hasn't expired
if (isset($_SESSION['loggedin']) && isset($_SESSION['last_activity'])) {
    if (time() - $_SESSION['last_activity'] > $session_timeout) {
        // Session has expired
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    } else {        // Update last activity time
        $_SESSION['last_activity'] = time();
        // Redirect to sgc.php if session is valid
        header("Location: sgc.php");
        exit;
    }
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = "escuela2025"; // You should change this to a secure password
    
    if ($_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;        $_SESSION['last_activity'] = time();
        header("Location: sgc.php");
        exit;
    } else {
        $error_message = "Contraseña incorrecta";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BBL7T19QXK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-BBL7T19QXK');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema de Gestión de Calidad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f0f2f5 0%, #e8ecf0 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        /* Imagen de fondo que ocupa toda la pantalla */
        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://raw.githubusercontent.com/giovanni-1990/objetivos-y-politicas/refs/heads/main/Escuela%20Edit-02.png');
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.75;
            z-index: 1;
            pointer-events: none;
            filter: brightness(1.1) contrast(1.1);
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 2;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #0056b3;
            color: white;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #003d82;
        }
        .error {
            color: #dc3545;
            margin-top: 1rem;
            text-align: center;
        }

        /* Mejoras adicionales */
        h2 {
            color: #003366;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .background-image {
                background-size: cover;
                opacity: 0.35;
            }
            
            .login-container {
                max-width: 350px;
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .background-image {
                background-size: cover;
                opacity: 0.30;
            }
        }
    </style>
</head>
<body>
    <!-- Imagen de fondo -->
    <div class="background-image"></div>
    
    <div class="login-container">
        <h2 style="text-align: center;">Escuela de Estudios Judiciales</h2>
        <h3 style="text-align: center; margin-top: 0; margin-bottom: 1.5rem; color: #003366;">Sistema de Gestión de Calidad</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <?php if (isset($error_message)): ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
