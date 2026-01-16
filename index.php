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

        /* Botón flotante de Socialización ISO 9001 */
        #boton-socializacion-iso {
            position: fixed;
            right: 32px;
            bottom: 40px;
            z-index: 1000;
            background: linear-gradient(135deg, #d4af37 0%, #f4cf5a 100%);
            color: #1a1a2e;
            padding: 14px 24px;
            border-radius: 30px;
            border: 3px solid #0056b3;
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.45);
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        #boton-socializacion-iso:hover {
            background: linear-gradient(135deg, #f4cf5a 0%, #d4af37 100%);
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 8px 28px rgba(212, 175, 55, 0.6), 0 0 0 2px #0056b3;
        }

        #boton-socializacion-iso .iso-icon {
            font-size: 1.5rem;
            animation: pulse-icon 2s ease-in-out infinite;
        }

        #boton-socializacion-iso .iso-text {
            font-size: 0.95rem;
            letter-spacing: 0.3px;
        }

        @keyframes pulse-icon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }

        /* Modal de Socialización ISO */
        .modal-overlay-iso {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            backdrop-filter: blur(5px);
        }

        .modal-content-iso {
            background: #fff;
            border-radius: 16px;
            max-width: 550px;
            width: 100%;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            animation: slideIn 0.3s ease-out;
            position: relative;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .modal-header-iso {
            background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
            color: white;
            padding: 24px 28px;
            text-align: center;
            border-bottom: 4px solid #d4af37;
        }

        .modal-header-iso h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .modal-body-iso {
            padding: 32px 28px;
            text-align: center;
        }

        .modal-body-iso p {
            margin: 0 0 12px 0;
            font-size: 1.1rem;
            color: #1a1a2e;
            line-height: 1.6;
        }

        .modal-body-iso p strong {
            color: #0056b3;
            font-weight: 700;
        }

        .modal-description-iso {
            font-size: 1rem;
            color: #4a4a5e;
            margin-top: 16px;
            padding: 16px;
            background: #f8fafb;
            border-radius: 8px;
            border-left: 4px solid #d4af37;
        }

        .modal-action-iso {
            margin-top: 28px;
        }

        .btn-acceder-socializacion {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
            color: white;
            padding: 14px 32px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 86, 179, 0.4);
        }

        .btn-acceder-socializacion:hover {
            background: linear-gradient(135deg, #003d82 0%, #0056b3 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 86, 179, 0.6);
        }

        .btn-acceder-socializacion .arrow-icon {
            font-size: 1.3rem;
            transition: transform 0.3s ease;
        }

        .btn-acceder-socializacion:hover .arrow-icon {
            transform: translateX(5px);
        }

        .modal-close-iso {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            font-size: 2rem;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 10;
            line-height: 1;
            padding: 0;
        }

        .modal-close-iso:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        /* Responsive para el botón flotante y modal */
        @media (max-width: 768px) {
            #boton-socializacion-iso {
                right: 16px;
                bottom: 20px;
                padding: 12px 20px;
                font-size: 0.9rem;
            }
            
            #boton-socializacion-iso .iso-icon {
                font-size: 1.2rem;
            }
            
            #boton-socializacion-iso .iso-text {
                font-size: 0.85rem;
            }
            
            .modal-content-iso {
                margin: 0 16px;
            }
            
            .modal-header-iso {
                padding: 20px;
            }
            
            .modal-header-iso h3 {
                font-size: 1.25rem;
            }
            
            .modal-body-iso {
                padding: 24px 20px;
            }
            
            .modal-body-iso p {
                font-size: 1rem;
            }
            
            .btn-acceder-socializacion {
                padding: 12px 24px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Imagen de fondo -->
    <div class="background-image"></div>

    <!-- Botón flotante de socialización ISO 9001:2015 -->
    <a href="#" id="boton-socializacion-iso" title="Información de Socialización">
        <span class="iso-icon">📋</span>
        <span class="iso-text">Socialización ISO 9001</span>
    </a>

    <!-- Modal de información de socialización -->
    <div id="modal-socializacion-iso" class="modal-overlay-iso" style="display: none;">
        <div class="modal-content-iso">
            <button class="modal-close-iso" id="close-modal-iso">&times;</button>
            <div class="modal-header-iso">
                <h3>📋 Socialización del Sistema de Gestión de Calidad</h3>
            </div>
            <div class="modal-body-iso">
                <p><strong>Escuela de Estudios Judiciales</strong></p>
                <p><strong>Programa de Formación Judicial y Administrativa</strong></p>
                <p class="modal-description-iso">
                    Procesos Misionales y de Apoyo conforme a la Norma NTC ISO 9001:2015
                </p>
                <div class="modal-action-iso">
                    <a href="https://clases.legaltech.com.gt/gio/eej-2026/pfjya_iso/" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="btn-acceder-socializacion">
                        Acceder a la Socialización
                        <span class="arrow-icon">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
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

    <script>
        // Script para el modal de socialización ISO
        document.addEventListener('DOMContentLoaded', function() {
            var btnSocializacion = document.getElementById('boton-socializacion-iso');
            var modalSocializacion = document.getElementById('modal-socializacion-iso');
            var closeModalIso = document.getElementById('close-modal-iso');

            if (btnSocializacion && modalSocializacion) {
                // Abrir modal al hacer clic en el botón
                btnSocializacion.addEventListener('click', function(e) {
                    e.preventDefault();
                    modalSocializacion.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });

                // Cerrar modal con el botón X
                closeModalIso.addEventListener('click', function() {
                    modalSocializacion.style.display = 'none';
                    document.body.style.overflow = 'auto';
                });

                // Cerrar modal al hacer clic fuera del contenido
                modalSocializacion.addEventListener('click', function(e) {
                    if (e.target === modalSocializacion) {
                        modalSocializacion.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });

                // Cerrar modal con la tecla Escape
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && modalSocializacion.style.display === 'flex') {
                        modalSocializacion.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });
    </script>
</body>
</html>
