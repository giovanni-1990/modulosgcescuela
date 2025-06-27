<?php
require_once 'session_check.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ... tu head se mantiene igual ... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela de Estudios Judiciales - SGC</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- ... otros scripts y links ... -->
</head>
<body>
    <!-- 1. EL MENÚ Y EL HEADER SE QUEDAN -->
    <button id="mobile-nav-toggle" aria-label="Abrir menú de navegación" aria-expanded="false">☰</button>

    <nav id="main-nav">
        <div class="sidebar-logo-container">
            <img src="https://raw.githubusercontent.com/djsalazar/aa/b74e56ed5e3c0105afd0613626877ac3e2f56563/logo%20-%20Blanco.png" alt="Escuela Estudios Judiciales Logo">
        </div>
        <!-- MODIFICACIÓN IMPORTANTE EN EL MENÚ -->
        <ul>
            <li><a href="#escuela" data-page="escuela" class="active">Escuela de Estudios Judiciales</a></li>
            <li><a href="#sgc" data-page="sgc">Norma ISO 9001:2015</a></li>
            <li><a href="#roles" data-page="roles">Comité de Calidad</a></li>
            <li><a href="#politica" data-page="politica">Política de Calidad</a></li>
            <li><a href="#objetivos" data-page="objetivos">Objetivos de Calidad</a></li>
            <li><a href="#procesos" data-page="procesos">Procesos Misionales y de Apoyo</a></li>
            <li><a href="#beneficios" data-page="beneficios">Beneficios del SGC</a></li>
            <li><a href="#eej-sgc" data-page="eej-sgc">ESEJ en el SGC</a></li>
            <li><a href="#riaej" data-page="riaej">RIAEJ</a></li>
            <li><a href="#recursos" data-page="recursos">Recursos</a></li>
            <li><a href="#red-docente" data-page="red-docente" style="color: var(--accent-gold);">Red Docente</a></li>
            <li><a href="#directorio-completo" data-page="directorio-completo" style="color: var(--accent-gold);">Directorio Completo</a></li>
            <li>
                <form action="logout.php" method="post">
                    <button type="submit" class="header-logout-btn">↪ Cerrar</button>
                </form>
            </li>
        </ul>
    </nav>

    <header>
        <!-- ... tu header se mantiene igual ... -->
    </header>

    <!-- 2. EL CONTENEDOR DE CONTENIDO PRINCIPAL (AHORA VACÍO) -->
    <main id="content-area">
        <!-- El contenido se cargará aquí con JavaScript -->
    </main>

    <!-- 3. EL FOOTER SE QUEDA -->
    <footer>
        <!-- ... tu footer se mantiene igual ... -->
    </footer>

    <!-- 4. LOS ELEMENTOS FIJOS Y MODALES SE QUEDAN -->
    <div class="version-footer">...</div>
    <div id="viewCounter">...</div>
    <div id="politicaImageModal" class="image-modal">...</div>
    <div id="objetivosImageModal" class="image-modal">...</div>
    <div id="fichaProcesosModal" class="image-modal">...</div>
    <div id="tour-overlay">...</div>
    <!-- ... y todos los demás modales ... -->

    <!-- 5. LA ETIQUETA SCRIPT SE QUEDA -->
    <script src="js/script.js"></script>

</body>
</html>