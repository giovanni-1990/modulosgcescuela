<?php
require_once '../session_check.php';
// Evitar caché del navegador
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCUELA DE ESTUDIOS JUDICIALES - SISTEMA DE GESTIÓN DE CALIDAD</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .floating-words {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none;
            z-index: 0;
        }
        .floating-word {
            position: absolute;
            font-size: 1.2rem;
            font-weight: 600;
            color: #00e6ff;
            opacity: 0.18;
            white-space: nowrap;
            text-shadow: 0 0 12px #00e6ff, 0 0 24px #fff;
            animation: floatWord 14s linear infinite;
            user-select: none;
        }
        @keyframes floatWord {
            0% { transform: translateY(0) scale(1) rotate(-2deg); opacity: 0.18; }
            10% { opacity: 0.32; }
            50% { transform: translateY(-40px) scale(1.08) rotate(2deg); opacity: 0.22; }
            90% { opacity: 0.32; }
            100% { transform: translateY(0) scale(1) rotate(-2deg); opacity: 0.18; }
        }
        :root {
            --azul-neon: #00e6ff;
            --azul-profundo: #0a1931;
            --blanco: #fff;
        }
        body {
            background: var(--azul-profundo);
            margin: 0;
            font-family: 'Poppins', 'Segoe UI', 'Roboto', Arial, sans-serif;
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
        }
        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            pointer-events: none;
        }
        header, main, footer {
            position: relative;
            z-index: 1;
        }
        header {
            background: transparent;
            color: var(--blanco);
            text-align: center;
            padding: 2rem 1rem 1rem 1rem;
        }
        .logo {
            max-width: 120px;
            margin-bottom: 1rem;
        }
        .titulo-principal {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 0.5rem 0 0.2rem 0;
            letter-spacing: 1px;
            color: var(--blanco);
            text-shadow: 0 0 3px var(--azul-neon), 0 2px 4px var(--azul-profundo);
        }
        .subtitulo {
            font-size: 1.2rem;
            font-weight: 500;
            margin: 0 0 1.2rem 0;
            letter-spacing: 1px;
            color: var(--blanco);
            text-shadow: 0 0 2px var(--azul-neon);
        }
        .catalogo-titulo {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--azul-profundo);
            background: var(--blanco);
            display: inline-block;
            padding: 0.5rem 2rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px var(--azul-neon), 0 2px 4px rgba(0,0,0,0.04);
        }
        main {
            background: var(--blanco);
            max-width: 900px;
            margin: 2rem auto;
            border-radius: 12px;
            box-shadow: 0 0 12px 2px #fff, 0 0 8px 2px var(--azul-neon), 0 4px 16px rgba(0,0,0,0.08);
            padding: 2rem 1.5rem;
        }
        .buscador-container input {
            border: 2px solid var(--azul-neon);
            border-radius: 6px;
            padding: 0.5rem 1rem;
            width: 100%;
            font-size: 1rem;
            margin-bottom: 1.5rem;
            background: var(--blanco);
            color: var(--azul-profundo);
            box-shadow: 0 0 3px var(--azul-neon) inset;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
        }
        th {
            background: var(--azul-profundo);
            color: var(--blanco);
            text-shadow: 0 0 4px var(--azul-neon);
        }
        tr:nth-child(even), tr:nth-child(odd) {
            background: var(--blanco);
        }
        footer {
            text-align: center;
            color: var(--blanco);
            background: transparent;
            padding: 1rem 0;
            margin-top: 2rem;
            text-shadow: 0 0 2px var(--azul-neon);
        }
    </style>
</head>
<body>


    <!-- Animated floating particles -->
    <div id="particles-bg"></div>


    <header>
        <img src="https://legaltech.com.gt/themeoj/img/logoBlanco.png" alt="Logo Organismo Judicial" class="logo">
        <div class="titulo-principal">ESCUELA DE ESTUDIOS JUDICIALES</div>
        <div class="subtitulo">SISTEMA DE GESTIÓN DE CALIDAD</div>
        <div class="catalogo-titulo">CATÁLOGO DE DOCUMENTOS</div>
    </header>

    <main>
        <div class="buscador-container">
            <input type="text" id="buscador" placeholder="Buscar por código o nombre del documento..." autofocus>
        </div>

        <div class="tabla-container">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre del Documento</th>
                        <th>Versión</th>
                        <th>Última Revisión</th>
                        <th>Descargar</th>
                    </tr>
                </thead>
                <tbody id="tabla-cuerpo">
                    <!-- El contenido se generará con JavaScript -->
                </tbody>
            </table>
        </div>
    </main>



    <footer>
        <p>Organismo Judicial de Guatemala, C.A.</p>
    </footer>

    <!-- 
      CORREGIDO: El orden es crucial. 
      Primero cargamos los datos y LUEGO el script que los usa. 
    -->


                        <!-- Floating particles background effect -->
                        <style>
                            #particles-bg {
                                position: fixed;
                                top: 0; left: 0; width: 100vw; height: 100vh;
                                z-index: 0;
                                pointer-events: none;
                                overflow: hidden;
                            }
                            .particle {
                                position: absolute;
                                border-radius: 50%;
                                background: rgba(255,255,255,0.13);
                                box-shadow: 0 0 8px 2px #fff8;
                                will-change: transform, opacity;
                                animation: floatParticle linear infinite;
                            }
                            @keyframes floatParticle {
                                0% { transform: translateY(0) scale(1) translateX(0); opacity: 0.18; }
                                10% { opacity: 0.32; }
                                50% { opacity: 0.22; }
                                100% { transform: translateY(-120vh) scale(1.1) translateX(40px); opacity: 0; }
                            }
                        </style>
                        <script>
                            // Floating particles effect
                            const particlesBg = document.getElementById('particles-bg');
                            function randomBetween(a, b) { return a + Math.random() * (b - a); }
                            for (let i = 0; i < 32; i++) {
                                const p = document.createElement('div');
                                p.className = 'particle';
                                const size = randomBetween(8, 32);
                                p.style.width = p.style.height = size + 'px';
                                p.style.left = randomBetween(0, 100) + 'vw';
                                p.style.bottom = randomBetween(-10, 10) + 'vh';
                                p.style.animationDuration = randomBetween(12, 28) + 's';
                                p.style.animationDelay = randomBetween(0, 16) + 's';
                                p.style.background = 'rgba(255,255,255,' + randomBetween(0.10,0.22) + ')';
                                particlesBg.appendChild(p);
                            }
                        </script>

        <script src="js/datos.js"></script>
        <script src="js/catalogo.js"></script>

</body>
</html>