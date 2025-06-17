<?php
require_once 'session_check.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela de Estudios Judiciales - SGC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <style>

        :root {
            /* Tema Claro (Predeterminado) */
            --bg-primary: #FFFFFF;
            --bg-secondary: #F8F9FA;
            --text-primary: #212529; /* Bootstrap dark text */
            --text-secondary: #495057; /* Bootstrap secondary text */
            --header-bg: #031b4e; /* Dark Blue */
            --header-text: #FFFFFF;
            --accent-gold: #E6C260; /* Soft Gold */
            --accent-blue-main: #003366; /* For primary blue elements */
            --accent-blue-darker: #002244;
            --accent-blue-lighter: #004C99;
            --card-bg: #FFFFFF;
            --card-border: #dee2e6; /* Bootstrap card border */
            --shadow-color: rgba(0, 51, 102, 0.1);
            --button-primary-bg: var(--accent-gold);
            --button-primary-text: var(--accent-blue-darker);
            --button-primary-border: var(--accent-blue-darker);
            --modal-content-bg: #FFFFFF;
            --risk-extreme-bg: #ffebee;
            --risk-extreme-border: #D32F2F;
            --risk-high-bg: #fffde7;
            --risk-high-border: #AF8F1C;
            --accordion-header-bg: var(--accent-blue-lighter);
            --accordion-header-text: #FFFFFF;
            --accordion-content-bg: #FFFFFF;
            --highlight-note-bg: var(--accent-gold);
            --highlight-note-text: var(--accent-blue-darker);
            --highlight-note-border: var(--accent-blue-main);
            --link-color: var(--accent-blue-main);
            --foda-button-bg: var(--bg-secondary);
            --foda-button-text: var(--accent-blue-main);
            --foda-button-border: #ced4da;
            --foda-button-active-bg: var(--accent-blue-main);
            --foda-button-active-text: #FFFFFF;
            --counter-bg: var(--accent-blue-darker);
            --counter-text: var(--header-text);
            --sidebar-width: 260px;
            --tour-popover-bg: var(--card-bg);
            --tour-popover-text: var(--text-primary);
            --tour-popover-border: var(--accent-blue-main);
            --tour-button-bg: var(--accent-blue-main);
            --tour-button-text: var(--header-text);
            --view-image-button-bg: var(--accent-blue-lighter);
            --view-image-button-text: var(--header-text);
            --view-image-button-hover-bg: var(--accent-blue-main);
        }

        body.dark-theme {
            --bg-primary: #121212;
            --bg-secondary: #1e1e1e;
            --text-primary: #f5f5f5;
            --text-secondary: #cccccc;
            --header-bg: #002244;
            --header-text: #f5f5f5;
            --accent-gold: #E6C260;
            --accent-blue-main: #58a6ff;
            --accent-blue-darker: #317ccc;
            --accent-blue-lighter: #79b8ff;
            --card-bg: #2a2a2a;
            --card-border: #444444;
            --shadow-color: rgba(0, 0, 0, 0.3);
            --button-primary-bg: var(--accent-gold);
            --button-primary-text: #121212;
            --button-primary-border: var(--accent-gold);
            --modal-content-bg: #2c2c2c;
            --risk-extreme-bg: #4a1e1e;
            --risk-extreme-border: #f48fb1;
            --risk-high-bg: #4a421e;
            --risk-high-border: #fff59d;
            --accordion-header-bg: #317ccc;
            --accordion-header-text: var(--header-text);
            --accordion-content-bg: #272727;
            --highlight-note-bg: #4a421e;
            --highlight-note-text: var(--accent-gold);
            --highlight-note-border: var(--accent-gold);
            --link-color: var(--accent-blue-lighter);
            --foda-button-bg: #333;
            --foda-button-text: var(--accent-blue-lighter);
            --foda-button-border: #555;
            --foda-button-active-bg: var(--accent-blue-lighter);
            --foda-button-active-text: #121212;
            --counter-bg: var(--header-bg);
            --counter-text: var(--text-primary);
            --tour-popover-bg: #2c2c2c;
            --tour-popover-text: #f5f5f5;
            --tour-popover-border: var(--accent-gold);
            --tour-button-bg: var(--accent-gold);
            --tour-button-text: #121212;
            --view-image-button-bg: var(--accent-blue-main);
            --view-image-button-text: var(--header-text);
            --view-image-button-hover-bg: var(--accent-blue-darker);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
            padding-bottom: 50px; /* MODIFICADO: Espacio para el pie de página fijo */
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        header {
            background: var(--header-bg);
            color: var(--header-text);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 999;
            box-shadow: 0 2px 10px var(--shadow-color);
            width: 100%;
            left: 0;
        }

        .header-container {
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }

        .header-titles {
            text-align: center;
            padding-left: calc(var(--sidebar-width) + 20px);
            padding-right: 205px; /* Space for right stack */
            box-sizing: border-box;
        }

        header h1 {
            font-size: clamp(2em, 4.5vw, 2.8em);
            margin-bottom: 5px;
            line-height: 1.2;
            color: var(--header-text);
            font-weight: 600;
        }
        header h2.sgc-subtitle {
            font-size: clamp(1.1em, 3vw, 1.6em);
            font-weight: normal;
            line-height: 1.3;
            color: var(--header-text);
        }
        header h2.sgc-subtitle strong {
            color: var(--accent-gold);
            font-weight: bold;
        }

        .header-right-stack {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .header-logout-btn {
            display: flex;
            align-items: center;
            background-color: #dc3545;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            margin: 0 10px;
            border: 1px solid #bd2130;
        }
        .header-logout-btn:hover {
            background-color: #c82333;
            color: white;
        }
        .header-logout-btn .logout-icon {
            margin-right: 8px;
            font-size: 1.1em;
        }

        #startTourBtn {
            background-color: var(--accent-gold);
            color: var(--accent-blue-darker);
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 0.9em;
        }
        body.dark-theme #startTourBtn {
            color: #121212;
        }
        #startTourBtn:hover {
            opacity: 0.9;
        }


        /* Toggle Switch CSS */
        .theme-switch-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .theme-switch {
            display: inline-block;
            height: 28px;
            position: relative;
            width: 50px;
        }
        .theme-switch input {
            display: none;
        }
        .slider {
            background-color: #ccc;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s;
            border-radius: 28px;
        }
        .slider:before {
            background-color: #fff;
            bottom: 3px;
            content: "";
            height: 22px;
            left: 3px;
            position: absolute;
            transition: .4s;
            width: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }
        input:checked + .slider {
            background-color: var(--accent-blue-main);
        }
        input:checked + .slider:before {
            transform: translateX(22px);
            content: "🌙";
        }
        input:not(:checked) + .slider:before {
            content: "☀️";
        }
        body.dark-theme .slider {
            background-color: #555;
        }
        body.dark-theme input:checked + .slider {
            background-color: var(--accent-gold);
        }
        body.dark-theme .slider:before {
            background-color: #333;
            color: var(--accent-gold);
        }
        body.dark-theme input:not(:checked) + .slider:before {
            color: var(--text-primary);
        }

        /* --- Estilos para Navegación Izquierda --- */
        nav#main-nav {
            position: fixed;
            left: 0;
            top: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background-color: var(--header-bg);
            padding: 20px 0;
            overflow-y: auto;
            z-index: 1001;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        nav#main-nav::-webkit-scrollbar {
            width: 8px;
        }
        nav#main-nav::-webkit-scrollbar-track {
            background: var(--accent-blue-darker);
        }
        nav#main-nav::-webkit-scrollbar-thumb {
            background: var(--accent-gold);
            border-radius: 4px;
        }
        nav#main-nav::-webkit-scrollbar-thumb:hover {
            background: #cda550;
        }

        .sidebar-logo-container {
            text-align: center;
            margin-bottom: 20px;
            padding: 0 15px;
        }
        .sidebar-logo-container img {
            max-width: 100%;
            height: auto;
            max-height: 120px;
        }

        nav#main-nav ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            padding: 0;
            margin:0;
        }

        nav#main-nav ul li {
            margin: 0;
        }

        nav#main-nav ul li a {
            color: var(--header-text);
            text-decoration: none;
            font-weight: 500;
            padding: 12px 20px;
            border-radius: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-left: 4px solid transparent;
            display: block;
            white-space: normal;
            line-height: 1.4;
        }

        nav#main-nav ul li a:hover,
        nav#main-nav ul li a.active {
            background-color: var(--accent-blue-darker);
            color: var(--accent-gold);
            border-left-color: var(--accent-gold);
        }
        /* --- FIN Estilos para Navegación Izquierda --- */

        main {
            padding-top: 1px; /* Avoid margin collapse with header */
            padding-left: var(--sidebar-width);
        }

        section {
            padding: 60px 20px;
        }
        section:nth-child(even) {
             background-color: var(--bg-secondary);
        }

        section h2 {
            text-align: center;
            font-size: 2.2em;
            color: var(--accent-blue-main);
            margin-bottom: 40px;
            position: relative;
        }

        section h2::after {
            content: '';
            display: block;
            width: 70px;
            height: 4px;
            background-color: var(--accent-gold);
            margin: 10px auto 0;
        }

        .section-title-wrapper {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        .section-title-wrapper h3 {
            font-size: 1.8em;
            color: var(--accent-blue-darker);
            border-left: 4px solid var(--accent-gold);
            padding-left: 15px;
            margin: 0;
        }
        .section-title-wrapper .directory-link-inline {
            margin-right: 20px;
            flex-shrink: 0;
        }

        h3.alcance-title {
            font-size: 2em !important;
            text-align: center;
            color: var(--accent-blue-main) !important;
            border-top: 2px solid var(--accent-gold);
            border-bottom: 2px solid var(--accent-gold);
            padding: 20px 0 !important;
            margin-top: 60px !important;
            margin-bottom: 40px !important;
            border-left: none !important;
            padding-left: 0 !important;
            background-color: var(--bg-secondary);
            border-radius: 4px;
        }

        .sgc-subsection {
            padding: 35px 25px;
            margin-top: 30px;
            margin-bottom: 40px;
            border: 1px solid var(--accent-blue-lighter);
            border-radius: 10px;
            background-color: var(--card-bg);
            box-shadow: 0 3px 10px var(--shadow-color);
        }
        .sgc-subsection h3 {
            font-size: 1.7em;
            color: var(--accent-blue-main);
            border-left: 5px solid var(--accent-gold);
            padding-left: 15px;
            margin-top: 0;
            margin-bottom: 25px;
        }
        .sgc-subsection p, .sgc-subsection .card-container {
            margin-top: 15px;
             font-size: 1.05em; /* Aumentado de 1em a 1.2em */
            text-align: justify;
             color: var(--text-primary);
             line-height: 1.6;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 8px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 10px var(--shadow-color);
            padding: 25px;
            flex: 1 1 300px; /* Grow, shrink, basis */
            min-width: 280px; /* Ensures cards don't get too small */
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease, border-color 0.3s ease;
            color: var(--text-primary);
        }
        .card p {
            text-align: justify;
            color: var(--text-secondary);
        }
        .card.clickable-card {
            cursor: pointer;
        }
        .card.clickable-card:hover {
            border-color: var(--accent-gold);
            box-shadow: 0 6px 18px var(--shadow-color);
        }
        .risk-details-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 18px;
            background-color: var(--accent-blue-lighter);
            color: var(--header-text);
            border-radius: 5px;
            font-size: 0.95em;
            font-style: normal;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s, color 0.3s;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            cursor: pointer; /* Ensure it's clickable */
        }
        .risk-details-button:hover {
            background-color: var(--accent-blue-darker);
            transform: translateY(-2px);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-color);
        }

        .card h4 {
            color: var(--accent-blue-main);
            font-size: 1.25em;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .card h4 .benefit-icon, .card h4 .card-icon {
            margin-right: 10px;
            font-size: 1.5em;
            color: var(--accent-blue-main);
        }

        .process-list-accordion-content {
            list-style: disc;
            padding-left: 20px;
            margin:0;
        }
        .process-list-accordion-content li {
            padding: 8px 0;
            border-bottom: 1px dashed var(--card-border);
            color: var(--text-secondary);
            background-color: transparent;
            border-left: none;
            box-shadow: none;
        }
        .process-list-accordion-content li:last-child {
            border-bottom: none;
        }
        .process-list-accordion-content li strong {
             color: var(--text-primary);
        }


        .directory-link-inline {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 0.9em;
            font-weight: bold;
            background-color: var(--accent-blue-lighter);
            color: var(--header-text);
            border: 1px solid var(--accent-blue-main);
            transition: background-color 0.3s, color 0.3s;
        }
        .directory-link-inline img {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            filter: brightness(0) invert(1);
        }
        .directory-link-inline:hover {
            background-color: var(--accent-blue-main);
            color: var(--accent-gold);
        }

        .action-button {
            display: inline-block;
            background-color: var(--button-primary-bg);
            color: var(--button-primary-text);
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s, border-color 0.3s ease;
            border: 1px solid var(--button-primary-border);
        }
        .action-button:hover {
            background-color: var(--accent-blue-darker);
            color: var(--accent-gold);
            border-color: var(--accent-gold);
            transform: translateY(-2px);
        }
        body.dark-theme .action-button:hover {
            background-color: var(--accent-gold);
            color: var(--accent-blue-darker);
            border-color: var(--accent-blue-darker);
        }

        #politica .container > p {
            font-size: 1.15em;
            line-height: 1.75;
            text-align: justify;
            margin-bottom: 1em;
            color: var(--text-primary);
        }

        #recursos p, #recursos ul, #eej-sgc .container > p {
            font-size: 1.05em;
            color: var(--text-primary);
        }
        #recursos ul {
            list-style-type: disc;
            padding-left: 20px;
            color: var(--text-secondary);
        }
         #recursos ul ul {
            list-style-type: circle;
            padding-left: 25px;
            margin-top: 5px;
        }
        #recursos ul li { margin-bottom: 0.5em; }


        .shared-folder-info {
            background-color: var(--bg-secondary);
            padding: 20px;
            border: 1px dashed var(--accent-blue-lighter);
            border-radius: 6px;
            margin-top: 20px;
        }
        .shared-folder-info h4 {
            color: var(--accent-blue-main);
            margin-bottom: 10px;
        }
        .shared-folder-info .folder-path {
            font-family: 'Courier New', Courier, monospace;
            background-color: var(--bg-primary);
            padding: 10px;
            border-radius: 4px;
            word-break: break-all;
            margin-bottom: 10px;
            color: var(--accent-blue-darker);
            
        }
        body.dark-theme .shared-folder-info .folder-path {
            background-color: #333;
            color: var(--text-primary);
        }

        .shared-folder-info small {
            color: var(--text-secondary);
            text-align: justify;
            display: block;
            margin-top: 10px;
        }
        body.dark-theme .shared-folder-info small {
            color: var(--text-primary);
        }

        .highlight-modification-note {
            background-color: var(--highlight-note-bg);
            color: var(--highlight-note-text);
            padding: 20px;
            margin: 30px 0;
            border-left: 5px solid var(--highlight-note-border);
            border-radius: 8px;
            font-size: 1.05em;
            line-height: 1.7;
        }
         .highlight-modification-note strong {
            display: block;
            font-size: 1.3em;
            margin-bottom: 10px;
            color: var(--highlight-note-text);
            font-weight: bold;
        }
        .highlight-modification-note p {
             color: var(--highlight-note-text);
             margin-bottom: 0.5em;
        }
         .highlight-modification-note p:last-child {
            margin-bottom: 0;
        }


        footer {
            background-color: var(--accent-blue-darker);
            color: #e9ecef;
            text-align: center;
            padding: 10px 0;
            margin-top: 40px;
            line-height: 1.4;
            margin-left: var(--sidebar-width); /* Añadido: alinea con la barra lateral */
            width: calc(100% - var(--sidebar-width)); /* Añadido: ajusta el ancho */
        }

        /* Ajuste para dispositivos móviles */
        @media (max-width: 768px) {
        footer {
        margin-left: 0;
        width: 100%;
        padding: 20px 10px;
        }
    }

        body.dark-theme footer {
            background-color: #001122;
            color: #adb5bd;
        }
        footer p {
            margin-bottom: 5px;
        }
        footer strong {
            color: var(--accent-gold);
        }
        footer a {
            color: var(--accent-gold);
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }

        .accordion-container {
            margin-top: 20px;
        }
        .accordion-item {
            margin-bottom: 10px;
            border: 1px solid var(--accent-blue-lighter);
            border-radius: 5px;
            overflow: hidden;
            background-color: var(--card-bg);
        }
        .accordion-header {
            background-color: var(--accordion-header-bg);
            color: var(--accordion-header-text);
            padding: 15px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }
        .accordion-header:hover {
            background-color: var(--accent-blue-main);
        }
        .accordion-header::after {
            content: '+';
            font-size: 1.5em;
            transition: transform 0.3s ease;
            color: var(--accent-gold);
        }
        .accordion-item.active .accordion-header::after {
            transform: rotate(45deg);
        }
        .accordion-content {
            padding: 15px;
            background-color: var(--accordion-content-bg);
            color: var(--text-primary);
            display: none;
        }
        .accordion-item.active .accordion-content {
            display: block;
        }
        .accordion-content p, .accordion-content ul {
            color: var(--text-primary);
        }
        .accordion-content .process-contact {
            color: var(--accent-gold);
            display: block;
            font-size: 0.95em;
            font-weight: 500;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
            padding-top: 30px;
        }
        .modal-content {
            background-color: var(--modal-content-bg);
            margin: 2% auto;
            padding: 30px;
            border: 1px solid var(--card-border);
            width: 85%;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 5px 15px var(--shadow-color);
            position: relative;
        }
        .modal-close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 20px;
        }
        .modal-close:hover,
        .modal-close:focus {
            color: var(--text-primary);
            text-decoration: none;
            cursor: pointer;
        }
        .modal h3 {
            color: var(--accent-blue-main);
            margin-top: 0;
            border-bottom: 2px solid var(--accent-gold);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .modal ul {
            list-style: none;
            padding: 0;
        }
        .modal ul li {
             color: var(--text-primary);
        }
        .modal ul li.risk-item {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            border-left: 5px solid;
        }
        .modal ul li.risk-item strong {
            display: block;
            font-size: 1.1em;
            margin-bottom: 5px;
        }
        .modal ul li.risk-item p {
            font-size: 0.95em;
            line-height: 1.5;
            color: var(--text-secondary);
        }
        .risk-item.extreme {
            border-left-color: var(--risk-extreme-border);
            background-color: var(--risk-extreme-bg);
        }
        .risk-item.extreme strong { color: var(--risk-extreme-border); }

        .risk-item.high {
            border-left-color: var(--risk-high-border);
            background-color: var(--risk-high-bg);
        }
        .risk-item.high strong { color: var(--risk-high-border); }

        /* ESTILOS PARA BOTÓN E IMAGEN MODAL */
        .view-image-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background-color: var(--view-image-button-bg);
            color: var(--view-image-button-text);
            border-radius: 5px;
            font-size: 0.95em;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin-bottom: 20px; /* Espacio debajo del botón */
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .view-image-button:hover {
            background-color: var(--view-image-button-hover-bg);
            transform: translateY(-2px);
        }
        .view-image-button svg {
            width: 20px;
            height: 20px;
            stroke: currentColor; /* El color del icono será el color del texto del botón */
        }

        .image-modal {
            display: none;
            position: fixed;
            z-index: 1002; /* Encima de otros modales si es necesario */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.85); /* Fondo más oscuro */
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .image-modal-content {
            background-color: var(--modal-content-bg);
            margin: auto; /* Centrado vertical y horizontal */
            padding: 15px;
            border: 1px solid var(--card-border);
            width: 90%;
            max-width: 900px; /* Ancho máximo para la imagen */
            max-height: 90vh; /* Alto máximo para la imagen */
            border-radius: 8px;
            box-shadow: 0 5px 15px var(--shadow-color);
            position: relative;
            display: flex; /* Para centrar la imagen si es más pequeña */
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        img.modal-image-display {
            max-width: 100%;
            max-height: calc(90vh - 70px); /* Restar padding y espacio para el botón de cierre */
            display: block;
            border-radius: 4px;
            object-fit: contain; /* Asegura que toda la imagen sea visible */
        }
        .image-modal-close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            font-weight: bold;
            z-index: 1003;
        }
        .image-modal-close:hover,
        .image-modal-close:focus {
            color: var(--text-primary);
            text-decoration: none;
            cursor: pointer;
        }
        /* FIN ESTILOS PARA BOTÓN E IMAGEN MODAL */

        /* ============== INICIO ESTILOS DEL CARRUSEL ============== */
        .carousel-container {
            position: relative;
            width: 100%; /* Ocupa todo el ancho del modal */
            margin: auto;
            overflow: hidden;
            border-radius: 15px; /* Hereda el borde del modal */
        }
        .carousel-slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-slide {
            min-width: 100%;
            box-sizing: border-box;
        }
        .carousel-slide img {
            width: 100%;
            display: block;
        }
        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 15px;
            font-size: 20px;
            z-index: 10;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }
        .carousel-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .carousel-button.prev {
            left: 10px;
        }
        .carousel-button.next {
            right: 10px;
        }
        .carousel-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }
        .dot {
            cursor: pointer;
            height: 12px;
            width: 12px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .dot.active, .dot:hover {
            background-color: white;
        }
        /* ============== FIN ESTILOS DEL CARRUSEL ============== */

        .foda-button-group {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .foda-button {
            padding: 10px 20px;
            font-size: 1em;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            background-color: var(--foda-button-bg);
            color: var(--foda-button-text);
            border: 1px solid var(--foda-button-border);
            transition: background-color 0.3s, color 0.3s;
            flex: 1 1 auto;
        }
        .foda-button:hover {
            opacity: 0.8;
        }
        .foda-button.active {
            background-color: var(--foda-button-active-bg);
            color: var(--foda-button-active-text);
            border-color: var(--foda-button-active-bg);
        }
        .foda-content-area .foda-category {
            padding: 15px;
            background-color: var(--bg-secondary);
            border-radius: 6px;
            border: 1px solid var(--card-border);
            display: none;
        }
         .foda-content-area .foda-category.active {
            display: block;
        }
        .foda-content-area .foda-category h4 {
            color: var(--accent-blue-main);
            border-bottom: 2px solid var(--accent-gold);
            padding-bottom: 8px;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.3em;
        }
        .foda-content-area .foda-category ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .foda-content-area .foda-category ul li {
            margin-bottom: 10px;
            font-size: 0.95em;
            line-height: 1.5;
            color: var(--text-secondary);
        }

        #viewCounter {
            position: fixed;
            bottom: 45px; /* MODIFICADO: Ajustado para estar sobre el nuevo footer */
            right: 15px;
            background-color: var(--counter-bg);
            color: var(--counter-text);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8em;
            z-index: 1000;
            box-shadow: 0 2px 5px var(--shadow-color);
        }

        /* --- Estilos para el Tour Interactivo --- */
        #tour-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 10000;
            display: none;
        }
        #tour-highlight-box {
            position: absolute;
            border: 3px dashed var(--accent-gold);
            border-radius: 5px;
            box-shadow: 0 0 0 9999px rgba(0,0,0,0.0);
            transition: box-shadow 0.3s ease-in-out, top 0.3s ease-in-out, left 0.3s ease-in-out, width 0.3s ease-in-out, height 0.3s ease-in-out;
            z-index: 10001;
            pointer-events: none;
            display: none;
        }
        #tour-highlight-box.active-highlight {
             box-shadow: 0 0 0 9999px rgba(0,0,0,0.7);
        }

        #tour-popover {
            position: absolute;
            background-color: var(--tour-popover-bg);
            color: var(--tour-popover-text);
            padding: 20px;
            border-radius: 8px;
            border: 1px solid var(--tour-popover-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            z-index: 10002;
            max-width: 320px;
            display: none;
            font-size: 0.95em;
            line-height: 1.5;
        }
        #tour-popover h4 {
            margin-top: 0;
            margin-bottom: 10px;
            color: var(--accent-blue-main);
            font-size: 1.2em;
        }
        body.dark-theme #tour-popover h4 {
            color: var(--accent-gold);
        }
        #tour-popover p {
            margin-bottom: 15px;
            color: var(--tour-popover-text);
        }
        .tour-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            border-top: 1px solid var(--card-border);
            padding-top: 15px;
        }
        .tour-navigation button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: var(--tour-button-bg);
            color: var(--tour-button-text);
            font-weight: bold;
            transition: opacity 0.2s;
        }
        .tour-navigation button:hover {
            opacity: 0.85;
        }
        .tour-navigation button#tour-prev[disabled] {
            opacity: 0.5;
            cursor: not-allowed;
        }
        /* --- FIN Estilos para el Tour Interactivo --- */

        /* --- Mobile Nav Toggle Button --- */
        #mobile-nav-toggle {
            display: none; /* Hidden by default, shown via JS/media query */
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1002;
            background: var(--header-bg);
            color: white;
            border: none;
            padding: 10px;
            font-size: 1.5em;
            border-radius: 5px;
            cursor: pointer;
        }

        /* --- INICIO: Estilos para el botón de descarga de Lineamientos SGC --- */
        .alcance-header-container {
            display: flex;
            flex-direction: column; 
            align-items: center; /* Esto centra todo por defecto (título y botón) */
            gap: 20px;
            margin-top: 60px;
            margin-bottom: 40px;
        }

        .alcance-header-container .alcance-title {
            flex-grow: 0; 
            margin: 0 !important; 
        }

        /* Container for the dropdown itself, positioned on the left */
        .sgc-lineamientos-dropdown {
            border: 1px solid var(--accent-blue-lighter);
            border-radius: 8px;
            background-color: var(--card-bg);
            box-shadow: 0 2px 5px var(--shadow-color);
            flex-shrink: 0;
            width: auto;
            max-width: 350px;
            min-width: 250px;
        }
        
        /* The clickable summary part, styled like a button */
        .sgc-lineamientos-summary {
            padding: 10px 25px; /* MODIFIED: Increased padding */
            font-size: 1.1em; /* MODIFIED: Increased font size */
            font-weight: bold;
            color: var(--header-text);
            background-color: var(--accent-blue-main);
            border-radius: 7px;
            cursor: pointer;
            list-style: none; /* Hide default marker */
            position: relative;
            outline: none;
            transition: background-color 0.2s, border-radius 0.2s;
        }
        
        .sgc-lineamientos-summary:hover {
             background-color: var(--accent-blue-darker);
        }
        
        .sgc-lineamientos-dropdown[open] > .sgc-lineamientos-summary {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        /* The content that appears on expand */
        .sgc-lineamientos-content, .Manual-lineamientos-content {
            padding: 10px;
            border-top: 1px solid var(--accent-blue-lighter);
            background-color: var(--accordion-content-bg);
        }
        
        .sgc-lineamientos-content p, .Manual-lineamientos-content p {
            margin-top: 0;
            margin-bottom: 15px;
            color: var(--text-secondary);
            line-height: 1.5;
        }
        
        .sgc-lineamientos-content strong, .Manual-lineamientos-content strong {
            color: var(--accent-blue-main);
        }
        
        /* The download link inside the dropdown */
        .sgc-lineamientos-content .download-link {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px 15px;
            background-color: var(--accent-gold);
            color: var(--button-primary-text);
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.2s, color 0.2s, border-color 0.2s;
            border: 1px solid var(--button-primary-border);
            box-sizing: border-box;
        }
        
        .sgc-lineamientos-content .download-link:hover {
            background-color: var(--accent-blue-darker);
            color: var(--accent-gold);
            border-color: var(--accent-gold);
        }
        
        /* The dropdown arrow icon */
        .sgc-lineamientos-summary::after {
            content: '▼';
            font-size: 12px;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.2s;
        }
        
        .sgc-lineamientos-dropdown[open] .sgc-lineamientos-summary::after {
            transform: translateY(-50%) rotate(180deg);
        }
        /* --- FIN: Estilos para el botón de descarga de Lineamientos SGC --- */


        /* --- Media Queries for Responsiveness --- */

        /* Tablet and Smaller Desktops (e.g., 769px - 992px) */
        @media (max-width: 992px) {
            nav#main-nav {
                width: 220px;
                --sidebar-width: 220px;
            }

            .header-titles {
                 padding-left: calc(var(--sidebar-width) + 15px); /* Adjust for smaller sidebar */
                 padding-right: 190px; /* Adjust for right stack */
            }
            .header-right-stack {
                right: 15px;
            }

            header h1 { font-size: clamp(1.7em, 3.8vw, 2.4em); }
            header h2.sgc-subtitle { font-size: clamp(1em, 2.7vw, 1.3em); }
        }

        /* Mobile (e.g., up to 768px) */
        @media (max-width: 768px) {
             body {
                padding-left: 0; /* Remove body padding for full width content */
            }
            main {
                padding-left: 0; /* Main content takes full width */
            }
            nav#main-nav {
                width: 200px; /* Sidebar width when open on mobile */
                transform: translateX(-100%); /* Hidden off-screen */
                transition: transform 0.3s ease-in-out;
            }
            nav#main-nav.mobile-nav-open {
                transform: translateX(0); /* Slide in when open */
            }

            #mobile-nav-toggle {
                display: block; /* Show hamburger button */
            }

            header {
                padding: 10px 0;
            }
            .header-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 8px;
                position: static; /* No longer relative for absolute positioning of children */
                padding: 0 15px;
            }
            .header-right-stack {
                position: static; /* Becomes part of the flex flow */
                transform: none;
                order: -1; /* Moves to the top in the flex column */
                align-self: flex-end; /* Aligns to the right */
                gap: 10px;
                margin-bottom: 5px;
            }
             #startTourBtn { font-size: 0.8em; padding: 5px 10px; }

            .header-titles {
                order: 1; /* Comes after the right stack */
                width: 100%;
                text-align: center;
                padding: 0 10px; /* Remove sidebar-dependent padding */
            }
            header h1 {
                font-size: clamp(1.5em, 5.5vw, 2em);
                margin-bottom: 3px;
            }
            header h2.sgc-subtitle {
                font-size: clamp(0.9em, 3.8vw, 1.2em);
            }

            section h2 {
                font-size: 1.8em;
            }
            .section-title-wrapper h3, h3.alcance-title {
                font-size: 1.5em !important;
            }
            .sgc-subsection h3 {
                font-size: 1.4em;
            }
            .modal-content {
                width: 95%;
                padding: 20px;
                margin: 5% auto;
            }
            .image-modal-content {
                width: 95%;
                padding: 10px;
            }
            img.modal-image-display {
                 max-height: calc(90vh - 50px);
            }
            .foda-button-group {
                flex-direction: column; /* Stack FODA buttons */
            }
            .section-title-wrapper {
                flex-direction: column; /* Stack title and link */
                align-items: flex-start;
            }
            .section-title-wrapper .directory-link-inline {
                margin-right: 0;
                margin-bottom: 10px;
            }
            #tour-popover {
                max-width: 90vw; /* Tour popover takes more width on small screens */
            }

            /* --- INICIO: Media Query para el botón de descarga SGC --- */
            .alcance-header-container {
                align-items: stretch; /* Make items full width */
                gap: 15px;
            }
            
            .sgc-lineamientos-dropdown {
                width: 100%; /* MODIFIED: Full width on mobile to match stretch alignment */
                min-width: unset;
                max-width: 100%;
            }

            .lineamientos-buttons-container {
                flex-direction: column;
            }
            /* --- FIN: Media Query para el botón de descarga SGC --- */
        }

        .flowchart-container {
                        position: relative;
                        width: 95%;
                        height: 550px;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        margin: 20px auto;
                    }

                    .flow-inputs {
                        width: 70%;
                        height: 100%;
                        position: relative;
                    }

                    .flow-node {
                        position: absolute;
                        left: 0;
                        width: 400px;
                        padding: 1.2rem 1.8rem;
                        background: linear-gradient(135deg, var(--node-gradient-start), var(--node-gradient-end));
                        color: var(--text-color-light);
                        border-radius: 8px;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                        text-align: left;
                        line-height: 1.5;
                        font-size: 1rem;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        z-index: 5;
                    }
                    
                    #p1 { top: 0; }
                    #p2 { top: 18%; }
                    #p3 { top: 36%; }
                    #p4 { top: 56%; }
                    #p5 { top: 74%; }
                    #p6 { top: 92%; }

                    .flow-node::after {
                        content: '';
                        position: absolute;
                        top: 50%;
                        right: -40px;
                        transform: translateY(-50%);
                        width: 40px;
                        height: 3px;
                        background-color: var(--line-color);
                        transition: background-color 0.3s ease;
                    }
                    
                    .vertical-bus, .main-flow-line, .main-flow-line::after {
                        background-color: var(--line-color);
                        transition: all 0.3s ease;
                    }
                    .vertical-bus { 
                        position: absolute; 
                        left: 360px; 
                        top: 5%; 
                        bottom: 5%; 
                        width: 4px; 
                        border-radius: 2px; 
                    }
                    
                    .main-flow-line { 
                        position: absolute; 
                        left: 362px; 
                        top: 50%; 
                        transform: translateY(-50%); 
                        width: 300px; 
                        height: 12px; 
                        border-radius: 6px; 
                    }

        .flow-output {
                        width: 30%;
                        display: flex;
                        justify-content: center;
                        position: relative;
                    }

                    .flow-output::before {
                        content: '';
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 200px;
                        height: 200px;
                        background-image: url('https://raw.githubusercontent.com/djsalazar/aa/b74e56ed5e3c0105afd0613626877ac3e2f56563/logo%20-%20Blanco.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                        opacity: 0.1;
                        pointer-events: none;
                        z-index: 1;
                    }

                    .flow-process {
                        padding: 1.5rem 2rem;
                        background-color: var(--committee-bg);
                        color: var(--text-color-light);
                        border-radius: 12px;
                        font-size: 1.3rem;
                        font-weight: bold;
                        text-align: center;
                        white-space: nowrap;
                        box-shadow: 0 10px 35px rgba(0, 74, 124, 0.4);
                        cursor: pointer;
                        transition: all 0.3s ease;
                        z-index: 10;
                        position: relative;
                    }
        
        /* --- ESTILOS GENERALES Y VARIABLES (from code 36) --- */
        :root {
            --color-bg: #f4f7f9;
            --color-text: #333;
            --blue-dark: #002244;
            --blue-main: #004a7c;
            --blue-light: #2a6f97;
            --accent-gold-diagram: #c5a47e; /* Renamed to avoid conflict */
            --text-light: #f5f5f5;
            --line-color: #d0dbe4;
            --shadow-color-diagram: rgba(0, 34, 68, 0.1); /* Renamed */
            --font-size-base: clamp(1rem, 1.5vw, 1.1rem);
            --font-size-h3: clamp(1.75rem, 3vw, 2.25rem);
            --font-size-node-title: clamp(1.1rem, 2vw, 1.25rem);
            --font-size-node-body: clamp(0.9rem, 1.5vw, 1rem);
        }

        /* Clase para evitar el scroll del body cuando el modal está abierto */
        body.modal-open {
            overflow: hidden;
        }

        /* --- CONTENEDOR PRINCIPAL DE LA SECCIÓN --- */
        .quality-committee-section {
            max-width: 1200px;
            margin: 40px auto 0 auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 30px var(--shadow-color-diagram);
        }
         body.dark-theme .quality-committee-section {
            background-color: var(--card-bg);
         }

        .quality-committee-section h3 {
            font-size: var(--font-size-h3);
            color: var(--blue-dark);
            text-align: center;
            margin: 0 0 1rem 0;
            font-weight: 700;
        }
        body.dark-theme .quality-committee-section h3 {
             color: var(--text-primary);
        }


        .section-subtitle {
            text-align: center;
            font-size: var(--font-size-base);
            color: #555;
            max-width: 70ch;
            margin: 0 auto 3.5rem auto;
            border-bottom: 3px solid var(--accent-gold-diagram);
            padding-bottom: 1rem;
        }
        body.dark-theme .section-subtitle {
            color: var(--text-secondary);
            border-bottom-color: var(--accent-gold);
        }

        /* --- DISEÑO DEL DIAGRAMA DE FLUJO CON CSS GRID EJEMPLO --- */
        .flowchart-container-grid {
            display: grid;
            align-items: center;
            grid-template-columns: 1fr 100px 1fr; 
            gap: 2rem;
        }

        .flow-inputs-grid {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .flow-node-base {
            background-color: #fff;
            border-radius: 10px;
            padding: 1.25rem 1.5rem;
            text-align: center;
            box-shadow: 0 4px 15px var(--shadow-color-diagram);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            position: relative;
        }
        body.dark-theme .flow-node-base {
            background-color: var(--bg-secondary);
        }

        .flow-node-base:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 34, 68, 0.15);
        }
        body.dark-theme .flow-node-base:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }


        .flow-node {
            border-left: 5px solid var(--blue-light);
            background: linear-gradient(135deg, #eef5f9, #ffffff);
        }
        body.dark-theme .flow-node {
            border-left-color: var(--accent-blue-lighter);
            background: linear-gradient(135deg, #2a2a2a, #333333);
        }

        .flow-node p {
            margin: 0;
            font-size: var(--font-size-node-body);
            color: var(--blue-dark);
            font-weight: 600;
        }
        body.dark-theme .flow-node p {
             color: var(--text-primary);
        }
        
        .flow-connector {
            height: 100%;
            position: relative;
        }

        .flow-connector::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            height: 5px;
            background-color: var(--line-color);
            transform: translateY(-50%);
        }

        .flow-connector::after {
            content: '►';
            position: absolute;
            right: -12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5rem;
            color: var(--line-color);
        }
        body.dark-theme .flow-connector::before, body.dark-theme .flow-connector::after {
            color: var(--card-border);
            background-color: var(--card-border);
        }

        .flow-output-grid {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .flow-process {
            border: 3px solid var(--blue-main);
            background: linear-gradient(135deg, var(--blue-main), var(--blue-dark));
            color: var(--text-light);
            min-height: 75px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
         body.dark-theme .flow-process {
            border-color: var(--accent-blue-main);
            background: linear-gradient(135deg, var(--accent-blue-main), var(--accent-blue-darker));
            color: var(--header-text);
         }


        .flow-process p {
            font-size: var(--font-size-node-title);
            font-weight: 700;
            letter-spacing: 1px;
            margin: 0;
            padding: 1rem;
        }

        /* --- ESTILOS PARA LA VENTANA MODAL --- */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 34, 68, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            padding: 1rem;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-overlay .modal-content {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 550px;
            width: 100%;
            position: relative;
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }
        body.dark-theme .modal-overlay .modal-content {
            background-color: var(--modal-content-bg);
        }

        .modal-overlay.active .modal-content {
            transform: scale(1);
        }

        .modal-close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 2rem;
            color: #aaa;
            cursor: pointer;
            line-height: 1;
            transition: color 0.2s ease;
        }
        .modal-close-btn:hover {
            color: var(--blue-dark);
        }
        body.dark-theme .modal-close-btn:hover {
             color: var(--text-primary);
        }


        #modal-title {
            font-size: clamp(1.5rem, 2.5vw, 1.75rem);
            color: var(--blue-dark);
            margin-top: 0;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--accent-gold-diagram);
            padding-bottom: 0.75rem;
        }
        body.dark-theme #modal-title {
            color: var(--text-primary);
            border-bottom-color: var(--accent-gold);
        }
        
        #modal-description p {
            font-size: var(--font-size-base);
            margin-bottom: 1rem;
            color: #444;
            text-align: justify; /* Añadido para justificar el texto */
        }
        body.dark-theme #modal-description p {
             color: var(--text-secondary);
        }

        
        #modal-description p:last-child {
            margin-bottom: 0;
        }

        #modal-description strong {
            color: var(--blue-main);
            font-weight: 600;
        }
        body.dark-theme #modal-description strong {
             color: var(--accent-blue-lighter);
        }
        
        /* --- ESTILOS DEL ACORDEÓN DE ROLES (NUEVO) --- */
        .roles-accordion-wrapper {
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px var(--shadow-color);
            overflow: hidden;
            position: relative;
        }
        
        .roles-accordion-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://raw.githubusercontent.com/djsalazar/aa/b74e56ed5e3c0105afd0613626877ac3e2f56563/logo%20-%20Blanco.png');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 350px;
            opacity: 0.08;
            z-index: 0;
            pointer-events: none;
        }
        body.dark-theme .roles-accordion-wrapper::before {
            opacity: 0.05;
        }

        .roles-accordion-item {
            position: relative;
            z-index: 1;
        }
        .roles-accordion-item:not(:last-child) {
            border-bottom: 1px solid var(--card-border);
        }

        .roles-accordion-button {
            background-color: var(--accent-blue-main);
            color: var(--header-text);
            cursor: pointer;
            padding: 18px 25px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .roles-accordion-button:hover {
            background-color: var(--accent-blue-darker);
        }
        
        .roles-accordion-button::after {
            content: '+';
            font-size: 24px;
            font-weight: bold;
            color: var(--header-text);
            transition: transform 0.3s ease;
        }

        .roles-accordion-button.active::after {
            content: '−';
            transform: rotate(180deg); /* This is incorrect for minus, but keeping for visual effect */
        }
        
        .roles-accordion-content {
            background-color: var(--accordion-content-bg);
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }
        
        .roles-accordion-content .text-content {
            padding: 25px 30px;
            color: var(--text-primary);
            line-height: 1.7;
        }

        .roles-accordion-content .text-content h3 {
            color: var(--accent-blue-main);
            border-bottom: 2px solid var(--card-border);
            padding-bottom: 8px;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.3em;
        }
        
        .roles-accordion-content .text-content p, .roles-accordion-content .text-content blockquote {
            margin-bottom: 15px;
            color: var(--text-secondary);
        }

        .roles-accordion-content .text-content blockquote {
            border-left: 4px solid var(--accent-blue-lighter);
            padding: 10px 15px;
            font-style: italic;
            margin-left: 0;
            background-color: var(--bg-secondary);
        }
        body.dark-theme .roles-accordion-content .text-content blockquote {
            border-left-color: var(--accent-blue-main);
        }

        .roles-accordion-content .text-content ol {
            padding-left: 25px;
            margin-top: 0;
        }

        .roles-accordion-content .text-content li {
            margin-bottom: 12px;
        }
        
        .gestor-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        .gestor-column {
            flex: 1;
            min-width: 280px;
        }
        .gestor-column h4 {
            color: var(--accent-blue-darker);
            margin-top: 0;
            padding-bottom: 5px;
            border-bottom: 1px solid var(--card-border);
        }
        body.dark-theme .gestor-column h4 {
            color: var(--accent-blue-lighter);
        }


        /* --- MEDIA QUERIES --- */
        @media (max-width: 992px) {
            .flowchart-container-grid {
                grid-template-columns: 1fr 60px 1fr;
                gap: 1.5rem;
            }
            .flow-process {
                min-height: 150px;
            }
        }

        @media (max-width: 768px) {
            body { padding-left:0; padding-right:0; } /* Adjusted for consistency */
            main { padding-left: 1rem; padding-right: 1rem; }
            .quality-committee-section { padding: 1.5rem; }
            .flowchart-container-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .flow-connector { display: none; }
            .flow-inputs-grid .flow-node:not(:last-child)::after {
                content: '↓';
                display: block;
                text-align: center;
                font-size: 1.75rem;
                color: var(--line-color);
                margin-top: 1rem;
                font-weight: bold;
            }
            .flow-output-grid { order: 2; }
        }

        /* --- INICIO: NUEVOS ESTILOS PARA PIE DE PÁGINA Y BOTONES --- */
        .version-footer {
            position: fixed;
            left: var(--sidebar-width); /* Alinea con el ancho de la barra lateral */
            bottom: 0;
            width: calc(100% - var(--sidebar-width)); /* Ajusta el ancho restando el sidebar */
            z-index: 999;
            padding: 10px;
            font-size: 0.7em;
            color: var(--text-secondary);
            background-color: var(--bg-secondary);
            border-top: 1px solid var(--card-border);
            line-height: 0.3; /* Añadido para ajustar el espaciado vertical */
        }
        .version-footer .container {
            padding: 0 0 0 20px;
            text-align: left;
            width: 100%;
            max-width: 100%;
            margin: 0; /* Añadido para eliminar márgenes extra */
        }

        .lineamientos-buttons-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
        /* --- FIN: NUEVOS ESTILOS --- */


        /* --- INICIO: ESTILOS DIRECTORIO DOCENTES (INTEGRADO Y ADAPTADO) --- */
        #docentes-directory .docentes-header {
            font-family: 'Merriweather', serif;
            font-size: 1.5rem;
            color: var(--accent-blue-main);
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--accent-gold);
            margin-bottom: 20px;
        }
        
        .summary-panel {
            background-color: var(--card-bg);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px var(--shadow-color);
            display: grid;
            grid-template-columns: 0.8fr 1.2fr 1.2fr;
            gap: 25px;
            align-items: start;
        }
        body.dark-theme .summary-panel {
             background-color: var(--bg-secondary);
        }

        .summary-box {
            padding: 20px;
            border-radius: 6px;
        }
        .total-box {
            background-color: var(--accent-blue-main);
            color: var(--header-text);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        body.dark-theme .total-box {
            background-color: var(--accent-blue-darker);
        }

        .summary-number {
            font-family: 'Merriweather', serif;
            font-size: 4rem;
            font-weight: 700;
            color: var(--accent-gold);
            line-height: 1.1;
        }
        .summary-label {
            font-size: 1.2rem;
            margin-top: 10px;
            font-weight: 700;
        }
        .list-box {
            background-color: var(--bg-secondary);
            border: 1px solid var(--card-border);
            height: 100%;
        }
        body.dark-theme .list-box {
             background-color: var(--card-bg);
        }

        .summary-title {
            font-family: 'Merriweather', serif;
            color: var(--accent-blue-main);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent-gold);
            font-size: 1.3rem;
            text-align: center;
        }
        body.dark-theme .summary-title {
            color: var(--accent-blue-lighter);
        }

        .summary-list {
            list-style: none;
            padding: 0;
            max-height: 250px;
            overflow-y: auto;
            padding-right: 10px;
        }
        .summary-list::-webkit-scrollbar { width: 6px; }
        .summary-list::-webkit-scrollbar-track { background: transparent; }
        .summary-list::-webkit-scrollbar-thumb {
            background-color: var(--accent-blue-lighter);
            border-radius: 10px;
        }
        .summary-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 5px;
            border-bottom: 1px dashed var(--card-border);
            font-size: 0.95rem;
            color: var(--text-secondary);
        }
        body.dark-theme .summary-list li {
             color: var(--text-secondary);
        }

        .count-badge {
            background-color: var(--accent-blue-lighter);
            color: var(--header-text);
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.9rem;
            flex-shrink: 0;
            margin-left: 10px;
        }
        body.dark-theme .count-badge {
            background-color: var(--accent-blue-main);
            color: var(--header-text);
        }

        .filters-container {
            background-color: var(--card-bg);
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 15px var(--shadow-color);
            margin-bottom: 30px;
        }
         body.dark-theme .filters-container {
             background-color: var(--bg-secondary);
        }

        .filters-header {
            font-family: 'Merriweather', serif;
            color: var(--accent-blue-main);
            font-size: 1.5rem;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-gold);
            padding-bottom: 10px;
        }
        body.dark-theme .filters-header {
            color: var(--accent-blue-lighter);
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .filter-group { display: flex; flex-direction: column; }
        .filter-group label {
            font-weight: 700;
            color: var(--accent-blue-main);
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        body.dark-theme .filter-group label {
            color: var(--accent-blue-lighter);
        }

        .filter-group input[type="text"], .filter-group select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--card-border);
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }
        .filter-group input:focus, .filter-group select:focus {
            outline: none;
            border-color: var(--accent-blue-lighter);
            box-shadow: 0 0 0 3px rgba(0, 76, 153, 0.25);
        }
        body.dark-theme .filter-group input:focus, body.dark-theme .filter-group select:focus {
            border-color: var(--accent-gold);
            box-shadow: 0 0 0 3px rgba(230, 194, 96, 0.25);
        }
        .filter-buttons {
            grid-column: 1 / -1;
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
        .filter-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            background-color: var(--accent-blue-lighter);
            color: var(--header-text);
            transition: background-color 0.3s;
        }
        .filter-buttons button:hover {
            background-color: var(--accent-blue-main);
        }
        body.dark-theme .filter-buttons button:hover {
            background-color: var(--accent-blue-darker);
        }

        #results-count {
            margin: 20px 0;
            font-weight: 700;
            color: var(--accent-blue-main);
            font-size: 1.1rem;
        }
        body.dark-theme #results-count {
             color: var(--accent-blue-lighter);
        }

        #judges-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 25px;
        }

        .judge-card {
            background-color: var(--card-bg);
            border-radius: 8px;
            box-shadow: 0 4px 15px var(--shadow-color);
            border-left: 5px solid var(--accent-blue-lighter);
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }
        .judge-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        
        body.dark-theme .judge-card {
            box-shadow: 0 4px 15px var(--shadow-color);
        }
        body.dark-theme .judge-card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        
        .judge-card.inactive-judge {
            border-left-color: var(--risk-extreme-border);
            box-shadow: inset 0 0 15px 3px rgba(220, 53, 69, 0.1), 0 4px 15px var(--shadow-color);
        }
        body.dark-theme .judge-card.inactive-judge {
             box-shadow: inset 0 0 15px 3px rgba(244, 143, 177, 0.1), 0 4px 15px var(--shadow-color);
        }

        .card-number {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent-gold);
            color: var(--accent-blue-darker);
            font-family: 'Merriweather', serif;
            font-size: 1.1rem;
            font-weight: 700;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--card-bg);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            z-index: 10;
        }
        .card-header {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            border-bottom: 1px solid var(--card-border);
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .card-photo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: var(--accent-blue-main);
            color: var(--header-text);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            flex-shrink: 0;
        }
        .card-info { flex-grow: 1; }
        .card-info .name {
            font-family: 'Merriweather', serif;
            font-size: 1.25rem;
            color: var(--accent-blue-main);
            margin-bottom: 5px;
        }
        body.dark-theme .card-info .name {
             color: var(--accent-blue-lighter);
        }
        .card-info .cargo {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--accent-blue-lighter);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        body.dark-theme .card-info .cargo {
             color: var(--accent-blue-main);
        }

        .card-body .detail-group { margin-bottom: 12px; }
        .card-body .detail-group strong {
            display: block;
            color: var(--accent-blue-main);
            font-size: 0.9rem;
            margin-bottom: 4px;
        }
        body.dark-theme .card-body .detail-group strong {
             color: var(--accent-blue-lighter);
        }
        .card-body .detail-group p {
            font-size: 0.95rem;
            color: var(--text-primary);
        }
        .expertise-tags { list-style: none; padding: 0; display: flex; flex-wrap: wrap; gap: 8px; margin-top: 5px; }
        .expertise-tags li {
            background-color: #E3F2FD;
            color: #0D47A1;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 700;
            border: 1px solid #BBDEFB;
        }
        body.dark-theme .expertise-tags li {
            background-color: #272727;
            color: var(--accent-blue-lighter);
            border-color: #555;
        }

        .expertise-tags .docencia-tag {
            background-color: var(--bg-secondary);
            color: var(--accent-blue-main);
            border-color: var(--card-border);
        }
        body.dark-theme .expertise-tags .docencia-tag {
            background-color: #333;
            color: var(--accent-blue-lighter);
        }

        .otra-especialidad {
            background-color: #fff9e8;
            border-left: 3px solid var(--accent-gold);
            padding: 12px;
            margin-top: 15px;
            border-radius: 4px;
            font-style: italic;
            font-size: 0.9rem;
            color: #5d4a1b;
        }
        body.dark-theme .otra-especialidad {
            background-color: var(--highlight-note-bg);
            color: var(--highlight-note-text);
            border-left-color: var(--highlight-note-border);
        }

        @media (max-width: 1200px) {
            .summary-panel { grid-template-columns: 1fr 1fr; }
            .total-box { grid-column: 1 / -1; }
        }
        @media (max-width: 768px) {
            .summary-panel { grid-template-columns: 1fr; }
            .filter-grid { grid-template-columns: 1fr; }
        }
         /* --- FIN: ESTILOS DIRECTORIO DOCENTES --- */

    </style>
</head>
<body>
    <button id="mobile-nav-toggle" aria-label="Abrir menú de navegación" aria-expanded="false">&#9776;</button>

    <nav id="main-nav">
        <div class="sidebar-logo-container">
            <img src="https://raw.githubusercontent.com/djsalazar/aa/b74e56ed5e3c0105afd0613626877ac3e2f56563/logo%20-%20Blanco.png" alt="Escuela Estudios Judiciales Logo">
        </div>
        <ul>            <li><a href="#escuela" class="active">Escuela de Estudios Judiciales</a></li>
            <li><a href="#sgc">Norrma ISO 9001:2015</a></li>
            <li><a href="#roles">Comité de Calidad</a></li>
            <li><a href="#politica">Política de Calidad</a></li> <!-- REORDENADO -->
            <li><a href="#objetivos">Objetivos de Calidad</a></li> <!-- REORDENADO -->
            <li><a href="#procesos">Procesos Misionales y de Apoyo</a></li>
            <li><a href="#beneficios">Beneficios del Sistema de Gestión de Calidad</a></li>        <li><a href="#eej-sgc">ESEJ en el SGC</a></li>        <li><a href="#recursos">Recursos</a></li>
        <li><a href="#red-docente" style="color: var(--accent-gold);">Red Docente</a></li>
        <li><a href="logout.php" class="header-logout-btn" style="background-color:#dc3545;color:white;font-weight:bold;text-align:center;border-radius:4px;margin:10px 20px;display:block;">↪ Cerrar Sesión</a></li>
    </ul>
    </nav>

    <header>
        <div class="header-container">
            <div class="header-titles">
                <h1>Escuela de Estudios Judiciales del Organismo Judicial</h1>
                <h2 class="sgc-subtitle"><strong>Sistema de Gestión de Calidad NTC ISO 9001:2015</strong></h2>
            </div>
            <div class="header-right-stack">
                <button id="startTourBtn">Iniciar Tour</button>
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="theme-checkbox">
                        <input type="checkbox" id="theme-checkbox" />
                        <div class="slider"></div>
                    </label>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="escuela">
            <div class="container">
                <h2>Escuela de Estudios Judiciales</h2>
                <p>La Escuela de Estudios Judiciales es la Unidad de Capacitación Institucional del Organismo Judicial y se constituye en un instrumento que contribuye al desarrollo de la Carrera Judicial, manteniendo una oferta de programas de formación y capacitación integral.</p>
                <br>
                <p>Es el órgano auxiliar del Consejo de la Carrera Judicial encargado de planificar, ejecutar y facilitar la capacitación y formación técnica y profesional de jueces, magistrados, funcionarios, auxiliares judiciales y empleados del Organismo Judicial con el fin de asegurar la excelencia y la actualización profesional para el eficiente desempeño de sus funciones.</p>
            </div>
        </section>

        <section id="sgc">
            <div class="container">
                <h2>Sistema de Calidad bajo la Norma Técnica ISO 9001:2015</h2>

                <div class="sgc-subsection">
                    <h3>Definición</h3>
                    <p>El Sistema de Gestión de la Calidad (SGC) bajo la norma ISO 9001:2015 es un conjunto de políticas, procesos y procedimientos organizacionales diseñados para cumplir con los requisitos de calidad establecidos por dicha norma internacional.</p>
                </div>

                <div class="sgc-subsection">
                    <h3>Objetivo Principal del SGC</h3>
                    <p>Asegurar que la organización pueda proporcionar productos y servicios que cumplan consistentemente con las expectativas del cliente y los requisitos legales y regulatorios aplicables.</p>
                </div>

                <div class="sgc-subsection">
                    <h3>Componentes Clave del SGC bajo ISO 9001:2015</h3>
                    <div class="card-container">
                        <div class="card">
                            <h4><span class="card-icon">👥</span>Enfoque en el cliente</h4>
                            <p>Promover la satisfacción del cliente mediante el cumplimiento de sus necesidades y expectativas.</p>
                        </div>
                        <div class="card">
                            <h4><span class="card-icon">🧭</span>Liderazgo</h4>
                            <p>Los líderes deben establecer una visión clara y un compromiso con la calidad, integrándola en la cultura organizacional.</p>
                        </div>
                        <div class="card">
                            <h4><span class="card-icon">🤝</span>Participación del personal</h4>
                            <p>La norma destaca la importancia de involucrar a todos los empleados en el sistema de gestión de la calidad.</p>
                        </div>
                        <div class="card">
                            <h4><span class="card-icon">⚙️</span>Enfoque basado en procesos</h4>
                            <p>La organización debe identificar y gestionar sus actividades interrelacionadas como procesos para optimizar su desempeño.</p>
                        </div>
                        <div class="card">
                            <h4><span class="card-icon">📈</span>Mejora continua</h4>
                            <p>El SGC debe estar en constante evolución para mejorar su eficiencia y eficacia.</p>
                        </div>
                        <div class="card">
                            <h4><span class="card-icon">📊</span>Toma de decisiones basada en la evidencia</h4>
                            <p>Las decisiones deben fundamentarse en datos y análisis precisos.</p>
                        </div>
                        <div class="card">
                            <h4><span class="card-icon">🔗</span>Gestión de relaciones</h4>
                            <p>La norma promueve la gestión efectiva de las relaciones con partes interesadas, como proveedores y clientes, para generar valor sostenible.</p>
                        </div>
                    </div>
                </div>
                <h3 class="alcance-title">Alcance del Sistema de Gestión en el Organismo Judicial</h3>
                <p style="text-align: justify; font-size: 1.1em;">Trámite y resolución en segunda instancia en las ramas del derecho Penal, Civil, Mercantil, Laboral, Familia, Constitucional, Niñez y Adolescentes en: La Sala Sexta Penal de Cobán, Sala Regional Mixta de Quiché, Sala Regional Mixta de Huehuetenango, Sala Regional Mixta de Cobán, Sala Primera Civil de Guatemala y Sala Segunda Civil de Guatemala. Trámites Antejuicio..</p>
            </div>
        </section>

        <!-- SECCIÓN ROLES Y FUNCIONES -->
        <section id="roles">
            <div class="container">
                <h2>Comité de Calidad</h2>
                <div class="sgc-subsection">
                    <div class="card-container">
                        <p>Es la máxima autoridad del Sistema de Gestión de Calidad, encargado de dar las directrices estratégicas para la consecución de los objetivos planteados, por medio de la asignación de recursos necesarios.</p>
                    </div>
                </div>
                
                <!-- START OF INTEGRATED CODE (DIAGRAM) -->
                <section class="quality-committee-section">
                    <h3>Estructura del Comité de Calidad</h3>
                    <p class="section-subtitle">
                    </p>
            
                    <div class="flowchart-container-grid">
                        <div class="flow-inputs-grid">
                            <!-- Se añade el atributo data-role para identificar cada nodo -->
                            <div class="flow-node flow-node-base" data-role="presidente-oj">
                                <p>Presidente del Organismo Judicial</p>
                            </div>
                            <div class="flow-node flow-node-base" data-role="camara-penal">
                                <p>Presidente Cámara Penal</p>
                            </div>
                            <div class="flow-node flow-node-base" data-role="camara-civil">
                                <p>Presidente Cámara Civil</p>
                            </div>
                            <div class="flow-node flow-node-base" data-role="camara-amparo">
                                <p>Presidente Cámara de Amparo y Antejuicios</p>
                            </div>
                            <div class="flow-node flow-node-base" data-role="planificacion">
                                <p>Secretaría de Planificación</p>
                            </div>
                            <div class="flow-node flow-node-base" data-role="gerente-general">
                                <p>Gerente General</p>
                            </div>
                        </div>
            
                        <div class="flow-connector"></div>
            
                        <div class="flow-output-grid">
                            <div class="flow-process flow-node-base" data-role="comite-calidad">
                                <p>COMITÉ DE CALIDAD</p>
                            </div>
                        </div>
                    </div>
                </section>
        
                <!-- ===== MODAL FOR DIAGRAM (Inicialmente oculto) ===== -->
                <div id="committee-modal" class="modal-overlay" aria-hidden="true">
                    <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="modal-title">
                        <button id="modal-close" class="modal-close-btn" aria-label="Cerrar ventana">&times;</button>
                        <h4 id="modal-title"></h4>
                        <div id="modal-description"></div>
                    </div>
                </div>
                <!-- END OF INTEGRATED CODE (DIAGRAM) -->
                
                <!-- START: NEW CONTENT FROM roles y funciones.html -->
                <div class="roles-accordion-wrapper">
                    <!-- Acordeón para COMITÉ DE CALIDAD -->
                    <div class="roles-accordion-item">
                        <button class="roles-accordion-button">COMITÉ DE CALIDAD</button>
                        <div class="roles-accordion-content">
                            <div class="text-content">
                                <h3>FUNCIONES:</h3>
                                <ol>
                                    <li>Aprobar y divulgar la Política y Objetivos de Calidad del Sistema de Gestión de Calidad y gestionar las acciones necesarias para su implementación.</li>
                                    <li>Determinar el alcance del Sistema de Gestión de Calidad.</li>
                                    <li>Reunirse, preferentemente al finalizar cada cuatrimestre del año en curso, para verificar los avances del Sistema de Gestión de Calidad del Organismo Judicial, identificar necesidades de cambios, oportunidades de mejora y los recursos necesarios para optimizar su funcionamiento y asegurarse de su conveniencia con la planificación estratégica de esta institución. Las dependencias que forman parte del Sistema de Gestión de Calidad deben cumplir los requerimientos del Comité de Calidad y con la documentación pertinente para el correcto funcionamiento del Sistema.</li>
                                    <li>Instruir a las unidades administrativas para el cumplimiento de los plazos, planes y la documentación pertinente para el correcto funcionamiento del Sistema de Gestión de Calidad.</li>
                                    <li>Analizar la inclusión de más órganos jurisdiccionales y dependencias administrativas al Sistema de Gestión de Calidad, tomando en cuenta el alcance establecido, previo análisis que considere la carga de trabajo, clima laboral, estructura organizacional, condición de la infraestructura y el compromiso del personal para determinar su conveniencia.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            
                    <!-- Acordeón para SECRETARÍA DE PLANIFICACIÓN -->
                    <div class="roles-accordion-item">
                        <button class="roles-accordion-button">SECRETARÍA DE PLANIFICACIÓN Y DESARROLLO INSTITUCIONAL</button>
                        <div class="roles-accordion-content">
                            <div class="text-content">
                                <p>El ente coordinador del Sistema de Gestión de Calidad, a través del área de Desarrollo Administrativo y Mejora Continúa.</p>
                                <h3>FUNCIONES:</h3>
                                <ol>
                                    <li>Coordinar la elaboración de la política y objetivos de Calidad del Sistema de Gestión de Calidad, implementado y someterlo a la aprobación del Comité de Calidad.</li>
                                    <li>Elaborar el cronograma de actividades generales anuales del Sistema de Gestión de Calidad implementado.</li>
                                    <li>Realizar reuniones periódicas con las unidades involucradas en el Sistema de Gestión de Calidad para determinar el nivel de cumplimiento con la documentación necesaria según los criterios de la norma ISO 9001:2015.</li>
                                    <li>Dar seguimiento a las recomendaciones de los informes de Auditoría Interna y Externa realizados al Sistema de Gestión de Calidad.</li>
                                    <li>Dar seguimiento a las Acciones Correctivas y de Mejora de cada proceso que integra el Sistema de Gestión de Calidad.</li>
                                    <li>Coordinar reuniones presenciales o virtuales con los gestores designados en cada proceso para verificar el cumplimiento de las tareas asignadas.</li>
                                    <li>Proponer mejoras en la documentación generada del Sistema de Gestión de Calidad.</li>
                                    <li>Proponer lineamientos para la adecuada gestión del Sistema de Gestión de Calidad del Organismo Judicial.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            
                    <!-- Acordeón para DUEÑOS DE PROCESO -->
                    <div class="roles-accordion-item">
                        <button class="roles-accordion-button">DUEÑOS DE PROCESO</button>
                        <div class="roles-accordion-content">
                            <div class="text-content">
                                <p>Máxima autoridad de la Unidad u Órgano Jurisdiccional, encargado de la dirección estratégica y la toma de decisiones.</p>
                                <h3>FUNCIONES:</h3>
                                <ol>
                                    <li>Aprobar la documentación referente a su proceso.</li>
                                    <li>Diseñar y brindar apoyo al Gestor Titular y Gestor de Apoyo.</li>
                                    <li>Brindar las herramientas para la correcta implementación del Sistema, en temas de tecnología, insumos y tiempo que sean necesarios para la ejecución de las actividades.</li>
                                    <li>Revisión y monitoreo de los controles e indicadores de su proceso.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Acordeón para GESTORES -->
                    <div class="roles-accordion-item">
                        <button class="roles-accordion-button">GESTORES</button>
                        <div class="roles-accordion-content">
                            <div class="text-content">
                                <blockquote>"Los órganos jurisdiccionales y unidades administrativas, que forman parte del Sistema deberá designar a una persona que le represente, a quien se le denominará 'gestor'; para el desarrollo de las gestiones del Sistema podrá actuar en forma conjunta o separada con la máxima autoridad de su órgano jurisdiccional o de su unidad administrativa y tendrá la función de enlace con la Secretaría de Planificación y Desarrollo Institucional para el traslado y envío de información."<br><em>(Acuerdo 8-2022. Artículo 7.Bis)</em></blockquote>
                                <blockquote>"Es compromiso del personal de los órganos jurisdiccionales y unidades administrativas, la documentación y las gestiones necesarias para el cumplimiento de los requisitos del Sistema de Gestión de Calidad".<br><em>(Acuerdo 8-2022. Artículo 7.Bis)</em></blockquote>
                                <div class="gestor-container">
                                    <div class="gestor-column">
                                        <h4>TITULAR:</h4>
                                        <ol>
                                            <li>Control de la documentación del SGC.</li>
                                            <li>Participar en auditorías.</li>
                                            <li>Realizar el análisis y seguimiento de las Acciones de Mejora y Correctivas.</li>
                                        </ol>
                                    </div>
                                    <div class="gestor-column">
                                        <h4>APOYO:</h4>
                                        <ol>
                                            <li>Apoyar al Gestor Titular respecto a la documentación relativa al SGC.</li>
                                            <li>Darle el seguimiento oportuno en ausencia del Gestor Titular.</li>
                                            <li>Participar en auditorías.</li>
                                            <li>Dar seguimiento de las acciones correctivas y de mejora que se encuentren abiertas.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: NEW CONTENT -->

            </div>
        </section><!-- SECCIÓN POLÍTICA DE CALIDAD -->        <section id="politica">
            <div class="container">
                <h2>Política de Calidad del Organismo Judicial</h2>
                <button id="viewPoliticaImageBtn" class="view-image-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    Ver Documento                </button>
                <p>En el Organismo Judicial de Guatemala proporcionamos un servicio de administración de justicia aplicando la Constitución Política de la República de Guatemala y demás leyes vigentes, procurando la prontitud y la celeridad en cada gestión, la independencia en nuestras resoluciones, todo esto bajo una conducta ética y el compromiso social por parte del personal que forma parte del SGC.</p>
                <p>La administración eficiente de los recursos, la <strong>capacitación constante de nuestros colaboradores</strong> y su desempeño eficiente nos permite mejorar continuamente la Gestión de Calidad de la Institución. Es así como logramos satisfacer las necesidades y expectativas de los usuarios y partes interesadas.
            </div>
        </section>        <!-- SECCIÓN OBJETIVOS DE CALIDAD -->        <section id="objetivos">
            <div class="container">
                <h2>Objetivos de Calidad del Organismo Judicial</h2>
                 <button id="viewObjetivosImageBtn" class="view-image-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    Ver Documento   
                </button>
                <div class="accordion-container">
                    <div class="accordion-item">
                        <div class="accordion-header">1. Lograr que el 82% de las resoluciones emitidas cumplan con los plazos establecidos.</div>
                        <div class="accordion-content">
                            <p>Este objetivo busca mejorar la eficiencia en la emisión de resoluciones judiciales, asegurando que la mayoría se entreguen dentro de los tiempos legalmente estipulados, contribuyendo a una justicia más pronta.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">2. Lograr que el 75% de las Ejecutorias en Materia Civil y Penal sean realizadas en un plazo no mayor de 18 días.</div>
                        <div class="accordion-content">
                            <p>Se enfoca en la celeridad de la ejecución de sentencias firmes en áreas clave, buscando reducir los tiempos para materializar las decisiones judiciales y garantizar la efectividad del sistema.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">3. Lograr que 3 procedimientos de las Salas de la Corte de Apelaciones dentro del alcance del SGC se estandaricen.</div>
                        <div class="accordion-content">
                            <p>Busca la uniformidad y optimización de procesos específicos en las Salas de Apelaciones, lo que puede llevar a una mayor previsibilidad, eficiencia y calidad en la tramitación de casos.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">4. Mejorar en un 3% en el manejo de insumos y recursos humanos.</div>
                        <div class="accordion-content">
                            <p>Este objetivo se centra en la optimización de la gestión de recursos materiales y del personal, buscando una mayor eficiencia administrativa y un mejor aprovechamiento de los medios disponibles.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">5. Lograr el 85% de cumplimiento del programa de capacitación en áreas técnicas – Escuela de Estudios Judiciales.</div>
                        <div class="accordion-content">
                            <p>Destaca la importancia de la formación continua del personal judicial, con una meta específica de cumplimiento para los programas técnicos ofrecidos por la Escuela, asegurando la actualización de conocimientos y habilidades.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">6. Dar seguimiento a la oportunidad organizacional proveniente de la evaluación del desempeño anual.</div>
                        <div class="accordion-content">
                            <p>Implica un compromiso con la mejora continua basada en los resultados de las evaluaciones de desempeño, identificando áreas de oportunidad y tomando acciones para fortalecer la organización.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">7. Lograr un mínimo de 85% de eficacia del Sistema de Gestión de Calidad.</div>
                        <div class="accordion-content">
                            <p>Establece una meta global para la efectividad del SGC, indicando que se espera que el sistema en su conjunto funcione de manera óptima y cumpla con sus propósitos establecidos.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">8. Incrementar la satisfacción de los usuarios.</div>
                        <div class="accordion-content">
                            <p>Este es un objetivo fundamental de cualquier sistema de calidad, enfocado en mejorar la percepción y experiencia de quienes utilizan los servicios judiciales, buscando una mayor confianza y legitimidad.</p>
                        </div>
                    </div>
                </div>
                    <div class="accordion-item">
                        <div class="accordion-header">2. Lograr que el 75% de las Ejecutorias en Materia Civil y Penal sean realizadas en un plazo no mayor de 18 días.</div>
                        <div class="accordion-content">
                            <p>Se enfoca en la celeridad de la ejecución de sentencias firmes en áreas clave, buscando reducir los tiempos para materializar las decisiones judiciales y garantizar la efectividad del sistema.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">3. Lograr que 3 procedimientos de las Salas de la Corte de Apelaciones dentro del alcance del SGC se estandaricen.</div>
                        <div class="accordion-content">
                            <p>Busca la uniformidad y optimización de procesos específicos en las Salas de Apelaciones, lo que puede llevar a una mayor previsibilidad, eficiencia y calidad en la tramitación de casos.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">4. Mejorar en un 3% en el manejo de insumos y recursos humanos.</div>
                        <div class="accordion-content">
                            <p>Este objetivo se centra en la optimización de la gestión de recursos materiales y del personal, buscando una mayor eficiencia administrativa y un mejor aprovechamiento de los medios disponibles.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">5. Lograr el 85% de cumplimiento del programa de capacitación en áreas técnicas – Escuela de Estudios Judiciales.</div>
                        <div class="accordion-content">
                            <p>Destaca la importancia de la formación continua del personal judicial, con una meta específica de cumplimiento para los programas técnicos ofrecidos por la Escuela, asegurando la actualización de conocimientos y habilidades.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">6. Dar seguimiento a la oportunidad organizacional proveniente de la evaluación del desempeño anual.</div>
                        <div class="accordion-content">
                            <p>Implica un compromiso con la mejora continua basada en los resultados de las evaluaciones de desempeño, identificando áreas de oportunidad y tomando acciones para fortalecer la organización.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">7. Lograr un mínimo de 85% de eficacia del Sistema de Gestión de Calidad.</div>
                        <div class="accordion-content">
                            <p>Establece una meta global para la efectividad del SGC, indicando que se espera que el sistema en su conjunto funcione de manera óptima y cumpla con sus propósitos establecidos.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">8. Incrementar la satisfacción de los usuarios.</div>
                        <div class="accordion-content">
                            <p>Este es un objetivo fundamental de cualquier sistema de calidad, enfocado en mejorar la percepción y experiencia de quienes utilizan los servicios judiciales, buscando una mayor confianza y legitimidad.</p>
                        </div>
                    </div>
                </div>
            </div>        </section>        <section id="procesos">            <div class="container">
                <h2>¿Quiénes forman parte del Sistema de Gestión de Calidad?</h2>

                <div class="section-title-wrapper">
                    <h3>Procesos Misionales</h3>
                </div>
                <div class="accordion-container">
                    <div class="accordion-item">
                        <div class="accordion-header">Sala Sexta de la Corte de Apelaciones del Ramo Penal, Narcoactividad y Delitos contra el Ambiente de Cobán, Alta Verapaz</div>
                        <div class="accordion-content">
                            <p><span class="process-contact">📞 Teléfono: 22904308 (2290-4444 Ext. 83796/7)</span></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Sala Regional Mixta de la Corte de Apelaciones de Quiché</div>
                        <div class="accordion-content">
                             <p><span class="process-contact">📞 Teléfono: 22904665 (2290-4444 Ext. 80101/2)</span></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Sala Regional Mixta de la Corte de Apelaciones de Cobán, Alta Verapaz</div>
                        <div class="accordion-content">
                             <p><span class="process-contact">📞 Teléfono: 22904665 (2290-4444 Ext. 83931/2)</span></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Sala Regional Mixta de la Corte de Apelaciones de Huehuetenango</div>
                        <div class="accordion-content">
                            <p><span class="process-contact">📞 Teléfono: 22904578 (2290-4444 Ext. 80721)</span></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Sección de Antejuicios de la Cámara de Amparo de la Corte Suprema de Justicia</div>
                        <div class="accordion-content">
                            <p><span class="process-contact">📞 Teléfono: 22904044 Ext. 4188</span></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Sala Primera de la Corte de Apelaciones del Ramo Civil y Mercantil</div>
                        <div class="accordion-content">
                            <p><span class="process-contact">📞 Teléfono: 22905044/45 EXT. 89636/37</span></p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Sala Segunda de la Corte de Apelaciones del Ramo Civil y Mercantil</div>
                        <div class="accordion-content">
                           <p><span class="process-contact">📞 Teléfono: 22905551 (2290-4444)</span></p>
                        </div>
                    </div>
                </div>

                <div class="section-title-wrapper" style="margin-top: 50px;">
                     <a href="http://directorio.oj.gob.gt/" target="_blank" class="directory-link-inline">
                        <img src="https://raw.githubusercontent.com/djsalazar/aa/main/search-icon.png" alt="Buscar en directorio">
                        Directorio OJ
                    </a>
                    <h3>Procesos de Apoyo</h3>
                </div>
                <div class="accordion-container">
                    <div class="accordion-item">
                        <div class="accordion-header">Unidad de Administración de Edificios</div>
                        <div class="accordion-content"><p>Responsable de la gestión y mantenimiento de las infraestructuras edilicias.</p></div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Escuela de Estudios Judiciales</div>
                        <div class="accordion-content"><p>Encargada de la capacitación y formación del personal judicial.</p></div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Unidad de Mantenimiento Correctivo y Servicios Técnicos</div>
                        <div class="accordion-content"><p>Provee soluciones y reparaciones técnicas para el equipamiento e instalaciones.</p></div>
                    </div>
                     <div class="accordion-item">
                        <div class="accordion-header">Gerencia de Informática</div>
                        <div class="accordion-content"><p>Administra los sistemas y recursos tecnológicos de la institución.</p></div>
                    </div>
                     <div class="accordion-item">
                        <div class="accordion-header">Unidad de Adquisiciones de Bienes y Servicios</div>
                        <div class="accordion-content"><p>Gestiona la compra de insumos y contratación de servicios necesarios.</p></div>
                    </div>
                     <div class="accordion-item">
                        <div class="accordion-header">Unidad de Transportes y Taller Mecánico</div>
                        <div class="accordion-content"><p>Coordina la logística de transporte y el mantenimiento vehicular.</p></div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header">Unidades de Recursos Humanos</div>
                        <div class="accordion-content">
                            <ul class="process-list-accordion-content">
                                <li>Unidad de Administración de RRHH</li>
                                <li>Unidad de Clasificación de Puestos y Administración de Sueldos</li>
                                <li>Unidad de Desarrollo Integral de RRHH</li>
                                <li>Unidad de Dotación de RRHH</li>
                                <li>Archivo Personal</li>
                            </ul>
                        </div>

        </section>

        <section id="beneficios">
            <div class="container">
                <h2>Beneficios de Adoptar el Sistema de Gestión de Calidad NTC ISO 9001:2015</h2>
                <div class="card-container">
                    <div class="card">
                        <h4><span class="benefit-icon">😊</span> Mejora la satisfacción del cliente.</h4>
                        <p>Al centrarse en los requisitos del cliente y buscar superarlos, se incrementa la confianza y lealtad de los usuarios hacia la organización.</p>
                    </div>
                    <div class="card">
                        <h4><span class="benefit-icon">📈</span> Incrementa la eficiencia operativa.</h4>
                        <p>La estandarización de procesos y la identificación de áreas de mejora conducen a una utilización más eficaz de los recursos y a la reducción de errores.</p>
                    </div>
                    <div class="card">
                        <h4><span class="benefit-icon">🛡️</span> Facilita el cumplimiento de requisitos legales y reglamentarios.</h4>
                        <p>Un SGC robusto ayuda a asegurar que la organización se mantenga al día y cumpla con todas las normativas aplicables a sus actividades.</p>
                    </div>
                    <div class="card">
                        <h4><span class="benefit-icon">🌟</span> Mejora la imagen y reputación de la organización.</h4>
                        <p>La certificación ISO 9001 es un reconocimiento internacional que demuestra el compromiso de la organización con la calidad y la excelencia.</p>
                    </div>
                    <div class="card">
                        <h4><span class="benefit-icon">🔄</span> Fomenta la mejora continua y la toma de decisiones más informada.</h4>
                         <p>El ciclo PHVA (Planificar-Hacer-Verificar-Actuar) inherente a la norma promueve una cultura de aprendizaje y adaptación constante basada en datos y evidencias.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="eej-sgc">
            <div class="container">
                <h2>Escuela de Estudios Judiciales en el SGC</h2>
                <p>Como parte del Sistema de Gestión de Calidad, la Escuela de Estudios Judiciales cumple una función de apoyo. Por esta razón, debe contar con ciertos documentos que pueden ser revisados y evaluados durante auditorías. Estos documentos son:</p>

                <br> <!-- Añadido: Espacio adicional -->

                <div class="card-container">
                    <div class="card">
                        <h4><span class="card-icon">📄</span>Ficha de procesos</h4>
                        <p>Resume los elementos, finalidad y controles de un proceso. Se identifica con el formato <strong>FICHA DE CARACTERIZACIÓN PROCESO FP-GC-01</strong> y es clave para la estandarización y auditoría dentro del SGC.</p>
                        <!-- ===== BOTÓN AÑADIDO AQUÍ ===== -->
                        <span class="risk-details-button" id="openFichaProcesosBtn">Ver Ficha de Procesos</span>
                    </div>
                    <div class="card">
                        <h4><span class="card-icon">🎯</span>Análisis de FODA</h4>
                        <p>Técnica de planificación estratégica que analiza Debilidades, Fortalezas (internas), Amenazas y Oportunidades (externas). Esta evaluación ayuda a la institución a mejorar sus puntos débiles y a capitalizar sus ventajas y las oportunidades del entorno.</p>
                        <span class="risk-details-button" id="openFodaModalButton">Ver FODA</span>
                    </div>
                    <div class="card clickable-card" id="openRiskModalCard">
                        <h4><span class="card-icon">⚠️</span>Gestión de Riesgos</h4>
                        <p>La <strong>MATRIZ DE IDENTIFICACIÓN DE RIESGOS FO-PE-03</strong> es un instrumento utilizado durante el análisis de riesgo. Su aplicación efectiva es fundamental para mejorar el control de los riesgos identificados y la seguridad general del proceso evaluado.</p>
                        <span class="risk-details-button">Ver Riesgos</span>
                    </div>
                    <div class="card">
                        <h4><span class="card-icon">🗂️</span>Control de documentos</h4>
                        <p>Para el control documental de los procesos del SGC, se utiliza el formato <strong>LISTA MAESTRA DE DOCUMENTOS FO-GC-02</strong>. Este contiene información detallada de cada documento (código, nombre, versión, revisión, responsable, ubicación, etc.), asegurando la trazabilidad y el uso de versiones correctas.</p>
                    </div>
                     <div class="card">
                        <h4><span class="card-icon">📊</span>Indicador de la Escuela de Estudios Judiciales</h4>
                        <p>Se mide el Porcentaje de Ejecución del Programa Ordinario y Extraordinario de Capacitaciones dirigido a las dependencias ISO. El objetivo es cumplir con el 85% de ejecución del programa de capacitaciones, garantizando la formación continua en las dependencias ISO.</p>
                    </div>
                </div>

                <div class="highlight-modification-note">
                    <strong>IMPORTANTE</strong>
                    <p>La Escuela de Estudios Judiciales, como parte del proceso de apoyo dentro del Sistema de Gestión de Calidad del Organismo Judicial, debe ser evaluada al menos una vez al año, tanto de forma interna como externa.</p>
                    <p>Estas evaluaciones realizadas mediante auditorías internas llevadas a cabo por la Secretaría de Planificación y Desarrollo Institucional, con el objetivo de preparar a las dependencias incorporadas al Sistema de Gestión de Calidad para la auditoría externa, la cual es realizada por los delegados del ente certificador.</p>
                </div>
            </div>
        </section>

        <!-- Risk Management Modal -->
        <div id="riskModal" class="modal">
            <div class="modal-content">
                <span class="modal-close" id="closeRiskModal">&times;</span>
                <h3>Riesgos identificados - FO-PE-03</h3>
                <ul>
                    <li class="risk-item extreme">
                        <strong>1. Registro y Control Académico:</strong>
                        <p>Incremento en la carga de trabajo debido a la necesidad de gestionar procesos académicos de forma manual y con errores potenciales en la creación de cursos, asignación de discentes, generación de listados, registro de notas, y emisión de certificados. (Extremo)</p>
                    </li>
                    <li class="risk-item high">
                        <strong>2. Equipo electrónico y videoconferencia:</strong>
                        <p>Fallas técnicas frecuentes, problemas de conexión, baja calidad de video y audio, y tiempos de respuesta lentos durante las clases virtuales. (Alto)</p>
                    </li>
                    <li class="risk-item extreme">
                        <strong>3. Detección de necesidades de capacitación:</strong>
                        <p>Falta de agilidad y limitación en el alcance de insumos necesarios para elaborar el Programa de Formación Judicial y Administrativo para el personal del Organismo Judicial. (Extremo)</p>
                    </li>
                    <li class="risk-item extreme">
                        <strong>4. Espacio físico:</strong>
                        <p>Espacios físicos sin condiciones idóneas para el desarrollo de actividades académicas, lo cual afecta la funcionalidad de la institución y el bienestar de quienes la integran. (Extremo)</p>
                    </li>
                </ul>
            </div>
        </div>Acceso a la Carpeta Compartida de Documentos - SGT-ESEJ-2025

        <!-- FODA Modal -->
        <div id="fodaModal" class="modal">
            <div class="modal-content">
                <span class="modal-close" id="closeFodaModal">&times;</span>
                <h3>Análisis FODA de la Escuela de Estudios Judiciales (FO-PE-01)</h3>
                <div class="foda-button-group">
                    <button class="foda-button active" data-foda="fortalezas">F (Fortalezas)</button>
                    <button class="foda-button" data-foda="oportunidades">O (Oportunidades)</button>
                    <button class="foda-button" data-foda="debilidades">D (Debilidades)</button>
                    <button class="foda-button" data-foda="amenazas">A (Amenazas)</button>
                </div>
                <div class="foda-content-area">
                    <div id="foda-fortalezas" class="foda-category active">
                        <h4>FORTALEZAS (F)</h4>
                        <ul>
                            <li>Apoyo de la Corte Suprema de Justicia y del Consejo de la Carrera Judicial.</li>
                            <li>Reacreditación Internacional mediante certificación de Normas de Calidad NCR 1000:2019 de la Red Iberoamericana de Escuelas Judiciales-RIAEJ-.</li>
                            <li>Miembro de la Red Iberoamericana de Escuelas Judiciales-RIAEJ-.</li>                            <li>Procedimiento establecido para la detección de necesidades de capacitación para la construcción del Programa de Formación Judicial y Administrativo.</li>
                            <li>Plataforma virtual educativa para desarrollo de cursos e-learning y b-learning.</li>
                            <li>Licencias de uso de plataformas de comunicación para la realización de reuniones virtuales.</li>
                            <li>Espacio físico idóneo en la Sede Central para el desarrollo de capacitaciones (juzgado modelo, sala de debates, laboratorios de computación).</li>
                            <li>Personal competente, identificado con la institution y con vocación de servicio.</li>
                            <li>Biblioteca física y virtual.</li>
                            <li>Sedes regionales en Chiquimula y Quetzaltenango.</li>
                        </ul>
                    </div>
                    <div id="foda-oportunidades" class="foda-category">
                        <h4>OPORTUNIDADES (O)</h4>
                        <ul>
                            <li>Organismos internacionales interesados en dar apoyo a instituciones gubernamentales.</li>
                            <li>Programas académicos con Escuelas de Iberoamérica por medio de programas conjuntos con RIAEJ y SICA.</li>
                            <li>Apoyo de las autoridades.</li>
                            <li>Acceso a la tecnología para resguardo digital de documentación.</li>
                            <li>Digitalización de expedientes de actividades académicas y almacenamiento en la nube del Organismo Judicial.</li>
                        </ul>
                    </div>
                    <div id="foda-debilidades" class="foda-category">
                        <h4>DEBILIDADES (D)</h4>
                        <ul>
                            <li>Registro masivo de discentes realizado de forma manual en el Sistema de Convocatorias.</li>
                            <li>No contar con planta eléctrica en la Sede Central.</li>
                            <li>Bodega llena con material obsoleto (sillas, escritorios, entre otros).</li>
                            <li>Sistema informático para el registro y control académico, desactualizado.</li>
                            <li>Insuficiencia en el equipo electrónico de videoconferencia, cámaras web y equipo de cómputo de escritorio desactualizado.</li>
                            <li>No contar con espacio para el archivo general de documentación.</li>
                            <li>No contar con vehículos suficientes para mensajería y traslado de discentes.</li>
                            <li>No contar con una herramienta informática para la Detección de Necesidades de Capacitación.</li>
                            <li>Inexistencia de suficiente espacio para parqueo de los discentes.</li>
                            <li>Limitación de espacio físico en las instalaciones de la ESEJ, para retornar completamente con actividades presenciales (Personal administrativo y discentes)</li>
                            <li>Infraestructura de la Escuela de Estudios Judiciales deteriorada por falta de mantenimiento y las inclemencias del tiempo debido al cambio climático.</li>
                        </ul>
                    </div>
                    <div id="foda-amenazas" class="foda-category">
                        <h4>AMENAZAS (A)</h4>
                        <ul>
                            <li>Asignación presupuestaria limitada para el Organismo Judicial.</li>
                            <li>Inestabilidad del servidor informático Institucional.</li>
                            <li>Limitación en el acceso a servicios de internet por parte de los discentes para acceder a las capacitaciones.</li>
                            <li>Requerimientos de capacitación emergentes y con plazos muy cortos para su ejecución que pongan en riesgo su implementación.</li>
                            <li>Inasistencia de discentes por la programación de capacitaciones fuera de horario de oficina.</li>
                            <li>Limitación de presupuesto para acceder a los Avances tecnológicos (Moodle, laptops, cámaras de vigilancia, cámaras web, proyectores, inteligencia artificial, entre otros).</li>
                            <li>Daño del equipo de la Escuela por la inestabilidad en el servicio eléctrico.</li>
                            <li>Proceso de contratación y/o asignación de personal a la Escuela, para el apoyo de Coordinaciones, Sedes Regionales, Áreas de Mantenimiento y correspondencia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section id="recursos">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 25px;">Recursos y Documentación</h2>
                
                <!-- MODIFICADO: Contenedor para los botones -->
                <div class="lineamientos-buttons-container">
                    <!-- BOTÓN 1 (Izquierda) -->
                    <details class="sgc-lineamientos-dropdown">
                        <summary class="sgc-lineamientos-summary" style="padding: 8px 16px; font-size: 0.9em;">
                            Lineamientos del SGC
                        </summary>
                        <div class="sgc-lineamientos-content">
                            <p><strong>Archivo:</strong><br>Lineamientos del SGC del Organismo Judicial.</p>
                            <p><a href="https://github.com/giovanni-1990/Lineamientos-SGC/raw/main/LINEAMIENTOS%20DEL%20SISTEMA%20DE%20GESTI%C3%93N%20DE%20CALIDAD%202024.pdf" target="_blank" style="color: var(--accent-blue-main); text-decoration: underline;">Descargar Lineamientos del SGC</a></p>
                        </div>
                    </details>
                    
                    <!-- BOTÓN 2 (Derecha) -->
                    <details class="sgc-lineamientos-dropdown">
                        <summary class="sgc-lineamientos-summary" style="padding: 8px 16px; font-size: 0.9em;">
                            Manual de Procedimientos
                        </summary>
                        <div class="Manual-lineamientos-content">
                            <p><strong>Archivo:</strong><br>Manual de Procedimientos de la Escuela de Estudios Judiciales.</p>
                            <p><a href="https://github.com/giovanni-1990/Manual-de-procedimientos/raw/main/PROYECTO_DE_MANUAL_DE_PROCEDIMIENTOS_ESCUELA_DE_ESTUDIOS_JUDICIALES_-_AGOSTO_2023.pdf" target="_blank" style="color: var(--accent-blue-main); text-decoration: underline;">Descargar Manual de Procedimientos</a></p>
                        </div>
                    </details>
                </div>
                  <p>Se cuenta con una carpeta compartida en la que podrán encontrar información actualizada. Por ello es recomendable revisarla con frecuencia y asegurarse de usar siempre la versión vigente de cada documento.</p>
                <ul>
                    <li>✅ Formatos autorizados (última versión): Es importante asegurarse de que los documentos que utilicen coincidan con la versión más reciente.</li>
                    <li>📆 Programación bimensual de actividades.</li>
                </ul>

                <!-- Sección Importante -->
                <div class="highlight-modification-note" style="margin-top: 30px;">
                    <h3 style="color: var(--accent-blue-darker); border-left: 4px solid var(--accent-gold); padding-left: 15px; margin-bottom: 20px;">¡IMPORTANTE!</h3>
                    <p>En caso de requerirse alguna modificación al documento que implique un cambio de versión o la incorporación de nuevos archivos a ser codificados, esta deberá contar previamente con el visto bueno o validación del jefe inmediato. Posteriormente, se emitirá la notificación correspondiente a través de correo electrónico, una vez efectuada la actualización en la carpeta compartida.</p>
                </div>

                <!-- Sección Carpeta Compartida -->
                <div class="shared-folder-info" style="margin-top: 30px;">
                    <h3 style="color: var(--accent-blue-darker); border-left: 4px solid var(--accent-gold); padding-left: 15px; margin-bottom: 20px;">Acceso a la Carpeta Compartida de Documentos - SGT-ESEJ-2025</h3>
                    <p class="folder-path" id="sharedFolderPath">file://0101192046GA/Users/HGarias/Desktop/SGT%20-%20ESEJ%20-%202025</p>
                    <button class="action-button" id="copyLinkButton" onclick="copyToClipboard('sharedFolderPath')" style="font-size: 0.9em; padding: 8px 15px; margin-top: 10px; background-color: var(--accent-blue-lighter); color: white; border-color: var(--accent-blue-main);">Copiar Enlace</button>
                    <p style="margin-top: 15px;"><small>Para abrir un enlace de acceso local en Windows, primero cópielo dando clic sobre el botón “Copiar Enlace” o bien seleccionando el texto y seleccionando "Copiar". Luego, abra el Explorador de archivos presionando las teclas Windows + E o haciendo clic en el icono de carpeta. Una vez abierto, haz clic en la barra de direcciones en la parte superior, borra el texto existente, pegue el enlace copiado con Ctrl + V y presione Enter. Esto le llevará directamente al destino indicado por el enlace.</small></p>
                </div>

                <div style="text-align: center; margin-top: 40px;">
                    <a href="https://forms.gle/EwHnPtgEq4NmJTXw6" target="_blank" class="action-button">Registro de Asistencia</a>
                </div>
                </div>

                <!-- INICIO: SECCIÓN DE DIRECTORIO DE DOCENTES (INTEGRADA) --><div id="red-docente" class="section-title-wrapper">
                    <h3 style="font-size: 2em; color: var(--accent-blue-darker); border-left: 4px solid var(--accent-gold); padding-left: 15px; margin: 0; display: flex; align-items: center;">
                        <i class="fas fa-chalkboard-teacher" style="margin-right: 15px;"></i>
                        Red Docente de la Escuela de Estudios Judiciales
                    </h3>
                </div>
                <p style="margin-top:15px; margin-bottom: 30px; text-align: justify;">La Escuela cuenta con una red de profesionales de alto nivel, incluyendo magistrados, jueces y expertos en diversas áreas, que garantizan una formación de excelencia. Utilice el siguiente directorio interactivo para explorar los perfiles de los docentes, filtrar por área de especialidad y conocer sus competencias.</p>
                
                <div id="docentes-directory">
                    <div class="summary-panel">
                        <div class="summary-box total-box"><div id="total-judges" class="summary-number"></div><div class="summary-label">Total de Registros</div></div>
                        <div class="summary-box list-box"><h3 class="summary-title">Registros por Cargo</h3><ul id="cargo-stats-list" class="summary-list"></ul></div>
                        <div class="summary-box list-box"><h3 class="summary-title">Top 15 Áreas de Docencia</h3><ul id="expertise-stats-list" class="summary-list"></ul></div>
                    </div>
                    <div class="filters-container">
                        <h4 class="filters-header">Filtros de Búsqueda</h4>
                        <div class="filter-grid">
                            <div class="filter-group"><label for="filter-name">Nombre</label><input type="text" id="filter-name" placeholder="Buscar por nombre..."></div>
                            <div class="filter-group"><label for="filter-cargo">Cargo</label><select id="filter-cargo"><option value="">Todos los Cargos</option></select></div>
                            <div class="filter-group"><label for="filter-judicatura">Judicatura</label><select id="filter-judicatura"><option value="">Todas las Judicaturas</option></select></div>
                            <div class="filter-group"><label for="filter-docencia">Área de Docencia</label><select id="filter-docencia"><option value="">Todas las Áreas</option></select></div>
                            <div class="filter-group"><label for="filter-estado">Estado</label><select id="filter-estado"><option value="">Todos</option><option value="ACTIVO">Activo</option><option value="BAJA">Baja</option></select></div>
                        </div>
                        <div class="filter-buttons"><button id="reset-filters">Limpiar Filtros</button></div>
                    </div>
                    <div id="results-count"></div>
                    <div id="judges-container"></div>                </div>                <!-- FIN: SECCIÓN DE DIRECTORIO DE DOCENTES (INTEGRADA) -->
                
                </div>            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p><strong>Escuela de Estudios Judiciales</strong></p>
            <p><em>“Formación para la Justicia y la Paz”</em></p>
            <p>Reacreditación Internacional Norma de Calidad RIAEJ 1000:2019</p>
            <p>Lote 12, finca San Gaspar, aldea Santa Rosita, zona 16, ciudad de Guatemala, C.A.</p>
            <p>PBX: 2290-3939 | <a href="http://www.oj.gob.gt/esej" target="_blank">www.oj.gob.gt/esej</a></p>
        </div>
    </footer>

    <!-- MODIFICADO: Pie de página del autor (ahora fijo) -->
    <div class="version-footer">
        <div class="container">
             Creado por: Giovanni Arias – Gestor de Calidad: Versión: 5.0
        </div>
    </div>

    <!-- MODIFICADO: Contador de interacciones (ahora fijo sobre el footer del autor) -->
    <div id="viewCounter">
        Vistas: <span id="views">0</span> | Interacciones: <span id="interactions">0</span>
    </div>

    <!-- MODAL PARA IMAGEN DE POLÍTICA DE CALIDAD -->
    <div id="politicaImageModal" class="image-modal">
        <div class="image-modal-content">
            <span class="image-modal-close" id="closePoliticaImageModal">&times;</span>
            <img id="politicaModalImage" src="" alt="Política de Calidad del Organismo Judicial" class="modal-image-display">
        </div>
    </div>

    <!-- MODAL PARA IMAGEN DE OBJETIVOS DE CALIDAD -->
    <div id="objetivosImageModal" class="image-modal">
        <div class="image-modal-content">
            <span class="image-modal-close" id="closeObjetivosImageModal">&times;</span>
            <img id="objetivosModalImage" src="" alt="Objetivos de Calidad del Organismo Judicial" class="modal-image-display">
        </div>
    </div>

    <!-- ===== INICIO MODAL PARA CARRUSEL FICHA DE PROCESOS ===== -->
    <div id="fichaProcesosModal" class="image-modal">
        <div class="image-modal-content">
            <span class="image-modal-close" id="closeFichaProcesosModal">&times;</span>
            <!-- Estructura del Carrusel -->
            <div class="carousel-container">
                <div class="carousel-slides">
                    <!-- Diapositiva 1 -->
                    <div class="carousel-slide">
                        <img src="https://raw.githubusercontent.com/giovanni-1990/objetivos-y-politicas/refs/heads/main/FICHA%20DE%20PROCESOS%20-%202025-1-3_page-0001.jpg" alt="Ficha de Procesos Página 1">
                    </div>
                    <!-- Diapositiva 2 -->
                    <div class="carousel-slide">
                        <img src="https://raw.githubusercontent.com/giovanni-1990/objetivos-y-politicas/refs/heads/main/FICHA%20DE%20PROCESOS%20-%202025-1-3_page-0002.jpg" alt="Ficha de Procesos Página 2">
                    </div>
                    <!-- Diapositiva 3 -->
                    <div class="carousel-slide">
                        <img src="https://raw.githubusercontent.com/giovanni-1990/objetivos-y-politicas/refs/heads/main/FICHA%20DE%20PROCESOS%20-%202025-1-3_page-0003.jpg" alt="Ficha de Procesos Página 3">
                    </div>
                </div>
                <!-- Botones de navegación -->
                <button class="carousel-button prev">&#10094;</button>
                <button class="carousel-button next">&#10095;</button>
                <!-- Puntos indicadores -->
                <div class="carousel-dots"></div>
            </div>
        </div>
    </div>
    <!-- ===== FIN MODAL PARA CARRUSEL FICHA DE PROCESOS ===== -->


    <div id="tour-overlay"></div>
    <div id="tour-highlight-box"></div>
    <div id="tour-popover">
        <h4 id="tour-title"></h4>
        <p id="tour-text"></p>
        <div class="tour-navigation">
            <button id="tour-prev">Anterior</button>
            <span id="tour-step-indicator"></span>
            <button id="tour-next">Siguiente</button>
        </div>
         <button id="tour-end" style="width:100%; margin-top:15px; background-color: var(--text-secondary); color: var(--bg-primary);">Finalizar Tour</button>
    </div>


<script>
        // Theme Toggle
        const themeCheckbox = document.getElementById('theme-checkbox');
        const currentTheme = localStorage.getItem('theme');

        function applyTheme(theme) {
            if (theme === 'dark') {
                document.body.classList.add('dark-theme');
                if(themeCheckbox) themeCheckbox.checked = true;
            } else {
                document.body.classList.remove('dark-theme');
                 if(themeCheckbox) themeCheckbox.checked = false;
            }
        }

        if (currentTheme) {
            applyTheme(currentTheme);
        } else {
             applyTheme('light'); // Default to light theme
        }

        if(themeCheckbox) {
            themeCheckbox.addEventListener('change', () => {
                let theme = themeCheckbox.checked ? 'dark' : 'light';
                localStorage.setItem('theme', theme);
                applyTheme(theme);
                incrementInteraction();
            });
        }

        // Accordion
        function initializeAccordions() {
            const accordionItems = document.querySelectorAll('.accordion-item');
            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                if (header) {
                    header.addEventListener('click', () => {
                        item.classList.toggle('active');
                        incrementInteraction();
                    });
                }
            });
        }
        initializeAccordions();


        // Nav active state on scroll
        const mainNav = document.getElementById('main-nav');
        const navLinks = mainNav.querySelectorAll('ul li a');
        const sections = document.querySelectorAll('main section');

        window.addEventListener('scroll', () => {
            let currentId = '';
            const headerElement = document.querySelector('header');
            const headerHeight = headerElement ? headerElement.offsetHeight : 0;
            const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;


            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (scrollPosition >= sectionTop - headerHeight - 50) {
                    currentId = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') && link.getAttribute('href').substring(1) === currentId) {
                    link.classList.add('active');
                }
            });
        });

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const headerElement = document.querySelector('header');
                    const headerOffset = headerElement ? headerElement.getBoundingClientRect().height + 20 : 20;
                    const elementPosition = targetElement.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop);
                    const offsetPosition = elementPosition - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });

                    if (mainNav.classList.contains('mobile-nav-open')) {
                        mainNav.classList.remove('mobile-nav-open');
                        if (mobileNavToggle) {
                             mobileNavToggle.setAttribute('aria-expanded', 'false');
                             mobileNavToggle.setAttribute('aria-label', 'Abrir menú de navegación');
                        }
                    }
                     navLinks.forEach(lnk => lnk.classList.remove('active'));
                     this.classList.add('active');
                }
                incrementInteraction();
            });
        });


        // Clipboard copy
        function copyToClipboard(elementId) {
            const textToCopy = document.getElementById(elementId).innerText;
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(textToCopy).then(() => {
                    alert('Enlace copiado al portapapeles!');
                }).catch(err => {
                    console.error('Error al copiar el enlace con API: ', err);
                    fallbackCopyToClipboard(textToCopy);
                });
            } else {
                fallbackCopyToClipboard(textToCopy);
            }
            incrementInteraction();
        }
        function fallbackCopyToClipboard(text) {
            const textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed"; textArea.style.left = "-9999px"; textArea.style.top = "-9999px";
            document.body.appendChild(textArea);
            textArea.focus(); textArea.select();
            try {
                document.execCommand('copy');
                alert('Enlace copiado al portapapeles (método alternativo)!');
            } catch (err) {
                console.error('Error al copiar el enlace con execCommand: ', err);
                alert('Error al copiar. Por favor, copie manualmente el enlace.');
            }
            document.body.removeChild(textArea);
        }

        // Risk Modal
        const riskModal = document.getElementById("riskModal");
        const openRiskModalCard = document.getElementById("openRiskModalCard");
        const closeRiskModal = document.getElementById("closeRiskModal");

        if(openRiskModalCard) {
            openRiskModalCard.onclick = () => {
                if(riskModal) riskModal.style.display = "block";
                incrementInteraction();
            }
        }
        if(closeRiskModal) {
            closeRiskModal.onclick = () => {
                if(riskModal) riskModal.style.display = "none";
                incrementInteraction();
            }
        }

        // FODA Modal
        const fodaModal = document.getElementById("fodaModal");
        const openFodaModalButton = document.getElementById("openFodaModalButton");
        const closeFodaModal = document.getElementById("closeFodaModal");
        const fodaButtons = document.querySelectorAll(".foda-button");
        const fodaCategories = document.querySelectorAll(".foda-content-area .foda-category");

        if(openFodaModalButton) {
            openFodaModalButton.onclick = () => {
                if(fodaModal) fodaModal.style.display = "block";
                incrementInteraction();
            }
        }
        if(closeFodaModal) {
            closeFodaModal.onclick = () => {
                if(fodaModal) fodaModal.style.display = "none";
                incrementInteraction();
            }
        }

        fodaButtons.forEach(button => {
            button.addEventListener("click", () => {
                const targetFoda = button.dataset.foda;

                fodaButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");

                fodaCategories.forEach(category => {
                    if (category.id === `foda-${targetFoda}`) {
                        category.classList.add("active");
                    } else {
                        category.classList.remove("active");
                    }
                });
                incrementInteraction();
            });
        });

        // --- LÓGICA PARA MODALES DE IMAGEN ---
        const politicaImageModal = document.getElementById("politicaImageModal");
        const politicaModalImage = document.getElementById("politicaModalImage");
        const openPoliticaImageBtn = document.getElementById("viewPoliticaImageBtn");
        const closePoliticaImageModal = document.getElementById("closePoliticaImageModal");
        const politicaImageUrl = "https://raw.githubusercontent.com/giovanni-1990/objetivos-y-politicas/refs/heads/main/POLITICA%20DE%20CALIDAD.jfif";

        const objetivosImageModal = document.getElementById("objetivosImageModal");
        const objetivosModalImage = document.getElementById("objetivosModalImage");
        const openObjetivosImageBtn = document.getElementById("viewObjetivosImageBtn");
        const closeObjetivosImageModal = document.getElementById("closeObjetivosImageModal");
        const objetivosImageUrl = "https://raw.githubusercontent.com/giovanni-1990/objetivos-y-politicas/refs/heads/main/OBJETIVOS%20DE%20CALIDAD.jfif";

        if (openPoliticaImageBtn && politicaImageModal && politicaModalImage) {
            openPoliticaImageBtn.onclick = () => {
                politicaModalImage.src = politicaImageUrl;
                politicaImageModal.style.display = "block";
                incrementInteraction();
            }
        }
        if (closePoliticaImageModal && politicaImageModal) {
            closePoliticaImageModal.onclick = () => {
                politicaImageModal.style.display = "none";
                incrementInteraction();
            }
        }

        if (openObjetivosImageBtn && objetivosImageModal && objetivosModalImage) {
            openObjetivosImageBtn.onclick = () => {
                objetivosModalImage.src = objetivosImageUrl;
                objetivosImageModal.style.display = "block";
                incrementInteraction();
            }
        }
        if (closeObjetivosImageModal && objetivosImageModal) {
            closeObjetivosImageModal.onclick = () => {
                objetivosImageModal.style.display = "none";
                incrementInteraction();
            }
        }
        
        // --- Lógica para el modal del carrusel Ficha de Procesos ---
        const fichaProcesosModal = document.getElementById("fichaProcesosModal");
        const openFichaProcesosBtn = document.getElementById("openFichaProcesosBtn");
        const closeFichaProcesosModal = document.getElementById("closeFichaProcesosModal");

        if (openFichaProcesosBtn && fichaProcesosModal) {
            openFichaProcesosBtn.onclick = () => {
                fichaProcesosModal.style.display = "block";
                incrementInteraction();
            }
        }
        if (closeFichaProcesosModal && fichaProcesosModal) {
            closeFichaProcesosModal.onclick = () => {
                fichaProcesosModal.style.display = "none";
                incrementInteraction();
            }
        }


        // Close modals on outside click
        window.onclick = function(event) {
            if (riskModal && event.target == riskModal) {
                riskModal.style.display = "none";
                incrementInteraction();
            }
            if (fodaModal && event.target == fodaModal) {
                fodaModal.style.display = "none";
                incrementInteraction();
            }
            if (politicaImageModal && event.target == politicaImageModal) {
                politicaImageModal.style.display = "none";
                incrementInteraction();
            }
            if (objetivosImageModal && event.target == objetivosImageModal) {
                objetivosImageModal.style.display = "none";
                incrementInteraction();
            }
            // Añadir el nuevo modal a la lógica de cierre exterior
            if (fichaProcesosModal && event.target == fichaProcesosModal) {
                fichaProcesosModal.style.display = "none";
                incrementInteraction();
            }
        }

        // View and Interaction Counter
        const viewsSpan = document.getElementById('views');
        const interactionsSpan = document.getElementById('interactions');
        let viewCount = parseInt(localStorage.getItem('pageViews_sgcEEJ_v4')) || 0;
        let interactionCount = parseInt(localStorage.getItem('pageInteractions_sgcEEJ_v4')) || 0;

        viewCount++;
        localStorage.setItem('pageViews_sgcEEJ_v4', viewCount);
        if(viewsSpan) viewsSpan.textContent = viewCount;
        if(interactionsSpan) interactionsSpan.textContent = interactionCount;

        function incrementInteraction() {
            interactionCount++;
            localStorage.setItem('pageInteractions_sgcEEJ_v4', interactionCount);
            if(interactionsSpan) interactionsSpan.textContent = interactionCount;
        }

        document.querySelectorAll('.action-button, .risk-details-button, .directory-link-inline, .accordion-header, .foda-button, .modal-close, .image-modal-close, .view-image-button').forEach(element => {
            element.addEventListener('click', incrementInteraction);
        });
        
        // --- Lógica para la funcionalidad del Carrusel de Ficha de Procesos ---
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.querySelector('#fichaProcesosModal .carousel-container');
            // Si el carrusel no está en la página, no hacer nada para evitar errores
            if (!carousel) return;

            // Seleccionar los elementos del DOM específicos de este carrusel
            const slidesContainer = carousel.querySelector('.carousel-slides');
            const slides = carousel.querySelectorAll('.carousel-slide');
            const prevButton = carousel.querySelector('.carousel-button.prev');
            const nextButton = carousel.querySelector('.carousel-button.next');
            const dotsContainer = carousel.querySelector('.carousel-dots');

            let currentIndex = 0;
            const totalSlides = slides.length;

            // Crear los puntos indicadores dinámicamente
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                dot.addEventListener('click', () => {
                    goToSlide(i);
                });
                dotsContainer.appendChild(dot);
            }

            const dots = carousel.querySelectorAll('.dot');

            // Función para actualizar el carrusel
            function updateCarousel() {
                slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Función para ir a una diapositiva específica
            function goToSlide(slideIndex) {
                currentIndex = slideIndex;
                updateCarousel();
            }

            // Event Listeners para los botones
            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });
            
            // Inicializar el carrusel en la primera diapositiva
            updateCarousel();
        });


        // --- Lógica para el Tour Interactivo ---
        const tourOverlay = document.getElementById('tour-overlay');
        const tourHighlightBox = document.getElementById('tour-highlight-box');
        const tourPopover = document.getElementById('tour-popover');
        const tourTitle = document.getElementById('tour-title');
        const tourText = document.getElementById('tour-text');
        const tourPrevBtn = document.getElementById('tour-prev');
        const tourNextBtn = document.getElementById('tour-next');
        const tourEndBtn = document.getElementById('tour-end');
        const startTourBtn = document.getElementById('startTourBtn');
        const tourStepIndicator = document.getElementById('tour-step-indicator');

        let isTourActive = false; // Flag to track if tour is running
        let currentTourStep = 0;

        const tourSteps = [
            {
                element: '#main-nav',
                title: '1. Navegación Principal',
                text: 'Este es el menú de navegación. Desde aquí puedes acceder rápidamente a todas las secciones importantes de la página.',
                position: 'right',
                onBefore: () => {
                    if (window.innerWidth <= 768 && !mainNav.classList.contains('mobile-nav-open')) {
                        mainNav.classList.add('mobile-nav-open', 'mobile-nav-open-by-tour');
                         if(mobileNavToggle) {
                            mobileNavToggle.setAttribute('aria-expanded', 'true');
                            mobileNavToggle.setAttribute('aria-label', 'Cerrar menú de navegación');
                         }
                    }
                },
                onAfter: () => {
                     if (window.innerWidth <= 768 && mainNav.classList.contains('mobile-nav-open-by-tour')) {
                        mainNav.classList.remove('mobile-nav-open-by-tour');
                     }
                }
            },
            {
                element: '.theme-switch-wrapper',
                title: '2. Selector de Tema',
                text: 'Usa este interruptor para cambiar entre el tema claro y oscuro según tu preferencia visual.',
                position: 'bottom-left'
            },
            {
                element: '#escuela',
                title: '3. Apartado: Escuela de Estudios Judiciales',
                text: 'Esta sección presenta información general sobre la Escuela de Estudios Judiciales, su misión y constitución.',
                position: 'bottom'
            },
            {
                element: '#sgc',
                title: '4. Apartado: SGC ISO 9001:2015',
                text: 'Aquí encontrarás la definición, objetivo principal y componentes clave del Sistema de Gestión de Calidad bajo la norma ISO 9001:2015, incluyendo el alcance en el Organismo Judicial.',
                position: 'top'
            },
            {
                element: '#roles',
                title: '5. Apartado: Roles y Funciones',
                text: 'En esta sección se describen los roles y funciones dentro del Sistema de Gestión de Calidad, destacando la importancia del Comité de Calidad.',
                position: 'top'
            },
            {
                element: '#objetivos',
                title: '6. Apartado: Objetivos de Calidad',
                text: 'Esta sección enlista los Objetivos de Calidad del Organismo Judicial. Para ver el detalle de cada objetivo, puedes hacer clic sobre su encabezado para expandirlo (simulando un "Ver documento" individual).',
                position: 'top'
            },
            {
                element: '#objetivos .accordion-item:first-child .accordion-header',
                title: '7. Objetivos de Calidad (Interacción)',
                text: 'Haz clic en encabezados como este para expandir y ver el detalle de cada objetivo. Esta es la forma de "ver el documento" o detalle de cada uno.',
                position: 'bottom'
            },
            {
                element: '#beneficios',
                title: '8. Apartado: Beneficios',
                text: 'Descubre los beneficios clave de implementar un Sistema de Gestión de Calidad conforme a la NTC ISO 9001:2015.',
                position: 'top'
            },
            {
                element: '#eej-sgc',
                title: '9. Apartado: EEJ en el SGC',
                text: 'Conoce el rol de la Escuela de Estudios Judiciales dentro del SGC y los documentos auditables asociados a su gestión.',
                position: 'top'
            },
            {
                element: '#openFodaModalButton',
                title: '9.1 Botón "Ver FODA"',
                text: 'Haz clic en este botón para abrir una ventana modal con el análisis FODA (Fortalezas, Oportunidades, Debilidades, Amenazas) de la Escuela de Estudios Judiciales.',
                position: 'bottom'
            },
            {
                element: '#openRiskModalCard .risk-details-button', 
                title: '9.2 Botón "Ver Riesgos"',
                text: 'Al hacer clic aquí (o en la tarjeta), se mostrarán los principales riesgos identificados para la Escuela y su gestión.',
                position: 'top'
            },
            {
                element: '#recursos .shared-folder-info', 
                title: '10. Acceso a Carpeta Compartida (SGT-ESEJ-2025)',
                text: 'Esta sección te informa sobre la carpeta compartida <strong>SGT-ESEJ-2025</strong>. Esta carpeta es crucial ya que permite ingresar a todos los documentos codificados y actualizados del SGC, como formatos, manuales y procedimientos. Utiliza el botón "Copiar Enlace" para acceder fácilmente desde tu explorador de archivos.',
                position: 'top'
            },
            { 
                element: '#viewCounter',
                title: 'Final del Tour',
                text: '¡Gracias por realizar el tour! Ahora conoces mejor la estructura y funcionalidades de esta página. El contador de abajo registra las visitas e interacciones.',
                position: 'top-left'
            }
        ];
        
        // Helper function to be called on scroll and resize
        function updateTourPopoverPositionOnScrollOrResize() {
            if (!isTourActive || currentTourStep < 0 || currentTourStep >= tourSteps.length) {
                return;
            }
            const step = tourSteps[currentTourStep];
            const targetElement = document.querySelector(step.element);

            if (targetElement && tourPopover.style.display === 'block' && tourOverlay.style.display === 'block') {
                requestAnimationFrame(() => { 
                    positionPopover(targetElement, tourPopover, step.position);
                });
            }
        }

        function positionPopover(targetElement, popoverElement, position = 'bottom') {
            const targetRect = targetElement.getBoundingClientRect();

            const originalPopoverDisplay = popoverElement.style.display;
            const originalPopoverVisibility = popoverElement.style.visibility;

            popoverElement.style.visibility = 'hidden';
            popoverElement.style.display = 'block'; 
            const popoverRect = popoverElement.getBoundingClientRect();
            popoverElement.style.display = originalPopoverDisplay;
            popoverElement.style.visibility = originalPopoverVisibility;

            const highlightPadding = 5;
            const currentScrollX = window.pageXOffset || document.documentElement.scrollLeft;
            const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;

            tourHighlightBox.style.top = (targetRect.top - highlightPadding + currentScrollY) + 'px';
            tourHighlightBox.style.left = (targetRect.left - highlightPadding + currentScrollX) + 'px';
            tourHighlightBox.style.width = (targetRect.width + 2 * highlightPadding) + 'px';
            tourHighlightBox.style.height = (targetRect.height + 2 * highlightPadding) + 'px';
            
            if (tourOverlay.style.display === 'block') {
                tourHighlightBox.style.display = 'block';
                tourHighlightBox.classList.add('active-highlight');
            } else {
                 tourHighlightBox.style.display = 'none';
                 tourHighlightBox.classList.remove('active-highlight');
            }

            const popoverMargin = 15;
            let top, left;

            switch (position) {
                case 'top':
                    top = targetRect.top - popoverRect.height - popoverMargin + currentScrollY;
                    left = targetRect.left + (targetRect.width / 2) - (popoverRect.width / 2) + currentScrollX;
                    break;
                case 'right':
                    top = targetRect.top + (targetRect.height / 2) - (popoverRect.height / 2) + currentScrollY;
                    left = targetRect.right + popoverMargin + currentScrollX;
                    break;
                case 'left':
                    top = targetRect.top + (targetRect.height / 2) - (popoverRect.height / 2) + currentScrollY;
                    left = targetRect.left - popoverRect.width - popoverMargin + currentScrollX;
                    break;
                case 'bottom-left':
                    top = targetRect.bottom + popoverMargin + currentScrollY;
                    left = targetRect.left + currentScrollX;
                    break;
                case 'top-left':
                     top = targetRect.top - popoverRect.height - popoverMargin + currentScrollY;
                     left = targetRect.left + currentScrollX;
                     break;
                case 'bottom':
                default:
                    top = targetRect.bottom + popoverMargin + currentScrollY;
                    left = targetRect.left + (targetRect.width / 2) - (popoverRect.width / 2) + currentScrollX;
                    break;
            }

            const docWidth = document.documentElement.clientWidth;
            const docHeight = document.documentElement.clientHeight;

            if (left < currentScrollX + popoverMargin) {
                left = currentScrollX + popoverMargin;
            }
            if (left + popoverRect.width > currentScrollX + docWidth - popoverMargin) {
                left = currentScrollX + docWidth - popoverRect.width - popoverMargin;
            }
            if (top < currentScrollY + popoverMargin) {
                top = currentScrollY + popoverMargin;
            }
            if (top + popoverRect.height > currentScrollY + docHeight - popoverMargin) {
                 top = currentScrollY + docHeight - popoverRect.height - popoverMargin;
            }

            popoverElement.style.top = top + 'px';
            popoverElement.style.left = left + 'px';
        }

        function showTourStep(index) {
            if (index < 0 || index >= tourSteps.length) {
                endTour();
                return;
            }

            if (currentTourStep >= 0 && currentTourStep < tourSteps.length && tourSteps[currentTourStep] && typeof tourSteps[currentTourStep].onAfter === 'function') {
                tourSteps[currentTourStep].onAfter();
            }

            currentTourStep = index;
            const step = tourSteps[index];
            const targetElement = document.querySelector(step.element);

            if (!targetElement) {
                console.warn(`Tour step element not found: ${step.element}. Skipping.`);
                if (index < tourSteps.length -1) { 
                    showTourStep(index + 1);
                } else if (index > 0) {
                    showTourStep(index -1);
                } else {
                    endTour(); 
                }
                return;
            }

            if (typeof step.onBefore === 'function') {
                step.onBefore();
            }
            
            tourOverlay.style.display = 'block';
            tourPopover.style.display = 'none'; // Hide popover initially
            tourHighlightBox.style.display = 'none'; // Hide highlight box initially
            tourHighlightBox.classList.remove('active-highlight');
            
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'center' });

            setTimeout(() => {
                if (!isTourActive || currentTourStep !== index) {
                    return; // Tour ended or changed step during timeout
                }
                tourTitle.textContent = step.title;
                tourText.innerHTML = step.text;
                
                positionPopover(targetElement, tourPopover, step.position); 
                tourPopover.style.display = 'block'; 

                tourPrevBtn.disabled = index === 0;
                tourNextBtn.textContent = (index === tourSteps.length - 1) ? 'Finalizar' : 'Siguiente';
                tourStepIndicator.textContent = `${index + 1} / ${tourSteps.length}`;

            }, 450); 
        }

        function nextTourStep() {
            incrementInteraction();
            if (currentTourStep < tourSteps.length - 1) {
                showTourStep(currentTourStep + 1);
            } else {
                endTour();
            }
        }

        function prevTourStep() {
            incrementInteraction();
            if (currentTourStep > 0) {
                showTourStep(currentTourStep - 1);
            }
        }
        
        function endTour(markAsCompleted = true) {
            incrementInteraction();
            isTourActive = false; 
            window.removeEventListener('scroll', updateTourPopoverPositionOnScrollOrResize, true);
            window.removeEventListener('resize', updateTourPopoverPositionOnScrollOrResize);

            tourOverlay.style.display = 'none';
            tourHighlightBox.style.display = 'none';
            tourHighlightBox.classList.remove('active-highlight');
            tourPopover.style.display = 'none';
            
            if (markAsCompleted) {
                localStorage.setItem('sgcEEJTourCompleted_v1', 'true');
            }
            
            if (window.innerWidth <= 768 && mainNav.classList.contains('mobile-nav-open') && mainNav.classList.contains('mobile-nav-open-by-tour')) {
                mainNav.classList.remove('mobile-nav-open', 'mobile-nav-open-by-tour');
                 if(mobileNavToggle) {
                    mobileNavToggle.setAttribute('aria-expanded', 'false');
                    mobileNavToggle.setAttribute('aria-label', 'Abrir menú de navegación');
                 }
            }
            
            if (markAsCompleted && currentTourStep >= 0 && currentTourStep < tourSteps.length && tourSteps[currentTourStep] && typeof tourSteps[currentTourStep].onAfter === 'function') {
                 tourSteps[currentTourStep].onAfter();
            }
            currentTourStep = -1; 
        }

        if (startTourBtn) {
            startTourBtn.addEventListener('click', () => {
                incrementInteraction();
                currentTourStep = -1; 
                isTourActive = true; 
                window.addEventListener('scroll', updateTourPopoverPositionOnScrollOrResize, true);
                window.addEventListener('resize', updateTourPopoverPositionOnScrollOrResize);
                showTourStep(0);
            });
        }
        if (tourPrevBtn) tourPrevBtn.addEventListener('click', prevTourStep);
        if (tourNextBtn) tourNextBtn.addEventListener('click', nextTourStep);
        if (tourEndBtn) tourEndBtn.addEventListener('click', () => endTour(true));
        if (tourOverlay) tourOverlay.addEventListener('click', () => endTour(false)); 


        // --- Lógica para menú hamburguesa en móvil ---
        const mobileNavToggle = document.getElementById('mobile-nav-toggle');

        function checkMobileNavDisplay() { 
            if (window.innerWidth <= 768) {
                if (mobileNavToggle) mobileNavToggle.style.display = 'block';
            } else {
                if (mobileNavToggle) mobileNavToggle.style.display = 'none';
                if (mainNav && mainNav.classList.contains('mobile-nav-open')) {
                    mainNav.classList.remove('mobile-nav-open', 'mobile-nav-open-by-tour');
                    mainNav.style.transform = ''; 
                    if (mobileNavToggle) {
                        mobileNavToggle.setAttribute('aria-expanded', 'false');
                        mobileNavToggle.setAttribute('aria-label', 'Abrir menú de navegación');
                    }
                }
            }
        }

        if (mobileNavToggle && mainNav) {
            mobileNavToggle.addEventListener('click', () => {
                mainNav.classList.toggle('mobile-nav-open');
                mainNav.classList.remove('mobile-nav-open-by-tour'); 
                const isExpanded = mainNav.classList.contains('mobile-nav-open');
                mobileNavToggle.setAttribute('aria-expanded', isExpanded);
                mobileNavToggle.setAttribute('aria-label', isExpanded ? 'Cerrar menú de navegación' : 'Abrir menú de navegación');
                incrementInteraction();
            });
        }
        window.addEventListener('resize', checkMobileNavDisplay);
        document.addEventListener('DOMContentLoaded', checkMobileNavDisplay);

        // START OF INTEGRATED SCRIPT (DIAGRAM)
        document.addEventListener('DOMContentLoaded', () => {
            // --- DATOS DE LAS DESCRIPCIONES ---
            const roleDescriptions = {
                'presidente-oj': {
                    title: 'Presidente del Organismo Judicial',
                    description: `
                        <p><strong>Función Principal:</strong> Ejerce la máxima autoridad y representación del Poder Judicial. Lidera la dirección estratégica, administrativa y jurisdiccional de la institución.</p>
                        <p><strong>Aporte al SGC:</strong> Proporciona el respaldo institucional al más alto nivel. Su compromiso es fundamental para asegurar que la Política de Calidad se integre en toda la organización y se asignen los recursos estratégicos necesarios.</p>
                    `
                },
                'camara-penal': {
                    title: 'Presidente Cámara Penal',
                    description: `
                        <p><strong>Función Principal:</strong> Dirige la cámara especializada en materia penal, unificando la jurisprudencia y resolviendo recursos de alta instancia en este ámbito.</p>
                        <p><strong>Aporte al SGC:</strong> Asegura que los procesos y objetivos de calidad sean pertinentes y aplicables a la jurisdicción penal, garantizando que las mejoras no contravengan las normativas procesales específicas de la materia.</p>
                    `
                },
                'camara-civil': {
                    title: 'Presidente Cámara Civil',
                    description: `
                        <p><strong>Función Principal:</strong> Lidera la cámara especializada en materia civil y mercantil, conociendo recursos de casación y otros asuntos de su competencia para unificar criterios.</p>
                        <p><strong>Aporte al SGC:</strong> Alinea los objetivos del Sistema de Gestión de Calidad con las particularidades de los procesos civiles y mercantiles, velando por la eficiencia y estandarización en áreas de alto volumen procesal.</p>
                    `
                },
                'camara-amparo': {
                    title: 'Presidente Cámara de Amparo y Antejuicios',
                    description: `
                        <p><strong>Función Principal:</strong> Conoce y resuelve acciones constitucionales de amparo y procedimientos de antejuicio, velando por la protección de los derechos fundamentales.</p>
                        <p><strong>Aporte al SGC:</strong> Garantiza que todas las políticas y procedimientos del SGC respeten rigurosamente el debido proceso y los principios constitucionales, aportando una perspectiva de control de legalidad y derechos humanos.</p>
                    `
                },
                'planificacion': {
                    title: 'Secretaría de Planificación',
                    description: `
                        <p><strong>Función Principal:</strong> Unidad técnica responsable del diseño, seguimiento y evaluación de los planes estratégicos y operativos, así como del desarrollo institucional.</p>
                        <p><strong>Aporte al SGC:</strong> Proporciona la metodología, los indicadores y el soporte técnico para la implementación, medición y mejora continua del sistema. Es el brazo ejecutor y de seguimiento técnico del Comité.</p>
                    `
                },
                'gerente-general': {
                    title: 'Gerente General',
                    description: `
                        <p><strong>Función Principal:</strong> Encargado de la gestión administrativa, financiera y de recursos humanos del Organismo Judicial, asegurando el soporte operativo de la institución.</p>
                        <p><strong>Aporte al SGC:</strong> Garantiza que los recursos necesarios (personal, presupuesto, infraestructura, tecnología) estén disponibles y se administren eficientemente para sostener y mejorar las operaciones bajo el marco del SGC.</p>
                    `
                },
                'comite-calidad': {
                    title: 'Comité de Calidad',
                    description: `
                        <p><strong>Función Principal:</strong> Como órgano colegiado, es la máxima autoridad del Sistema de Gestión de Calidad (SGC). Su función es establecer, revisar y mantener la Política y los Objetivos de Calidad.</p>
                        <p><strong>Aporte al SGC:</strong> El comité en su conjunto asegura la alineación estratégica, la asignación de recursos y el liderazgo visible para impulsar una cultura de mejora continua en todo el Organismo Judicial, garantizando el cumplimiento de la norma ISO 9001:2015.</p>
                    `
                }
            };

            // --- LÓGICA DEL MODAL ---
            const modalOverlay = document.getElementById('committee-modal');
            const modalTitle = document.getElementById('modal-title');
            const modalDescription = document.getElementById('modal-description');
            const modalCloseBtn = document.getElementById('modal-close');
            const nodesToOpenModal = document.querySelectorAll('[data-role]');

            const openModal = (roleId) => {
                const content = roleDescriptions[roleId];
                if (!content) return;

                modalTitle.textContent = content.title;
                modalDescription.innerHTML = content.description;

                document.body.classList.add('modal-open');
                modalOverlay.classList.add('active');
                modalOverlay.setAttribute('aria-hidden', 'false');
                modalCloseBtn.focus(); // Para accesibilidad
                incrementInteraction();
            };

            const closeModal = () => {
                document.body.classList.remove('modal-open');
                modalOverlay.classList.remove('active');
                modalOverlay.setAttribute('aria-hidden', 'true');
                incrementInteraction();
            };

            // Event Listeners
            nodesToOpenModal.forEach(node => {
                node.addEventListener('click', () => {
                    const roleId = node.getAttribute('data-role');
                    openModal(roleId);
                });
            });

            modalCloseBtn.addEventListener('click', closeModal);

            modalOverlay.addEventListener('click', (event) => {
                // Cierra el modal solo si se hace clic en el fondo, no en el contenido
                if (event.target === modalOverlay) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', (event) => {
                // Cierra el modal al presionar la tecla Escape
                if (event.key === 'Escape' && modalOverlay.classList.contains('active')) {
                    closeModal();
                }
            });
        });
        // END OF INTEGRATED SCRIPT (DIAGRAM)

        // --- SCRIPT PARA LA FUNCIONALIDAD DEL ACORDEÓN DE ROLES (NUEVO) ---
        const rolesAccordionButtons = document.querySelectorAll(".roles-accordion-button");

        rolesAccordionButtons.forEach(button => {
            button.addEventListener("click", function() {
                this.classList.toggle("active");
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
                incrementInteraction();
            });
        });

        // --- INICIO: LÓGICA DIRECTORIO DOCENTES --- //
        const judgesData = [
          {
            "nro": 1,
            "nombre": "ABRAHAM WILLIAMS GARCÍA HÉRNANDEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE LA NIÑEZ Y ADOLESCENCIA Y ADOLESCENTES EN CONFLICTO CON LA LEY PENAL, VILLA NUEVA, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Niñez y Adolescencia", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 2,
            "nombre": "ALBA LETICIA ALVIZURIS TORRES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL PRIMERO PLURIPERSONAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 3,
            "nombre": "ALEJANDRO RAFAEL FIGUEROA DONIS",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO PRIMERO PLURIPERSONAL DE PAZ PENAL DEL MUNICIPIO Y DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 4,
            "nombre": "ANA ISABEL GUERRA JORDAN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE EXTINCION DE DOMINIO",
            "estado": "ACTIVO",
            "judicatura": "EXTINCION DE DOMINIO",
            "docencia": ["Extinción de dominio"],
            "otra_especialidad": null
          },
          {
            "nro": 5,
            "nombre": "ANA JULIA LONGO BAUTISTA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, TOTONICAPÁN",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 6,
            "nombre": "ANA MARIA RODRIGUEZ CORTEZ de RIVERA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEGUNDO DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE, MIXCO / GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 7,
            "nombre": "ANA MARINA PIMENTEL PIEDRASANTA",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA SEXTA DE LA CORTE DE APELACIONES DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Laboral", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 8,
            "nombre": "ANDREA JULIETA LOBOS LUNA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE LA NIÑEZ Y ADOLESCENCIA DEL ÁREA METROPOLITANA",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 9,
            "nombre": "ANDREA VANESSA CITALAN POROJ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE EN PROCESOS DE MAYOR RIESGO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "MAYOR RIESGO",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 10,
            "nombre": "ANGEL ESTUARDO ROSSELL RAMIREZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DECIMO PLURIPERSONAL DE PRIMERA INSTANCIA DEL RAMO CIVIL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Tributario"],
            "otra_especialidad": null
          },
          {
            "nro": 11,
            "nombre": "ANGELA AMELIA LEON CHINCHILLA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE FAMILIA DEL MUNICIPIO DE AMATITLAN,GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho de Familia", "Niñez en Protección", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 12,
            "nombre": "ARNULFO FELIPE CHANCHAVAC ZARATE",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ PENAL DE FALTAS DE TURNO DE VILLA NUEVA, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 13,
            "nombre": "AURORA BEATRIZ GUTIERREZ ANDRADE",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO OCTAVO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 14,
            "nombre": "AXEL ERIBEL RODAS DE LEON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE SUCHITEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 15,
            "nombre": "BAYRON ALBIZURES VELIZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DUODECIMO DE SENTENCIA PENAL DEL DEPARTAMENTO DE GUATEMALA / GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad", "Métodos Alternos de Resolución de Conflictos", "Psicología Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 16,
            "nombre": "BELGICA ANABELLA DERAS ROMAN de GUEVARA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL QUINTO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 17,
            "nombre": "BETZY MIREIDA ALVARADO ALFONZO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 18,
            "nombre": "BLEIDY BERALY PAYES PATZÁN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Administrativo", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 19,
            "nombre": "BRENDA ELIZABETH GARCÍA ORDÓÑEZ",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ CIUDAD VIEJA DEPARTAMENTO DE SACATEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Administrativo", "Derecho Tributario", "Derecho Electoral", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 20,
            "nombre": "BRENDA JOSEFINA GIL MAYÉN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE FAMILIA CON COMPETENCIA ESPECIFICA PARA PROCESOS DE DIVORCIOS POR MUTUO CONSENTIMIENTO",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Constitucional", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 21,
            "nombre": "BRÉNTON EMANUELSON MORALES GALINDO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE HUEHUETENANGO / HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Laboral", "Derecho Electoral", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 22,
            "nombre": "CARLOS ANTONIO ASENCIO ACUAL",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 23,
            "nombre": "CARLOS ARSENIO PÉREZ CHEGUEN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL PRIMERO DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE, DEL DEPARTAMENTO DE GUATEMALA CON COMPETENCIA PARA CONCER PROCESOS DE MAYOR RIESGO GRUPO C",
            "estado": "ACTIVO",
            "judicatura": "MAYOR RIESGO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Electoral", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 24,
            "nombre": "CARLOS ENRIQUE OLIVARES GONZALEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE BAJA VERAPAZ",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 25,
            "nombre": "CARLOS FERNANDO DE LA CRUZ RODRIGUEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO QUINTO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Laboral", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 26,
            "nombre": "CARLOS GUILLERMO SOSA BUEZO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO TERCERO PLURIPERSONAL DE EJECUCIÓN PENAL CON SEDE EN EL DEPARTAMENTO DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "EJECUCIÓN",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 27,
            "nombre": "CARLOS HUMBERTO PACAY POOU",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEGUNDO PLURIPERSONAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 28,
            "nombre": "CARLOS JOAQUIN URZUA MOREL",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA PRIMERA DE LA CORTE DE APELACIONES DE FAMILIA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 29,
            "nombre": "CARLOS RAMIRO CONTRERAS VALENZUELA",
            "cargo": "MAGISTRADO CORTE SUPREMA DE JUSTICIA",
            "dependencia": "CORTE SUPREMA DE JUSTICIA",
            "estado": "ACTIVO",
            "judicatura": "CORTE SUPREMA",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Administrativo"],
            "otra_especialidad": null
          },
          {
            "nro": 30,
            "nombre": "CARLOS VALENTÍN VELÁSQUEZ GONZÁLEZ",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ DEL MUNICIPIO DE TACANA DEL DEPARTAMENTO DE SAN MARCOS",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derechos Humanos", "Derecho Administrativo", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 31,
            "nombre": "CARMEN MARÍA AREVALO HERNÁNDEZ",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ PENAL DE FALTAS DE TURNO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 32,
            "nombre": "CAROL YESENIA BERGANZA CHACON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE TURNO DE VEINTICUATRO HORAS DE ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "ADOLESCENTES EN CONFLICTO",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 33,
            "nombre": "CELINA ESPERANZA PEREZ GARCIA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 34,
            "nombre": "CÉSAR AUGUSTO JIMÉNEZ MARROQUÍN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE TRABAJO Y PREVISION SOCIAL Y DE FAMILIA, JUTIAPA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL Y FAMILIA",
            "docencia": ["Derecho de Familia", "Niñez en Protección"],
            "otra_especialidad": null
          },
          {
            "nro": 35,
            "nombre": "CESAR WILLIAM MARTINEZ VASQUEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA TRABAJO Y PREVISION SOCIAL DEL DEPARTAMENTO DE HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 36,
            "nombre": "CLAUDIA ELVIRA GONZÁLEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL PRIMERO PLURIPERSONAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 37,
            "nombre": "CLAUDIA VANESSA RODAS ALDANA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO SEGUNDO PLURIPERSONAL DE PAZ PENAL DEL MUNICIPIO Y DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Trata de Personas", "Derecho Ambiental", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 38,
            "nombre": "CLAUDIA VANESSA SACAYON ULIN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE LA NIÑEZ Y ADOLESCENCIA Y ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DEL DEPARTAMENTO DE SUCHITEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA Y ADOLESCENTES EN CONFLICTO",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 39,
            "nombre": "CLINTON JOSE MERIDA HERNANDEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE RETALHULEU",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 40,
            "nombre": "CORI NOEMI AGUILÓN MARTÍNEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO. DE TURNO DE PRIMERA INSTANCIA PENAL DE 24 HORAS CON COMPETENCIA ESPECIFICA PARA CONOCER DELITOS COMETIDOS EN CONTRA DE NIÑAS, NIÑOS Y ADOLESCENTES DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "DELITOS CONTRA NIÑOS Y ADOLESCENTES",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 41,
            "nombre": "CRISTIAN ARMANDO CRUZ GRANADOS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEPARTAMENTO DE EL QUICHE",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 42,
            "nombre": "DAMARIS YAZENY MORALES LOPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE SAN MARCOS",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 43,
            "nombre": "DARWIN HOMERO PORRAS QUEZADA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL JUTIAPA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Política Criminal, Criminalística y Criminología", "Ley de Contrataciones del Estado y sus reformas", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 44,
            "nombre": "DARWIN SAMUEL ESCOBAR GARZA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE ZACAPA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 45,
            "nombre": "DIANA CAROLINA RUIZ MORENO de MANSILLA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE FALTAS LABORALES, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derechos Humanos", "Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 46,
            "nombre": "DIANA MARÍA ESCOBAR GONZÁLEZ",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "PAZ",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 47,
            "nombre": "DINA MONTERROSO RODAS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE TURNO DE VEINTICUATRO HORAS DE ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "ADOLESCENTES EN CONFLICTO",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 48,
            "nombre": "DORA LETICIA MONROY HERNANDEZ de PRILLWITZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DECIMO QUINTO PLURIPERSONAL DE PRIMERA INSTANCIA DEL RAMO CIVIL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 49,
            "nombre": "EDGAR ADOLFO GARCIA FERNANDEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEGUNDO DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE QUETZALTENANGO / QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Civil y Procesal Civil", "Derecho Mercantil", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 50,
            "nombre": "EDGAR ALBERTO PÉREZ CIFUENTES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad", "Métodos Alternos de Resolución de Conflictos", "Psicología Forense", "Técnicas de entrevistas", "Derecho Disciplinario", "Inteligencia Emocional", "Trabajo en equipo"],
            "otra_especialidad": null
          },
          {
            "nro": 51,
            "nombre": "EDGAR EDMUNDO CHACÓN MÖLLER",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ ESTANZUELA",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Laboral", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 52,
            "nombre": "EDNA BEATRIZ MAXIA LOPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE EXTORSIÓN DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Política Criminal, Criminalística y Criminología", "Ley de Contrataciones del Estado y sus reformas"],
            "otra_especialidad": null
          },
          {
            "nro": 53,
            "nombre": "ELIA MARIA DEL CARMEN BERDUO SAMAYOA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE PRIMERA INSTANCIA DE FAMILIA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Constitucional", "Derecho de Familia", "Niñez en Protección"],
            "otra_especialidad": null
          },
          {
            "nro": 54,
            "nombre": "ELIA RAQUEL PERDOMO RUANO",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA PRIMERA CORTE DE APELACIONES PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": [],
            "otra_especialidad": null
          },
          {
            "nro": 55,
            "nombre": "ELSA CRISTINA JIMENEZ GARCIA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE TURNO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 56,
            "nombre": "ELSA REBECA CHÁVEZ CETO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ DEL MUNICIPIO DE CHICAMAN DEL DEPARTAMENTO DE EL QUICHE",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho de Familia", "Niñez en Protección"],
            "otra_especialidad": null
          },
          {
            "nro": 57,
            "nombre": "EMILIA REBECA GONZALEZ MELGAR",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEPTIMO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derechos Humanos", "Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 58,
            "nombre": "EMILIO LORENZO VILLATORO LÓPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO TERCERO DE PRIMERA INSTANCIA DE FAMILIA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 59,
            "nombre": "ENMA JEANETH VASQUEZ de HERRARTE",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO PLURIPERSONAL DE EJECUCION PENAL DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 60,
            "nombre": "ERICK ESTUARDO VELÁSQUEZ PAZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DECIMO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 61,
            "nombre": "ERICK JOSE CASTILLO LÓPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 62,
            "nombre": "ERICKA CAROLINA GRANADOS ACEVEDO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL EN MATERIA TRIBUTARIA Y ADUANERA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal", "Derecho Tributario", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 63,
            "nombre": "ERICKA CECILIA SAGASTUME JIMENEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 64,
            "nombre": "ERICKA ESMERALDA EULER PACAY",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE LA NIÑEZ Y ADOLESCENCIA Y ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DE SAN BENITO, DEPARTAMENTO PETEN",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 65,
            "nombre": "ESMERALDA JUDITH OROZCO NAVARRO",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA PRIMERA DE LA CORTE DE APELACIONES DE FAMILIA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 66,
            "nombre": "ESTEBAN CLEMENTE AGUILAR DÍAZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEGUNDO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 67,
            "nombre": "ESTHER ELIZABETH MANCIO REYES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEPTIMO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 68,
            "nombre": "EVA MARINA RECINOS VASQUEZ",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA SEGUNDA DE LA CORTE DE APELACIONES DEL RAMO PENAL DE PROCESOS DE MAYOR RIESGO Y DE EXTINCION DE DOMINIO, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "MAYOR RIESGO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 69,
            "nombre": "EVELYN JACQUELINE CANO MORALES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO OCTAVO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Laboral", "Derecho Electoral", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 70,
            "nombre": "EVELYN YESSENIA BARAHONA PERDOMO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ PENAL DE TURNO DEL MUNICIPIO DE CHIQUIMULA, DEPARTAMENTO DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 71,
            "nombre": "FEDERICO GERARDO MAZA GONZALEZ CAMPO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO NOVENO PLURIPERSONAL DE PRIMERA INSTANCIA DEL RAMO CIVIL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil", "Derecho Mercantil"],
            "otra_especialidad": null
          },
          {
            "nro": 72,
            "nombre": "FELIX MAGDIEL SONTAY CHAVEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 73,
            "nombre": "FLOR DE MARIA DELL",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA MIXTA DE LA CORTE DE APELACIONES DEL DEPARTAMENTO DE SAN MARCOS",
            "estado": "ACTIVO",
            "judicatura": "SALA MIXTA",
            "docencia": ["Derecho Laboral", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 74,
            "nombre": "FLOR DE MARIA GARCIA VILLATORO",
            "cargo": "MAGISTRADO CORTE SUPREMA DE JUSTICIA",
            "dependencia": "CORTE SUPREMA DE JUSTICIA",
            "estado": "ACTIVO",
            "judicatura": "CORTE SUPREMA",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": "REVISIÓN DE EVALUACIÓN PROFI XVII"
          },
          {
            "nro": 75,
            "nombre": "FRANCISCO ROLANDO DURAN MÉNDEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA TRABAJO Y PREVISION SOCIAL Y FAMILIA DE JALAPA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL Y FAMILIA",
            "docencia": ["Derecho Constitucional", "Derecho Administrativo", "Derecho Tributario", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 76,
            "nombre": "FREDY ALEJANDRO PÉREZ LÓPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO PLURIPERSONAL DE EJECUCION PENAL DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 77,
            "nombre": "GABRIELA PATRICIA PORTILLO LEMUS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, IZABAL",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad", "Métodos Alternos de Resolución de Conflictos", "Psicología Forense", "Técnicas de entrevistas", "Derecho Disciplinario"],
            "otra_especialidad": null
          },
          {
            "nro": 78,
            "nombre": "GERSON BLADIMIR TISTA ELÍAS",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 79,
            "nombre": "GILMAR ALEXANDER CUC GUERRERO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO. DE TURNO PRIMERA INSTANCIA PENAL DE VEINTICUATRO HORAS CON COMPETENCIA ESPECIFICA PARA CONOCER DELITOS COMETIDOS EN CONTRA DE NIÑAS, NIÑOS Y ADOLESCENTES, DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "DELITOS CONTRA NIÑOS Y ADOLESCENTES",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Trata de Personas", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 80,
            "nombre": "GLORIA LILIAN AGUILAR BARRERA de RODAS",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA QUARTA DE LA CORTE DE APELACIONES DE TRABAJO Y PREVISION SOCIAL CON SEDE EN EL MUNICIPIO DE MAZATENANGO DEPARTAMENTO DE SUCHITEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 81,
            "nombre": "GUILLERMO ALFREDO LUNA ARRIOLA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO NOVENO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL Y NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 82,
            "nombre": "GUSTAVO ADOLFO NORIEGA ESTRADA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL Y NARCOACTIVIDAD DE TURNO DEL DEPARTAMENTO DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 83,
            "nombre": "GUSTAVO ADOLFO SANDOVAL MARTINEZ",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 84,
            "nombre": "GUSTAVO RENE PEINADO CUMES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE FAMILIA CON COMPETENCIA ESPECIFICA PARA PROCESOS DE DIVORCIOS POR MUTUO CONSENTIMIENTO",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 85,
            "nombre": "HECTOR JOSE ROSALES MARROQUÍN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEGUNDO PLURIPERSONAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 86,
            "nombre": "HEIDY JACKELINE PAZ LESSING",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO CUARTO DE PRIMERA INSTANCIA DE FAMILIA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 87,
            "nombre": "HEIDY YANIRA PEREZ REQUENA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE LA NIÑEZ Y ADOLESCENCIA Y ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DEL MUNICIPIO DE MALACATAN, DEPARTAMENTO DE SAN MARCOS",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCencia",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 88,
            "nombre": "HENRY GEOVANY PACAY CACAO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE FAMILIA DEL DEPARTAMENTO DE ALTA VERAPAZ",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derechos Humanos", "Derecho Electoral", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 89,
            "nombre": "HENRY MANUEL RECINOS AVILA",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA REGIONAL MIXTA DE LA CORTE DE APELACIONES DE HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Tributario", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 90,
            "nombre": "HUGO JOSÉ ESCOBAR CURRUCHICHE",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ DEL MUNICIPIO DE CONCEPCION DEL DEPARTAMENTO DE SOLOLA",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 91,
            "nombre": "HUGO LUIS FRANCISCO ESCALANTE MORALES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL CON COMPETENCIA ESPECIALIZADA EN DELITOS DE TRATA DE PERSONAS DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "TRATA",
            "docencia": ["Derecho Penal y Procesal Penal", "Trata de Personas"],
            "otra_especialidad": null
          },
          {
            "nro": 92,
            "nombre": "INGRID VANNESA CIFUENTES ARRIVILLAGA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEPTIMO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Trata de Personas", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 93,
            "nombre": "IRMA LORENA MAZARIEGOS MATIAS",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ DEL MUNICIPIO DE SAN MARTIN ZAPOTITLAN DEL DEPARTAMENTO DE RETALHULEU",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho de Familia", "Niñez en Protección"],
            "otra_especialidad": null
          },
          {
            "nro": 94,
            "nombre": "IVETTE AMARILIS JOAQUIN AMAYA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE TURNO DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 95,
            "nombre": "JACKELIN VANESSA CONTRERAS AGUILAR",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL EN MATERIA TRIBUTARIA Y ADUANERA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Tributario", "Política Criminal, Criminalística y Criminología", "Ley de Contrataciones del Estado y sus reformas", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 96,
            "nombre": "JAIRO BORIS CALDERON DE LEON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE EN PROCESOS DE MAYOR RIESGO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "MAYOR RIESGO",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Trata de Personas", "Política Criminal, Criminalística y Criminología", "innovación docente", "uso de aplicaciones google", "Manejo de casos complejos", "Innovación pedagógica y didáctica", "Derecho digital", "Estado inteligente", "Nuevas tecnologías", "docencia virtual", "Uso de salas virtuales para audiencias penales", "Tramitación de expediente electrónico", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 97,
            "nombre": "JANETTE ANABELLA ARTOLA GARCIA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL ALTA VERAPAZ",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 98,
            "nombre": "JENNIE AIMEE MOLINA MORAN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEXTO DE PRIMERA INSTANCIA DE FAMILIA, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho de Familia", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 99,
            "nombre": "JESSICA LILIANA MORAN LOPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE SUCHITEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 100,
            "nombre": "JESUS OTONIEL BAQUIAX BAQUIAX",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA CUARTA DE LA CORTE DE APELACIONES EN EL RAMO CIVIL, MERCANTIL Y FAMILIA, QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "CIVIL Y FAMILIA",
            "docencia": ["Derechos Humanos", "Adolescentes en Conflicto con la Ley Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 101,
            "nombre": "JORGE ADALBERTO CANO VILLATORO",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA SEPTIMA DE LA CORTE DE APELACIONES DEL RAMO PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Propiedad Intelectual, Marcas y Patentes", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 102,
            "nombre": "JORGE DOUGLAS OCHOA LOYO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA PENAL Y NARCOACTIVIDAD ZACAPA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 103,
            "nombre": "JORGE ISAAC MORALES MAZARIEGOS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE SANTA ROSA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 104,
            "nombre": "JORGE ROLANDO MORALES UBICO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEGUNDO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 105,
            "nombre": "JOSE EDUARDO COJULUN SANCHEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL DE DELITOS DE EXTORSIÓN DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": [],
            "otra_especialidad": null
          },
          {
            "nro": 106,
            "nombre": "JOSE FRANCISCO PEREZ AGUILAR",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 107,
            "nombre": "JOSE GERARDO MOLINA MUÑOZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE LA NIÑEZ Y ADOLESCENCIA Y ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DE COBAN ALTA VERAPAZ",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 108,
            "nombre": "JOSE GERARDO MUÑOZ BARRIOS",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Tributario", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 109,
            "nombre": "JOSE GILBERTO GODOY ARCHILA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE TURNO DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL - MAIMI-",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 110,
            "nombre": "JOSE LEONEL CERIN MIRANDA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL CON COMPETENCIA ESPECIALIZADA EN DELITOS CONTRA EL AMBIENTE Y PATRIMONIO CULTURAL ZACAPA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Ambiental", "Política Criminal, Criminalística y Criminología"],
            "otra_especialidad": null
          },
          {
            "nro": 111,
            "nombre": "JOSE ROBERTO HERNANDEZ GUZMAN",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA TERCERA CORTE DE APELACIONES DEL RAMO CIVIL Y MERCANTIL",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Tributario", "Derecho Electoral", "Derecho Ambiental", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 112,
            "nombre": "JOZUE DAVID ECHEVERRIA DAHAN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, EL PROGRESO",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental"],
            "otra_especialidad": null
          },
          {
            "nro": 113,
            "nombre": "JUAN CARLOS DEL VALLE MARROQUIN",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SANTA CATARINA BARAHONA, SACATEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Política Criminal, Criminalística y Criminología", "Derecho de Familia", "Niñez en Protección"],
            "otra_especialidad": null
          },
          {
            "nro": 114,
            "nombre": "JUAN CARLOS GONZÁLEZ GARCÍA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL DE DELITOS DE EXTORSIÓN DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Tributario", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Atención de Personas con Discapacidad", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 115,
            "nombre": "JUAN CARLOS ORTEGA TOBIAS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO OCTAVO DE PRIMERA INSTANCIA DE FAMILIA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 116,
            "nombre": "JUAN ORLANDO CALDERON SIERRA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE LA NIÑEZ Y ADOLESCENCIA DEL ÁREA METROPOLITANA",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Trata de Personas", "Derecho Ambiental", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 117,
            "nombre": "JUANA LISETH LIX MARTÍNEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE TURNO PRIMERA INSTANCIA PENAL DE VEINTICUATRO HORAS CON COMPETENCIA ESPECIFICA PARA CONOCER DELITOS COMETIDOS EN CONTRA DE NIÑAS, NIÑOS Y ADOLESCENTES, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "NIÑOS Y ADOLESCENTES",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Trata de Personas", "Derecho Ambiental", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 118,
            "nombre": "JUDITH SECAIDA LEMUS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO QUINTO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 119,
            "nombre": "JULIO ALFONSO AGUSTÍN DEL VALLE",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA SEGUNDA DE LA CORTE DE APELACIONES DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Laboral", "Derecho Administrativo", "Derecho Tributario", "Política Criminal, Criminalística y Criminología", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 120,
            "nombre": "JULIO CESAR VASQUEZ XOL",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO TERCERO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL Y NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 121,
            "nombre": "JULIO MARIO ESCOBAR DIAZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEGUNDO DE PRIMERA INSTANCIA DE LO ECONOMICO COACTIVO DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "ECONOMICO COACTIVO",
            "docencia": ["Derecho Tributario", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 122,
            "nombre": "KAREN MARGARITA PAREDES AQUINO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ MORALES, DEPARTAMENTO DE IZABAL",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho de Familia", "Niñez en Protección"],
            "otra_especialidad": null
          },
          {
            "nro": 123,
            "nombre": "KARIN SORELLY GOMEZ GIRON de QUEVEDO",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA SEGUNDA CORTE DE APELACIONES DEL RAMO CIVIL Y MERCANTIL",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derechos NOtarial", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 124,
            "nombre": "KARLA DAMARIS HERNANDEZ GARCIA de BERNAT",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA PENAL Y NARCOACTIVIDAD DEL DEPARTAMENTO DE PETEN",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Ambiental"],
            "otra_especialidad": null
          },
          {
            "nro": 125,
            "nombre": "KAROL DESIREE VASQUEZ",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA REGIONAL MIXTA DE LA CORTE DE APELACIONES DE PETEN",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 126,
            "nombre": "KIMBERLY MARIA ROSARIO MONROY ARDON de LOPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, SACATEPÉQUEZ",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "axiología jurídica", "delitos menos graves", "delitos patrimoniales", "delitos contra las personas", "delitos sexuales", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad", "Métodos Alternos de Resolución de Conflictos", "Psicología Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 127,
            "nombre": "LEONORA ELIZABETH CORDÓN ARRIVILLAGA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL PRIMERO PLURIPERSONAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE GUATEMALA / GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 128,
            "nombre": "LESLY MARIANA IXQUIAC MAZARIEGOS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA CIVIL Y ECONOMICO COACTIVO DEL DEPARTAMENTO DE EL QUICHE",
            "estado": "ACTIVO",
            "judicatura": "CIVIL Y ECONOMICO COACTIVO",
            "docencia": ["Derecho Constitucional", "Derecho Civil y Procesal Civil", "Derechos NOtarial", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 129,
            "nombre": "LIGIA GABRIELA SANDOVAL",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental"],
            "otra_especialidad": null
          },
          {
            "nro": 130,
            "nombre": "LISBETH MIREYA BATUN BETANCOURT",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO PLURIPERSONAL DE EJECUCION PENAL DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 131,
            "nombre": "LUIS ALBERTO CIFUENTES PANTALEON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEXTO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": [],
            "otra_especialidad": null
          },
          {
            "nro": 132,
            "nombre": "LUIS FERNANDO ARCHILA LIMA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL Y NARCOACTIVIDAD DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "innovación docente", "uso de aplicaciones google", "Manejo de casos complejos", "Innovación pedagógica y didáctica", "Derecho digital", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 133,
            "nombre": "LUIS FERNANDO AROCHE ARRECIS",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA DE LA CORTE DE APELACIONES DEL RAMO PENAL EN MATERIA TRIBUTARIA Y ADUANERA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Tributario", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 134,
            "nombre": "LUIS ROMMEL ARRIAGA CASTILLO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO SEGUNDO DE PAZ DEL MUNICIPIO DE MAZATENANGO DEL DEPARTAMENTO DE SUCHITEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 135,
            "nombre": "LUISA ELENA PALMA CAMBARA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SAN LUIS JILOTEPEQUE",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 136,
            "nombre": "MANOLO ESTUARDO LOPEZ GIRON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE ESCUINTLA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 137,
            "nombre": "MANOLO OTONIEL LOPEZ MORALES",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 138,
            "nombre": "MANUEL ENRIQUE SOLORZANO DÌAZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Política Criminal, Criminalística y Criminología"],
            "otra_especialidad": null
          },
          {
            "nro": 139,
            "nombre": "MARCO ANTONIO VILLEDA SANDOVAL",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL OCTAVO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA / GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "innovación docente", "uso de aplicaciones google", "Manejo de casos complejos"],
            "otra_especialidad": null
          },
          {
            "nro": 140,
            "nombre": "MARCO TULIO JIMÉNEZ ALDANA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ DEL MUNICIPIO DE LAS CRUCES, DEPARTAMENTO DE PETEN",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 141,
            "nombre": "MARIA CRISTINA CACERES LOPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE LA NIÑEZ Y ADOLESCENCIA DEL ÁREA METROPOLITANA",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Derechos Humanos", "Derecho Laboral", "Derecho Electoral", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Atención de Personas con Discapacidad", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 142,
            "nombre": "MARÍA EUGENIA ALVAREZ AGUILAR",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SANTA MARIA DE JESUS, DEPARTAMENTO DE SACATEPEQUEZ",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derechos Humanos", "Adolescentes en Conflicto con la Ley Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 143,
            "nombre": "MARIA MERCEDES RODRIGUEZ ALDANA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE SANTA ROSA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Tributario", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 144,
            "nombre": "MARIA ROSELIA LIMA GARZA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Ley de Contrataciones del Estado y sus reformas", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 145,
            "nombre": "MARIAJOSÉ YACQUELIN DOMÍNGUEZ MÉNDEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, TOTONICAPÁN",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 146,
            "nombre": "MARIBEL GODOY AGUILAR",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DECIMO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 147,
            "nombre": "MARILY ROSMERY LOPEZ PEREZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE TURNO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 148,
            "nombre": "MARIO ALFONSO JIMENEZ BOTEO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA CIVIL ECONOMICO COACTIVO DEL DEPARTAMENTO DE TOTONICAPAN",
            "estado": "ACTIVO",
            "judicatura": "CIVIL Y ECONOMICO COACTIVO",
            "docencia": ["Derecho Constitucional", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derechos NOtarial", "Económico coactivo", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 149,
            "nombre": "MARIO EFRAÍN GARCÍA QUEVEDO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE JALAPA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 150,
            "nombre": "MARIO ERNESTO MARTÍNEZ MEJÍA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, EL PROGRESO",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 151,
            "nombre": "MARJORIE RENE AZPURU VILLELA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL QUINTO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 152,
            "nombre": "MARTA CLAUDETTE DOMINGUEZ GUERRERO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTECON COMPETENCIA PARA CONOCER PROCESOS DE MAYOR RIESGO, CIUDAD DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "MAYOR RIESGO",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Laboral", "Derecho Administrativo", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 153,
            "nombre": "MARTA RUTH CORTEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE ZACAPA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 154,
            "nombre": "MARTHA REGINA TRUJILLO CHANQUIN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO CUARTO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derechos Humanos", "Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 155,
            "nombre": "MARVIN GIOVANNI COYOY TUCUX",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "innovación docente"],
            "otra_especialidad": null
          },
          {
            "nro": 156,
            "nombre": "MAYRA ALEJANDRA AGUIRRE SANDOVAL",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["innovación docente"],
            "otra_especialidad": null
          },
          {
            "nro": 157,
            "nombre": "MELBY MARLENE CHINCHILLA HERRERA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE BAJA VERAPAZ",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 158,
            "nombre": "MERCEDES ANALUCIA VARGAS GÁLVEZ",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA MIXTA DE LA CORTE DE APELACIONES DEL DEPARTAMENTO DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Civil y Procesal Civil", "Derecho Mercantil", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 159,
            "nombre": "MIDIAM URBINA DE LEON de GUZMAN",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA QUINTA DEL TRIBUNAL DE LO CONTENCIOSO ADMINISTRATIVO",
            "estado": "ACTIVO",
            "judicatura": "CONTENCIOSO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Administrativo", "Derecho Tributario", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 160,
            "nombre": "MIGUEL ANGEL DEL VALLE RALDA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE PRIMERA INSTANCIA DEL RAMO CIVIL DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 161,
            "nombre": "MIGUEL ANGEL NORIEGA SANCHEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE TOTONICAPAN",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Política Criminal, Criminalística y Criminología"],
            "otra_especialidad": null
          },
          {
            "nro": 162,
            "nombre": "MIGUEL CANASTUJ GUTIÉRREZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL CON COMPETENCIA ESPECIALIZADA EN DELITOS DE TRATA DE PERSONAS DEL DEPARTAMENTO DE QUETZALTENANGO / QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "TRATA",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Laboral", "Trata de Personas"],
            "otra_especialidad": null
          },
          {
            "nro": 163,
            "nombre": "MILTON ALBERTO ESTRADA MORALES",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA QUINTA DE LA CORTE DE APELACIONES RAMO PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE, QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 164,
            "nombre": "MIRIAM ELIZABETH MENDEZ MENDEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 165,
            "nombre": "MIRIAN ANDREA GARCÍA AGUILAR",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL UNDECIMO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 166,
            "nombre": "MIRNA CONCEPCION BUEZO PINEDA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "CIVIL Y ECONOMICO COACTIVO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Laboral", "Derecho Administrativo", "Derecho Tributario", "Derechos Humanos de las Mujeres, Género y Femicidio", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Ley de Contrataciones del Estado y sus reformas", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Propiedad Intelectual, Marcas y Patentes", "Casación Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 167,
            "nombre": "MITZY MARIA ROXANA RAMOS CASTILLO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 168,
            "nombre": "MOISES OSWALDO HERRERA VARGAS",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA REGIONAL MIXTA DE LA CORTE DE APELACIONES DEL DEPARTAMENTO DE HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Laboral"],
            "otra_especialidad": null
          },
          {
            "nro": 169,
            "nombre": "MONICA IVETTE CRUZ AVALOS de RUIZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE LO ECONOMICO COACTIVO GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "ECONOMICO COACTIVO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 170,
            "nombre": "MÓNICA LOSANA LEMUS MELGAR",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derechos Humanos", "Derecho Laboral", "Derecho Electoral", "innovación docente", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención de Personas con Discapacidad", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 171,
            "nombre": "NELDY VANESSA RODRIGUEZ ANDRADE",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE PARA DILIGENCIAS URGENTES DE INVESTIGACION",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Extinción de dominio"],
            "otra_especialidad": null
          },
          {
            "nro": 172,
            "nombre": "NELLY MARIBEL MEJICANO QUIÑÓNEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL EN MATERIA TRIBUTARIA Y ADUANERA GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Tributario", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 173,
            "nombre": "NELY EUNICE GONZÁLEZ ARGUETA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 174,
            "nombre": "NICOLÁS BALÁN ESTRADA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DECIMO TERCERO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 175,
            "nombre": "OMAR RAFAEL RAMIREZ CORZO",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA REGIONAL MIXTA DE LA CORTE DE APELACIONES DE ZACAPA",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 176,
            "nombre": "OSCAR ALBERTO HERRERA HERRERA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 177,
            "nombre": "OSCAR ARMANDO RIVAS RAYO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE FAMILIA CON COMPETENCIA ESPECIFICA PARA PROCESOS DE PENSIONES ALIMENTICIAS, DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["innovación docente", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 178,
            "nombre": "OSMAN LEONEL PÉREZ GUZMÁN",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SAN MIGUEL POCHUTA, DEPARTAMENTO DE CHIMALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Derecho de Familia", "Niñez en Protección", "Contencioso Administrativo, Económico Coactivo y Cuentas", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 179,
            "nombre": "PEDRO FEDERICO NUÑEZ MAZARIEGOS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE PRIMERA INSTANCIA DE CUENTAS GUATEMALA",
            "estado": "BAJA",
            "judicatura": "CUENTAS",
            "docencia": ["Derecho Administrativo", "Derecho Tributario", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 180,
            "nombre": "PEDRO GIOVANNI SOTZ CALI",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO CUARTO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Laboral", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Atención de Personas con Discapacidad", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 181,
            "nombre": "PERLA NINETTE NOWELL MALDONADO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL SEGUNDO DE SENTENCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 182,
            "nombre": "RAFAEL MORALES SOLARES",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA PRIMERA CORTE DE APELACIONES PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derechos Humanos de las Mujeres, Género y Femicidio"],
            "otra_especialidad": null
          },
          {
            "nro": 183,
            "nombre": "RAMIRO STUARDO LÓPEZ GALINDO",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA PRIMERA CORTE DE APELACIONES DEL RAMO CIVIL Y MERCANTIL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 184,
            "nombre": "RAQUEL ALICIA MENDEZ LETONA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEGUNDO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 185,
            "nombre": "RAQUEL ARABELLA MARISOL MIRANDA UMAÑA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO SEGUNDO PLURIPERSONAL DE PAZ PENAL DEL MUNICIPIO Y DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Ambiental"],
            "otra_especialidad": null
          },
          {
            "nro": 186,
            "nombre": "RENE OTONIEL LOPEZ GIRON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL CUARTO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 187,
            "nombre": "ROBERTO CARLOS CASASOLA ORELLANA",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA MIXTA DE LA CORTE DE APELACIONES DEL DEPARTAMENTO DE SOLOLÁ, CON SEDE EN EL MUNICIPIO DE PANAJACHEL, DEPARTAMENTO DE SOLOLÁ",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 188,
            "nombre": "ROBERTO HERNAN RIVAS ALVARADO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE TOTONICAPAN",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Política Criminal, Criminalística y Criminología"],
            "otra_especialidad": null
          },
          {
            "nro": 189,
            "nombre": "ROBERZON YUBINI MERIDA LOPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE FAMILIA DEL DEPARTAMENTO DE HUEHUETENANGO",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 190,
            "nombre": "ROCÍO ALEJANDRA GORDILLO TELLO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ CIVIL, FAMILIA Y TRABAJO DE LA VILLA DE MIXCO",
            "estado": "ACTIVO",
            "judicatura": "CIVIL, LABORAL Y FAMILIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de Familia", "Niñez en Protección", "Argumentación Jurídica", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 191,
            "nombre": "ROLANDO ELINOHET DIAZ HICHOS",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SAN JACINTO",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 192,
            "nombre": "ROMEO OTTONIEL GALVEZ VARGAS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL EN MATERIA TRIBUTARIA Y ADUANERA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Tributario", "Derechos Humanos de las Mujeres, Género y Femicidio", "Trata de Personas", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 193,
            "nombre": "ROSA MARIA LOPEZ YUMAN de ESTRADA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE EXTORSIÓN DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil"],
            "otra_especialidad": null
          },
          {
            "nro": 194,
            "nombre": "ROSA MARIELA JOSABETH RIVERA ACEVEDO",
            "cargo": "MAGISTRADO PRESIDENTE DE SALA",
            "dependencia": "SALA QUINTA DE LA CORTE DE APELACIONES DEL RAMO CIVIL Y MERCANTIL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 195,
            "nombre": "ROSANGELA PAOLA RODRIGUEZ CASTILLO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DUODECIMO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Laboral", "Derecho de Familia", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 196,
            "nombre": "RUDY ERICK ROLANDO SANTOS MARTÍNEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO UNDECIMO PLURIPERSONAL DE TRABAJO Y PREVISION SOCIAL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Laboral", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 197,
            "nombre": "RUTH NOEMI CAMEY EQUITE",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL PRIMERO DE SENTENCIA PENAL Y NARCOACTIVIDAD DEL DEPARTAMENTO DE JUTIAPA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 198,
            "nombre": "SAMUEL ADALBERTO MARTÍNEZ ESPAÑA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 199,
            "nombre": "SANDRA CAROLINA TAJIN CUBUR",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE FAMILIA, CON COMPETENCIA ESPECIFICA PARA LA PROTECCION EN MATERIA DE VIOLENCIA INTRAFAMILIAR,GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": [],
            "otra_especialidad": null
          },
          {
            "nro": 200,
            "nombre": "SANDRA MARINA CIUDAD REAL AGUILAR de CHARCHAL",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA DE LA CORTE DE APELACIONES DEL RAMO PENAL CON COMPETENCIA ESPECIALIZADA EN DELITOS DE TRATA DE PERSONAS Y DELITOS MIGRATORIOS CON SEDE EN EL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "TRATA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Extinción de dominio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 201,
            "nombre": "SANDRA PATRICIA MEJÍA ESQUIVEL",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL Y NARCOACTIVIDAD DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 202,
            "nombre": "SANDRA SANICTEE BETETA MAZARIEGOS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA DE FAMILIA CON COMPETENCIA ESPECIFICA PARA PROCESOS DE PENSIONES ALIMENTICIAS",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho de Familia"],
            "otra_especialidad": null
          },
          {
            "nro": 203,
            "nombre": "SARA CATALINA REYES MEJÍA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE 24 HORAS DE LA VILLA DE MIXCO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 204,
            "nombre": "SARA GRISELDA YOC YOC",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, PETÉN",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 205,
            "nombre": "SAUL ORLANDO ALVAREZ RUIZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL TERCERO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 206,
            "nombre": "SELVIN GUADALUPE GUEVARA FARFÁN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL Y NARCOACTIVIDAD DE TURNO DEL DEPARTAMENTO DE CHIQUIMULA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Administrativo", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Atención de Personas con Discapacidad", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 207,
            "nombre": "SERGIO ADOLFO PASTOR ALVAREZ",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SANTA MARIA CHIQUIMULA DEL DEPARTAMENTO DE TOTONICAPAN",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Extinción de dominio", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 208,
            "nombre": "SERGIO RENÉ MENA SAMAYOA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE TURNO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 209,
            "nombre": "SHANNE NOEMI RALDA CANO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE CONTROL Y EJECUCION DE MEDIDAS PARA ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "ADOLESCENTES EN CONFLICTO",
            "docencia": ["Adolescentes en Conflicto con la Ley Penal", "Derecho de Familia", "Ejecución de Sanciones Socioeducativas"],
            "otra_especialidad": null
          },
          {
            "nro": 210,
            "nombre": "SILVANA NINNETTE REYES PINEDA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "delitos sexuales", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 211,
            "nombre": "SILVIA CONSUELO RUIZ CAJAS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 212,
            "nombre": "SILVIA CORALIA MORALES ASENCIO",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL CON COMPETENCIA ESPECIALIZADA EN DELITOS DE TRATA DE PERSONAS DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "TRATA",
            "docencia": ["Trata de Personas"],
            "otra_especialidad": null
          },
          {
            "nro": 213,
            "nombre": "SILVIA PATRICIA MORALES REQUENA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DECIMO SEGUNDO PLURIPERSONAL DE PRIMERA INSTANCIA DEL RAMO CIVIL, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derechos Humanos", "Derecho Civil y Procesal Civil", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 214,
            "nombre": "SILVIA VIOLETA DE LEON SANTOS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PRIMERO DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 215,
            "nombre": "SINDY IVONE ORTEGA MIRALDA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Tributario"],
            "otra_especialidad": null
          },
          {
            "nro": 216,
            "nombre": "SOFÍA MARICRUZ HERRERA MENDOZA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Constitucional", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 217,
            "nombre": "SONIA CAROL MARTINEZ OBREGON",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, TOTONICAPÁN",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "innovación docente", "uso de aplicaciones google", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 218,
            "nombre": "SONIA NINETTE VILLATORO LOPEZ de GOMEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL NOVENO DE SENTENCIA PENAL NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Derecho de los Pueblos Indígenas, Inter y Multiculturalidad", "Política Criminal, Criminalística y Criminología", "Ley de Contrataciones del Estado y sus reformas", "innovación docente", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 219,
            "nombre": "SUANY MARISOL CHEN YAT",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ SALAMA, BAJA VERAPAZ",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Penal y Procesal Penal", "Verificación de video conferencias"],
            "otra_especialidad": null
          },
          {
            "nro": 220,
            "nombre": "TELÉSFORO ISRAEL MIRANDA PÉREZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE TRABAJO Y PREVISION SOCIAL, CIVIL Y ECONOMICO COACTIVO DEL MUNICIPIO DE MALACATAN, DEPARTAMENTO DE SAN MARCOS",
            "estado": "ACTIVO",
            "judicatura": "LABORAL, CIVIL Y ECONOMICO COACTIVO",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho Laboral", "Derecho Civil y Procesal Civil", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 221,
            "nombre": "TEODULO ILDEFONSO CIFUENTES MALDONADO",
            "cargo": "MAGISTRADO CORTE SUPREMA DE JUSTICIA",
            "dependencia": "CORTE SUPREMA DE JUSTICIA",
            "estado": "ACTIVO",
            "judicatura": "CORTE SUPREMA",
            "docencia": ["Derecho Constitucional", "Derecho Civil y Procesal Civil", "Derecho Mercantil", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Atención a personas en condiciones de vulnerabilidad"],
            "otra_especialidad": null
          },
          {
            "nro": 222,
            "nombre": "THELMA NOEMI DEL CID PALENCIA",
            "cargo": "MAGISTRADO DE SALA",
            "dependencia": "SALA TERCERA CORTE DE APELACIONES DE TRABAJO Y PREVISIÓN SOCIAL",
            "estado": "ACTIVO",
            "judicatura": "LABORAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Laboral", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 223,
            "nombre": "VERÓNICA DE LEÓN XOVIN de GUARCAS",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL, CHIMALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho Ambiental", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales"],
            "otra_especialidad": null
          },
          {
            "nro": 224,
            "nombre": "VERONICA DEL ROSARIO GALICIA MARROQUIN",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE CONTROL Y EJECUCION DE MEDIDAS PARA ADOLESCENTES EN CONFLICTO CON LA LEY PENAL DEL DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "ADOLESCENTES EN CONFLICTO",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "delitos sexuales"],
            "otra_especialidad": null
          },
          {
            "nro": 225,
            "nombre": "VICTOR MANOLO FUNES ENRIQUEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO PLURIPERSONAL DE PRIMERA INSTANCIA PENAL, NARCOACTIVIDAD Y DELITOS CONTRA EL AMBIENTE DE TURNO",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal"],
            "otra_especialidad": null
          },
          {
            "nro": 226,
            "nombre": "VILMA PATRICIA RODRIGUEZ BARRIOS de LAINEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "TRIBUNAL DE SENTENCIA PENAL DE DELITOS DE FEMICIDIO Y OTRAS FORMAS DE VIOLENCIA CONTRA LA MUJER Y VIOLENCIA SEXUAL DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "FEMICIDIO",
            "docencia": ["Derechos Humanos", "Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Trata de Personas", "Derecho Ambiental", "Política Criminal, Criminalística y Criminología", "Derecho de Familia", "Atención de Personas con Discapacidad", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 227,
            "nombre": "WILBERT ADOLFO MARTÍNEZ CUESI",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ, CON COMPENCION ESPECIFICA PROTECCION EN MATERIA DE VIOLENCIA INTRAFAMILIAR NIÑEZ Y ADOLESCENCIA AMENAZA O VIOLADA EN SUS DERECHOS, GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "NIÑEZ Y ADOLESCENCIA",
            "docencia": ["Derecho Constitucional", "Derechos Humanos de las Mujeres, Género y Femicidio", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial"],
            "otra_especialidad": null
          },
          {
            "nro": 228,
            "nombre": "WILIAM HUMBERTO ANZUETO ROSALES",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ PENAL DE FALTAS DE TURNO",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Constitucional", "Derechos Humanos", "Verificación de video conferencias", "Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          },
          {
            "nro": 229,
            "nombre": "WILLIAMS RENÉ ORTIZ CASASOLA",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "CONSEJO DE LA CARRERA JUDICIAL",
            "estado": "ACTIVO",
            "judicatura": "SUPLENTE",
            "docencia": ["Derecho Penal y Procesal Penal", "Criminalística"],
            "otra_especialidad": null
          },
          {
            "nro": 230,
            "nombre": "WILLY EDISSON QUINTANA PATIÑO",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO PRIMERO PLURIPERSONAL DE PAZ PENAL DEL MUNICIPIO Y DEPARTAMENTO DE GUATEMALA",
            "estado": "ACTIVO",
            "judicatura": "PENAL",
            "docencia": ["Derecho Penal y Procesal Penal", "Adolescentes en Conflicto con la Ley Penal", "Derecho Laboral", "delitos patrimoniales", "delitos contra las personas", "Derecho de Familia", "Argumentación Jurídica", "Gestión del Despacho Judicial", "Redacción de Resoluciones Judiciales", "Oratoria Forense"],
            "otra_especialidad": null
          },
          {
            "nro": 231,
            "nombre": "YESICA NATALY HERRERA PALACIOS",
            "cargo": "JUEZ DE PAZ V",
            "dependencia": "JUZGADO DE PAZ DEL MUNICIPIO DE ALMOLONGA DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "MIXTO",
            "docencia": ["Derecho Penal y Procesal Penal", "delitos patrimoniales"],
            "otra_especialidad": null
          },
          {
            "nro": 232,
            "nombre": "YURI MARIELA FUENTES LÓPEZ",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO DE PRIMERA INSTANCIA DE FAMILIA DEL MUNICIPIO DE MALACATAN, DEPARTAMENTO DE SAN MARCOS / SAN MARCOS",
            "estado": "ACTIVO",
            "judicatura": "FAMILIA",
            "docencia": ["Derecho Penal y Procesal Penal", "Derecho de Familia", "Argumentación Jurídica"],
            "otra_especialidad": null
          },
          {
            "nro": 233,
            "nombre": "ZOILA CEFERINA LOPEZ DE LA ROSA",
            "cargo": "JUEZ DE PRIMERA INSTANCIA",
            "dependencia": "JUZGADO SEGUNDO DE PRIMERA INSTANCIA DEL RAMO CIVIL DEL DEPARTAMENTO DE QUETZALTENANGO",
            "estado": "ACTIVO",
            "judicatura": "CIVIL",
            "docencia": ["Derecho Civil y Procesal Civil", "Argumentación Jurídica", "Atención de Personas con Discapacidad"],
            "otra_especialidad": null
          }
        ];

        document.addEventListener('DOMContentLoaded', () => {
            const judgesDirectory = document.getElementById('docentes-directory');
            if (!judgesDirectory) return; 

            const judgesContainer = document.getElementById('judges-container');
            const filterName = document.getElementById('filter-name');
            const filterCargo = document.getElementById('filter-cargo');
            const filterJudicatura = document.getElementById('filter-judicatura');
            const filterDocencia = document.getElementById('filter-docencia');
            const filterEstado = document.getElementById('filter-estado');
            const resultsCount = document.getElementById('results-count');
            const resetFiltersBtn = document.getElementById('reset-filters');
            
            const totalJudgesEl = document.getElementById('total-judges');
            const cargoStatsList = document.getElementById('cargo-stats-list');
            const expertiseStatsList = document.getElementById('expertise-stats-list');

            const populateStatistics = () => {
                totalJudgesEl.textContent = judgesData.length;
                const cargoCounts = {};
                judgesData.forEach(j => { cargoCounts[j.cargo] = (cargoCounts[j.cargo] || 0) + 1; });
                const cargoOrder = ['MAGISTRADO CORTE SUPREMA DE JUSTICIA','MAGISTRADO PRESIDENTE DE SALA','MAGISTRADO DE SALA','JUEZ DE PRIMERA INSTANCIA', 'JUEZ DE PAZ V'];
                const sortedCargos = Object.entries(cargoCounts).sort((a, b) => {
                    let indexA = cargoOrder.findIndex(c => a[0].toUpperCase().startsWith(c));
                    let indexB = cargoOrder.findIndex(c => b[0].toUpperCase().startsWith(c));
                    indexA = indexA === -1 ? 99 : indexA;
                    indexB = indexB === -1 ? 99 : indexB;
                    if (indexA !== indexB) return indexA - indexB;
                    return a[0].localeCompare(b[0]);
                });
                cargoStatsList.innerHTML = sortedCargos.map(([cargo, count]) => `<li><span>${cargo}</span><span class="count-badge">${count}</span></li>`).join('');

                const docenciaCounts = {};
                judgesData.forEach(j => { 
                    if (j.docencia) {
                        j.docencia.forEach(exp => { docenciaCounts[exp] = (docenciaCounts[exp] || 0) + 1; }); 
                    }
                });
                const sortedDocencia = Object.entries(docenciaCounts).sort((a, b) => b[1] - a[1]);
                expertiseStatsList.innerHTML = sortedDocencia.slice(0, 15).map(([exp, count]) => `<li><span>${exp}</span><span class="count-badge">${count}</span></li>`).join('');
            };
            
            const populateFilters = () => {
                const cargos = [...new Set(judgesData.map(j => j.cargo))].sort();
                const judicaturas = [...new Set(judgesData.map(j => j.judicatura).filter(j => j))].sort();
                const docencias = [...new Set(judgesData.flatMap(j => j.docencia || []))].sort();
                
                cargos.forEach(cargo => { filterCargo.add(new Option(cargo, cargo)); });
                judicaturas.forEach(judicatura => { filterJudicatura.add(new Option(judicatura, judicatura)); });
                docencias.forEach(docencia => { filterDocencia.add(new Option(docencia, docencia)); });
            };

            const renderJudges = (judges) => {
                judgesContainer.innerHTML = '';
                resultsCount.textContent = `${judges.length} resultado(s) encontrado(s).`;
                if (judges.length === 0) {
                    judgesContainer.innerHTML = '<p style="text-align:center; grid-column: 1 / -1; padding: 40px 0;">No se encontraron resultados con los filtros aplicados.</p>';
                    return;
                }
                judges.forEach(judge => {
                    const initials = judge.nombre.split(' ').map(n => n[0]).slice(0, 2).join('').toUpperCase();
                    
                    const docenciaTags = judge.docencia ? judge.docencia.map(d => `<li class="docencia-tag">${d}</li>`).join('') : '';
                    
                    const otraEspecialidadHTML = judge.otra_especialidad ? `<div class="otra-especialidad"><strong>Nota:</strong> ${judge.otra_especialidad}</div>` : '';
                    const inactiveClass = judge.estado !== 'ACTIVO' ? 'inactive-judge' : '';

                    const card = document.createElement('div');
                    card.className = `judge-card ${inactiveClass}`;
                    card.innerHTML = `
                        <div class="card-number">${judge.nro}</div>
                        <div class="card-header">
                            <div class="card-photo">${initials}</div>
                            <div class="card-info">
                                <h3 class="name">${judge.nombre}</h3>
                                <p class="cargo">${judge.cargo}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="detail-group"><strong>Dependencia:</strong><p>${judge.dependencia}</p></div>
                            <div class="detail-group"><strong>Judicatura (Área de Especialidad):</strong><p>${judge.judicatura}</p></div>
                            <div class="detail-group">
                                <strong>Áreas de Docencia:</strong>
                                <ul class="expertise-tags">${docenciaTags.length > 0 ? docenciaTags : '<li>No especificada</li>'}</ul>
                            </div>
                            ${otraEspecialidadHTML}
                        </div>`;
                    judgesContainer.appendChild(card);
                });
            };
            
            const applyFilters = () => {
                const nameValue = filterName.value.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                const cargoValue = filterCargo.value;
                const judicaturaValue = filterJudicatura.value;
                const docenciaValue = filterDocencia.value;
                const estadoValue = filterEstado.value;

                const filteredJudges = judgesData.filter(j => {
                    const normalizedName = j.nombre.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                    const isEstadoMatch = !estadoValue || j.estado === estadoValue;
                    
                    return normalizedName.includes(nameValue) && 
                    (!cargoValue || j.cargo === cargoValue) && 
                    (!judicaturaValue || j.judicatura === judicaturaValue) && 
                    (!docenciaValue || (j.docencia && j.docencia.includes(docenciaValue))) &&
                    isEstadoMatch;
                });
                renderJudges(filteredJudges);
                incrementInteraction(); // Count filtering as an interaction
            };

            const resetFilters = () => {
                filterName.value = ''; 
                filterCargo.value = '';
                filterJudicatura.value = '';
                filterDocencia.value = '';
                filterEstado.value = '';
                applyFilters();
            };

            filterName.addEventListener('keyup', applyFilters);
            filterCargo.addEventListener('change', applyFilters);
            filterJudicatura.addEventListener('change', applyFilters);
            filterDocencia.addEventListener('change', applyFilters);
            filterEstado.addEventListener('change', applyFilters);
            resetFiltersBtn.addEventListener('click', resetFilters);

            // Initial Load
            populateStatistics();
            populateFilters();
            renderJudges(judgesData);
        });
        // --- FIN: LÓGICA DIRECTORIO DOCENTES --- //

    </script>
</body>
</html>



