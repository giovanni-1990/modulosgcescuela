<?php
require_once 'session_check.php';
// Evitar caché del navegador
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");
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

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela de Estudios Judiciales - SGC </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <!-- LINEA PARA IMPORTAR EL CSS -->
    <!-- LINEA PARA IMPORTAR EL CSS -->
    <!-- LINEA PARA IMPORTAR EL CSS -->    
    <link rel="stylesheet" href="./css/style.css">
    <!-- LINEA PARA IMPORTAR EL CSS -->
    <!-- LINEA PARA IMPORTAR EL CSS -->
    <!-- LINEA PARA IMPORTAR EL CSS -->    
</head>
<body>
    <button id="mobile-nav-toggle" aria-label="Abrir menú de navegación" aria-expanded="false" style="display:none;">&#9776;</button>

    <nav id="main-nav" tabindex="-1">
        <div class="sidebar-logo-container">
            <img src="https://raw.githubusercontent.com/djsalazar/aa/b74e56ed5e3c0105afd0613626877ac3e2f56563/logo%20-%20Blanco.png" alt="Escuela Estudios Judiciales Logo">
            <p class="sidebar-version">SGC · ISO 9001:2015</p>
        </div>

        <div class="sidebar-section-label">Institución</div>
        <ul>
            <li><a href="#escuela" class="active">Escuela de Estudios Judiciales</a></li>
        </ul>

        <div class="sidebar-section-label">Sistema de Calidad</div>
        <ul>
            <li><a href="#sgc">¿Qué es ISO 9001:2015?</a></li>
            <li><a href="#roles">Comité de Calidad</a></li>
            <li><a href="#politica">Política de Calidad</a></li>
            <li><a href="#objetivos">Objetivos de Calidad</a></li>
            <li><a href="#procesos">Procesos Estratégicos</a></li>
            <li><a href="#beneficios">Beneficios del SGC</a></li>
        </ul>

        <div class="sidebar-section-label">Gestión EEJ</div>
        <ul>
            <li><a href="#eej-sgc">Gestión EEJ en SGC</a></li>
            <li><a href="#riaej">Red RIAEJ</a></li>
            <li><a href="#recursos">Documentos y Recursos</a></li>
        </ul>

        <div class="sidebar-logout-area">
            <form action="logout.php" method="post">
                <button type="submit">&larr; Cerrar sesión</button>
            </form>
        </div>
    </nav>

    <header>
        <div class="header-container">
            <div class="header-titles">
                <h1>Escuela de Estudios Judiciales</h1>
                <h2 class="sgc-subtitle"><strong>Sistema de Gestión de Calidad NTC ISO 9001:2015</strong></h2>
            </div>
            <div class="header-right-stack">
                <button id="startTourBtn">Iniciar Tour</button>
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="theme-checkbox">
                        <input type="checkbox" id="theme-checkbox"/>
                        <div class="slider"></div>
                    </label>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="escuela" class="section-spacing">
            <div class="container">
                <h2 class="fade-in-up">Escuela de Estudios Judiciales</h2>
                <p class="text-justified section-paragraph fade-in-up">La Escuela de Estudios Judiciales es la unidad encargada de planificar, ejecutar y facilitar la capacitación y formación técnica y profesional de jueces, magistrados, funcionarios y empleados del Organismo Judicial, con el fin de asegurar la excelencia y actualización profesional para el eficiente desempeño de sus cargos.</p>
                
                <p class="text-justified section-paragraph fade-in-up">La Escuela de Estudios Judiciales ofrece distintos programas de formación, con base en la detección de necesidades de capacitación de funcionarios judiciales, auxiliares judiciales y personal administrativo y técnico del Organismo Judicial, y se presenta de la forma siguiente:</p>
                
                <div class="programas-formacion-container fade-in-up">
                    <button class="programa-formacion-btn">
                        Programas de Formación Inicial
                    </button>
                    <button class="programa-formacion-btn">
                        Programas de Formación Continua
                    </button>
                    <button class="programa-formacion-btn">
                        Programas de Especialización
                    </button>
                </div>
            </div>
        </section>

        <!-- ══ SGC — ISO 9001:2015 EDITORIAL REDESIGN ══ -->
        <section id="sgc" class="section-spacing" style="background: var(--white-soft); padding: 70px 20px;">
            <div class="container">

                <!-- Encabezado institucional -->
                <div class="fade-in-up" style="text-align:center; margin-bottom: 48px;">
                    <span style="display:inline-block; background: var(--gold-dim); color: var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">ISO 9001 : 2015</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color: var(--navy-deep); margin-bottom:12px; font-weight:800;">Sistema de Gestión de la Calidad</h2>
                    <p style="font-size:1.1rem; color: var(--text-secondary); max-width:700px; margin:0 auto; line-height:1.7;">Marco normativo internacional que transforma la excelencia en metodología medible y la mejora continua en cultura institucional.</p>
                </div>

                <!-- Definición + Objetivo en dos columnas -->
                <div class="fade-in-up" style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-bottom:40px;">
                    <div style="background:#fff; border-radius:16px; padding:32px 28px; border-left:4px solid var(--gold); box-shadow: var(--shadow-sm);">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                            <span style="font-size:1.8rem;"></span>
                            <h3 style="font-size:1.1rem; font-weight:700; color:var(--navy-mid); margin:0;">Definición</h3>
                        </div>
                        <p style="color:var(--text-secondary); line-height:1.7; margin:0; font-size:0.97rem;">El SGC bajo ISO 9001:2015 es un conjunto de políticas, procesos y procedimientos organizacionales diseñados para cumplir con los requisitos de calidad establecidos por la norma internacional, garantizando coherencia y confianza institucional.</p>
                    </div>
                    <div style="background:#fff; border-radius:16px; padding:32px 28px; border-left:4px solid var(--blue-main); box-shadow: var(--shadow-sm);">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                            <span style="font-size:1.8rem;"></span>
                            <h3 style="font-size:1.1rem; font-weight:700; color:var(--navy-mid); margin:0;">Objetivo Principal</h3>
                        </div>
                        <p style="color:var(--text-secondary); line-height:1.7; margin:0; font-size:0.97rem;">Asegurar que la institución proporcione servicios que cumplan consistentemente con las expectativas ciudadanas y los requisitos legales y regulatorios aplicables al Organismo Judicial.</p>
                    </div>
                </div>

                <!-- 7 Ejes del SGC -->
                <h3 class="fade-in-up" style="text-align:center; font-size:1.3rem; color:var(--navy-deep); margin-bottom:28px; font-weight:700; letter-spacing:0.3px;">Los 7 Principios de la Gestión de Calidad</h3>
                <div class="sgc-ejes-grid fade-in-up" style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px; margin-bottom:40px;">
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Enfoque en el Cliente</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Satisfacer necesidades y expectativas ciudadanas como norte estratégico.</p>
                    </div>
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Liderazgo</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Visión clara y compromiso institucional integrado en todos los niveles.</p>
                    </div>
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Participación del Personal</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Todo el equipo comprometido activamente con la calidad institucional.</p>
                    </div>
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Enfoque por Procesos</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Gestión de actividades interrelacionadas para optimizar el desempeño.</p>
                    </div>
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Mejora Continua</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Evolución permanente de eficiencia y eficacia en cada ciclo PHVA.</p>
                    </div>
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Decisiones Basadas en Evidencia</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Análisis de datos como único fundamento de decisiones estratégicas.</p>
                    </div>
                    <div class="sgc-eje-card" style="background:#fff; border-radius:14px; padding:24px 20px; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="font-size:2.2rem; margin-bottom:10px;"></div>
                        <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:0 0 8px;">Gestión de Relaciones</h4>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0; line-height:1.5;">Relaciones estratégicas con partes interesadas para valor sostenible.</p>
                    </div>
                    <!-- Celda decorativa de cierre -->
                    <div style="background: linear-gradient(135deg, var(--navy-deep) 0%, var(--blue-main) 100%); border-radius:14px; padding:24px 20px; text-align:center; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                        <div style="font-size:2rem; margin-bottom:8px; color:#fff;"></div>
                        <p style="colorrgba(255,255,255,0.9); font-size:0.85rem; font-weight:600; margin:0; line-height:1.4;">Excelencia<br>Institucional</p>
                    </div>
                </div>

                <!-- Alcance -->
                <div class="fade-in-up dark-card" style="background: linear-gradient(135deg, var(--navy-deepest) 0%, var(--navy-mid) 100%); border-radius:16px; padding:36px 36px; border-left:5px solid var(--gold);">
                    <h3 style="color:#fff; font-size:1.15rem; font-weight:700; margin:0 0 14px; display:flex; align-items:center; gap:10px;">
                        <span style="color:var(--gold);"></span> Alcance del Sistema de Gestión — Organismo Judicial
                    </h3>
                    <p style="color:rgba(255,255,255,0.88); line-height:1.8; margin:0; font-size:0.97rem;">Trámite y resolución en <strong style="color:var(--gold-light);">segunda instancia</strong> en las ramas del derecho Penal, Civil, Mercantil, Laboral, Familia, Constitucional, Niñez y Adolescentes en: <em>Sala Sexta Penal de Cobán · Sala Regional Mixta de Quiché · Sala Regional Mixta de Huehuetenango · Sala Regional Mixta de Cobán · Sala Primera Civil de Guatemala · Sala Segunda Civil de Guatemala.</em> Trámites Antejuicio.</p>
                </div>

            </div>
        </section>

        <!-- ══ ROLES — COMITÉ DE CALIDAD REDESIGN ══ -->
        <section id="roles" style="background:#fff; padding:70px 20px;">
            <div class="container">

                <!-- Header -->
                <div class="fade-in-up" style="text-align:center; margin-bottom:40px;">
                    <span style="display:inline-block; background: var(--gold-dim); color: var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">Gobierno del SGC</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color: var(--navy-deep); margin-bottom:12px; font-weight:800;">Comité de Calidad</h2>
                    <p style="font-size:1rem; color:var(--text-secondary); max-width:680px; margin:0 auto; line-height:1.7;">Es la máxima autoridad del Sistema de Gestión de Calidad, encargado de dar las directrices estratégicas para la consecución de los objetivos planteados, por medio de la asignación de recursos necesarios.</p>
                </div>

                <!-- ── Estructura del Comité de Calidad — Pirámide Jerárquica ── -->
                <div class="fade-in-up" style="margin-bottom:52px;">

                    <!-- Header -->
                    <div style="text-align:center; margin-bottom:36px;">
                        <span style="display:inline-block; background:var(--gold-dim); color:var(--gold); font-size:0.75rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:5px 16px; border-radius:20px; margin-bottom:12px;">Organigrama Institucional</span>
                        <h3 style="font-size:clamp(1.3rem,2.5vw,1.8rem); color:var(--navy-deep); font-weight:800; margin:0 0 6px;">Estructura del Comité de Calidad</h3>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0;">Organismo Judicial · Sistema de Gestión de Calidad ISO 9001:2015</p>
                    </div>

                    <!-- ═══════════════ PIRÁMIDE ═══════════════ -->
                    <div style="display:flex; flex-direction:column; align-items:center; gap:0; max-width:860px; margin:0 auto;">

                        <!-- NIVEL 1 · Presidencia del OJ -->
                        <div style="display:flex; flex-direction:column; align-items:center; width:100%;">
                            <div data-role="presidente-oj"
                                 style="background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);
                                        color:var(--navy-deepest); border-radius:10px; padding:14px 32px;
                                        font-size:0.85rem; font-weight:800; text-align:center;
                                        box-shadow:0 4px 18px rgba(201,168,76,0.35);
                                        letter-spacing:0.5px; min-width:280px; max-width:360px;
                                        cursor:pointer; transition:box-shadow 0.2s, transform 0.2s;"
                                 onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 24px rgba(201,168,76,0.5)'"
                                 onmouseout="this.style.transform='';this.style.boxShadow='0 4px 18px rgba(201,168,76,0.35)'">
                                <div style="font-size:1.2rem; margin-bottom:4px;"></div>
                                Presidente del Organismo Judicial
                                <div style="font-size:0.7rem; font-weight:600; margin-top:3px; opacity:0.75; text-transform:uppercase; letter-spacing:1px;"></div>
                            </div>
                            <!-- connector down -->
                            <div style="width:2px; height:28px; background:linear-gradient(to bottom,var(--gold),var(--blue-main));"></div>
                        </div>

                        <!-- NIVEL 2 · Tres Cámaras -->
                        <div style="display:flex; flex-direction:column; align-items:center; width:100%;">
                            <!-- horizontal bar spanning the 3 nodes -->
                            <div style="position:relative; width:100%; display:flex; justify-content:center;">
                                <div style="position:absolute; top:0; left:18%; right:18%; height:2px; background:var(--blue-main);"></div>
                            </div>
                            <div style="display:flex; justify-content:center; gap:16px; width:100%; padding-top:0;">
                                <!-- left tick -->
                                <div style="display:flex; flex-direction:column; align-items:center; flex:1; max-width:220px;">
                                    <div style="width:2px; height:20px; background:var(--blue-main);"></div>
                                    <div data-role="camara-penal"
                                         style="background:#fff; border:2px solid var(--blue-main); border-top:4px solid var(--blue-main);
                                                border-radius:10px; padding:12px 14px; text-align:center; width:100%;
                                                font-size:0.78rem; font-weight:700; color:var(--navy-deep);
                                                box-shadow:var(--shadow-sm); cursor:pointer; transition:box-shadow 0.2s,transform 0.2s;"
                                         onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='var(--shadow-md)'"
                                         onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="font-size:1rem; margin-bottom:4px; color:var(--blue-main);"></div>
                                        Presidente Cámara Penal
                                        <div style="font-size:0.65rem; color:var(--text-secondary); margin-top:3px; text-transform:uppercase; letter-spacing:0.8px;"></div>
                                    </div>
                                </div>
                                <!-- center tick -->
                                <div style="display:flex; flex-direction:column; align-items:center; flex:1; max-width:220px;">
                                    <div style="width:2px; height:20px; background:var(--blue-main);"></div>
                                    <div data-role="camara-civil"
                                         style="background:#fff; border:2px solid var(--blue-main); border-top:4px solid var(--blue-main);
                                                border-radius:10px; padding:12px 14px; text-align:center; width:100%;
                                                font-size:0.78rem; font-weight:700; color:var(--navy-deep);
                                                box-shadow:var(--shadow-sm); cursor:pointer; transition:box-shadow 0.2s,transform 0.2s;"
                                         onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='var(--shadow-md)'"
                                         onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="font-size:1rem; margin-bottom:4px; color:var(--blue-main);"></div>
                                        Presidente Cámara Civil
                                        <div style="font-size:0.65rem; color:var(--text-secondary); margin-top:3px; text-transform:uppercase; letter-spacing:0.8px;"></div>
                                    </div>
                                </div>
                                <!-- right tick -->
                                <div style="display:flex; flex-direction:column; align-items:center; flex:1; max-width:220px;">
                                    <div style="width:2px; height:20px; background:var(--blue-main);"></div>
                                    <div data-role="camara-amparo"
                                         style="background:#fff; border:2px solid var(--blue-main); border-top:4px solid var(--blue-main);
                                                border-radius:10px; padding:12px 14px; text-align:center; width:100%;
                                                font-size:0.78rem; font-weight:700; color:var(--navy-deep);
                                                box-shadow:var(--shadow-sm); cursor:pointer; transition:box-shadow 0.2s,transform 0.2s;"
                                         onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='var(--shadow-md)'"
                                         onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="font-size:1rem; margin-bottom:4px; color:var(--blue-main);"></div>
                                        Presidente Cámara de Amparo y Antejuicios
                                        <div style="font-size:0.65rem; color:var(--text-secondary); margin-top:3px; text-transform:uppercase; letter-spacing:0.8px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- connector bar pointing down to level 3 -->
                            <div style="width:2px; height:28px; background:linear-gradient(to bottom,var(--blue-main),var(--blue-light));"></div>
                        </div>

                        <!-- NIVEL 3 · Secretaría + Gerente -->
                        <div style="display:flex; flex-direction:column; align-items:center; width:100%;">
                            <div style="position:relative; width:100%; display:flex; justify-content:center;">
                                <div style="position:absolute; top:0; left:30%; right:30%; height:2px; background:var(--blue-light);"></div>
                            </div>
                            <div style="display:flex; justify-content:center; gap:16px; padding-top:0;">
                                <div style="display:flex; flex-direction:column; align-items:center; max-width:240px;">
                                    <div style="width:2px; height:20px; background:var(--blue-light);"></div>
                                    <div data-role="planificacion"
                                         style="background:#fff; border:2px solid var(--blue-light); border-top:4px solid var(--blue-light);
                                                border-radius:10px; padding:12px 18px; text-align:center; width:100%;
                                                font-size:0.78rem; font-weight:700; color:var(--navy-deep);
                                                box-shadow:var(--shadow-sm); cursor:pointer; transition:box-shadow 0.2s,transform 0.2s;"
                                         onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='var(--shadow-md)'"
                                         onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="font-size:1rem; margin-bottom:4px; color:var(--blue-light);"></div>
                                        Secretaría de Planificación
                                        <div style="font-size:0.65rem; color:var(--text-secondary); margin-top:3px; text-transform:uppercase; letter-spacing:0.8px;"></div>
                                    </div>
                                </div>
                                <div style="display:flex; flex-direction:column; align-items:center; max-width:240px;">
                                    <div style="width:2px; height:20px; background:var(--blue-light);"></div>
                                    <div data-role="gerente-general"
                                         style="background:#fff; border:2px solid var(--blue-light); border-top:4px solid var(--blue-light);
                                                border-radius:10px; padding:12px 18px; text-align:center; width:100%;
                                                font-size:0.78rem; font-weight:700; color:var(--navy-deep);
                                                box-shadow:var(--shadow-sm); cursor:pointer; transition:box-shadow 0.2s,transform 0.2s;"
                                         onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='var(--shadow-md)'"
                                         onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="font-size:1rem; margin-bottom:4px; color:var(--blue-light);"></div>
                                        Gerente General
                                        <div style="font-size:0.65rem; color:var(--text-secondary); margin-top:3px; text-transform:uppercase; letter-spacing:0.8px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- connector down -->
                            <div style="width:2px; height:28px; background:linear-gradient(to bottom,var(--blue-light),var(--navy-mid));"></div>
                        </div>

                        <!-- HUB · COMITÉ DE CALIDAD -->
                        <div style="display:flex; flex-direction:column; align-items:center; width:100%;">
                            <div data-role="comite-calidad"
                                 style="background:linear-gradient(135deg, var(--navy-deepest) 0%, var(--navy-mid) 100%);
                                        border:2px solid var(--gold); border-radius:14px;
                                        padding:20px 48px; text-align:center;
                                        box-shadow:0 6px 28px rgba(10,22,40,0.38), 0 0 0 4px rgba(201,168,76,0.12);
                                        min-width:320px; max-width:480px; cursor:pointer;
                                        transition:box-shadow 0.2s, transform 0.2s;"
                                 onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 36px rgba(10,22,40,0.5), 0 0 0 4px rgba(201,168,76,0.25)'"
                                 onmouseout="this.style.transform='';this.style.boxShadow='0 6px 28px rgba(10,22,40,0.38), 0 0 0 4px rgba(201,168,76,0.12)'">
                                <div style="font-size:1.5rem; margin-bottom:6px;"></div>
                                <div style="color:var(--gold); font-size:0.7rem; font-weight:700; letter-spacing:2.5px; text-transform:uppercase; margin-bottom:6px;"></div>
                                <div style="color:#fff; font-size:1.05rem; font-weight:900; letter-spacing:1.5px; text-transform:uppercase;">Comité de Calidad</div>
                                <div style="width:48px; height:2px; background:var(--gold); margin:10px auto 6px; border-radius:2px;"></div>
                                <div style="color:rgba(255,255,255,0.65); font-size:0.72rem; letter-spacing:0.5px;">Sistema de Gestión de Calidad · OJ</div>
                            </div>
                        </div>

                    </div><!-- /pirámide -->

                    <!-- Leyenda -->
                    <div style="display:flex; justify-content:center; gap:24px; margin-top:28px; flex-wrap:wrap;">
                        <div style="display:flex; align-items:center; gap:6px; font-size:0.72rem; color:var(--text-secondary);">
                            <span style="display:inline-block; width:12px; height:12px; background:linear-gradient(135deg,var(--gold),var(--gold-light)); border-radius:3px;"></span> Presidencia
                        </div>
                        <div style="display:flex; align-items:center; gap:6px; font-size:0.72rem; color:var(--text-secondary);">
                            <span style="display:inline-block; width:12px; height:12px; background:var(--blue-main); border-radius:3px;"></span> Salas y Cámaras
                        </div>
                        <div style="display:flex; align-items:center; gap:6px; font-size:0.72rem; color:var(--text-secondary);">
                            <span style="display:inline-block; width:12px; height:12px; background:var(--blue-light); border-radius:3px;"></span> Coordinación y Administración
                        </div>
                        <div style="display:flex; align-items:center; gap:6px; font-size:0.72rem; color:var(--text-secondary);">
                            <span style="display:inline-block; width:12px; height:12px; background:var(--navy-mid); border:1px solid var(--gold); border-radius:3px;"></span> Comité de Calidad
                        </div>
                    </div>

                </div>

                <!-- Modal for diagram (kept for JS compatibility) -->
                <div id="committee-modal" class="modal-overlay" aria-hidden="true">
                    <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="modal-title">
                        <button id="modal-close" class="modal-close-btn" aria-label="Cerrar ventana">&times;</button>
                        <h4 id="modal-title"></h4>
                        <div id="modal-description"></div>
                    </div>
                </div>

                <!-- ── Interactive Role Cards ─────────────────────────── -->
                <h3 class="fade-in-up" style="text-align:center; color:var(--navy-deep); font-size:1.25rem; font-weight:700; margin:48px 0 28px;">Roles y Responsabilidades del SGC</h3>
                <div class="roles-cards-grid fade-in-up" style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-bottom:20px;">

                    <!-- Card 1: Comité de Calidad -->
                    <div class="role-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; border-top:4px solid var(--navy-mid); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--navy-deep),var(--blue-main)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.4rem; flex-shrink:0;">🏛️</div>
                            <h4 style="font-size:1rem; font-weight:700; color:var(--navy-mid); margin:0; line-height:1.3;">Comité de Calidad</h4>
                        </div>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0 0 14px; line-height:1.6;">Máxima autoridad del SGC. Aprueba la Política, Objetivos y lineamientos estratégicos.</p>
                        <details style="font-size:0.82rem; color:var(--text-secondary);">
                            <summary style="cursor:pointer; font-weight:600; color:var(--blue-main); margin-bottom:8px; list-style:none; display:flex; align-items:center; gap:6px;"><span>▶</span> Ver funciones</summary>
                            <ol style="padding-left:16px; margin:8px 0 0; line-height:1.6;">
                                <li>Aprobar y divulgar la Política y Objetivos de Calidad.</li>
                                <li>Determinar el alcance del SGC.</li>
                                <li>Reunirse cuatrimestralmente para verificar avances.</li>
                                <li>Instruir a unidades para el cumplimiento del SGC.</li>
                                <li>Analizar la inclusión de nuevas dependencias.</li>
                            </ol>
                        </details>
                    </div>

                    <!-- Card 2: Secretaría de Planificación -->
                    <div class="role-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; border-top:4px solid var(--blue-main); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--blue-main),var(--blue-light)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.4rem; flex-shrink:0;">📋</div>
                            <h4 style="font-size:1rem; font-weight:700; color:var(--navy-mid); margin:0; line-height:1.3;">Secretaría de Planificación</h4>
                        </div>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0 0 14px; line-height:1.6;">Ente coordinador del SGC a través del área de Desarrollo Administrativo y Mejora Continua.</p>
                        <details style="font-size:0.82rem; color:var(--text-secondary);">
                            <summary style="cursor:pointer; font-weight:600; color:var(--blue-main); margin-bottom:8px; list-style:none; display:flex; align-items:center; gap:6px;"><span>▶</span> Ver funciones</summary>
                            <ol style="padding-left:16px; margin:8px 0 0; line-height:1.6;">
                                <li>Coordinar la elaboración de la Política de Calidad.</li>
                                <li>Elaborar el cronograma anual de actividades del SGC.</li>
                                <li>Realizar reuniones periódicas con unidades involucradas.</li>
                                <li>Dar seguimiento a informes de Auditoría Interna y Externa.</li>
                                <li>Proponer mejoras en la documentación del SGC.</li>
                            </ol>
                        </details>
                    </div>

                    <!-- Card 3: Dueños de Proceso -->
                    <div class="role-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; border-top:4px solid var(--blue-celeste); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--blue-light),var(--blue-celeste)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.4rem; flex-shrink:0;">👔</div>
                            <h4 style="font-size:1rem; font-weight:700; color:var(--navy-mid); margin:0; line-height:1.3;">Dueños de Proceso</h4>
                        </div>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0 0 14px; line-height:1.6;">Máxima autoridad de la Unidad u Órgano Jurisdiccional. Dirección estratégica y toma de decisiones.</p>
                        <details style="font-size:0.82rem; color:var(--text-secondary);">
                            <summary style="cursor:pointer; font-weight:600; color:var(--blue-main); margin-bottom:8px; list-style:none; display:flex; align-items:center; gap:6px;"><span>▶</span> Ver funciones</summary>
                            <ol style="padding-left:16px; margin:8px 0 0; line-height:1.6;">
                                <li>Aprobar la documentación referente a su proceso.</li>
                                <li>Diseñar y brindar apoyo al Gestor Titular y de Apoyo.</li>
                                <li>Brindar herramientas para la correcta implementación.</li>
                                <li>Revisión y monitoreo de controles e indicadores.</li>
                            </ol>
                        </details>
                    </div>

                    <!-- Card 4: Gestor Titular -->
                    <div class="role-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; border-top:4px solid var(--gold); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--gold),var(--gold-light)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.4rem; flex-shrink:0;">🗂️</div>
                            <h4 style="font-size:1rem; font-weight:700; color:var(--navy-mid); margin:0; line-height:1.3;">Gestor Titular</h4>
                        </div>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0 0 14px; line-height:1.6;">Representante designado del órgano jurisdiccional. Enlace principal con la Secretaría de Planificación.</p>
                        <details style="font-size:0.82rem; color:var(--text-secondary);">
                            <summary style="cursor:pointer; font-weight:600; color:var(--blue-main); margin-bottom:8px; list-style:none; display:flex; align-items:center; gap:6px;"><span>▶</span> Ver funciones</summary>
                            <ol style="padding-left:16px; margin:8px 0 0; line-height:1.6;">
                                <li>Control de la documentación del SGC.</li>
                                <li>Participar en auditorías internas y externas.</li>
                                <li>Análisis y seguimiento de Acciones de Mejora y Correctivas.</li>
                            </ol>
                        </details>
                    </div>

                    <!-- Card 5: Gestor de Apoyo -->
                    <div class="role-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; border-top:4px solid var(--gold-light); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--gold-light),var(--gold)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.4rem; flex-shrink:0;">🤝</div>
                            <h4 style="font-size:1rem; font-weight:700; color:var(--navy-mid); margin:0; line-height:1.3;">Gestor de Apoyo</h4>
                        </div>
                        <p style="font-size:0.82rem; color:var(--text-secondary); margin:0 0 14px; line-height:1.6;">Suplente del Gestor Titular. Asegura la continuidad de las gestiones del SGC en cualquier circunstancia.</p>
                        <details style="font-size:0.82rem; color:var(--text-secondary);">
                            <summary style="cursor:pointer; font-weight:600; color:var(--blue-main); margin-bottom:8px; list-style:none; display:flex; align-items:center; gap:6px;"><span>▶</span> Ver funciones</summary>
                            <ol style="padding-left:16px; margin:8px 0 0; line-height:1.6;">
                                <li>Apoyar al Gestor Titular en la documentación del SGC.</li>
                                <li>Continuidad en ausencia del Gestor Titular.</li>
                                <li>Participar en auditorías y seguimiento de acciones correctivas.</li>
                            </ol>
                        </details>
                    </div>

                    <!-- Card 6: Base normativa -->
                    <div class="dark-card" style="background: linear-gradient(135deg, var(--navy-deepest) 0%, var(--navy-mid) 100%); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-md); display:flex; flex-direction:column; justify-content:space-between;">
                        <div>
                            <div style="font-size:1.8rem; margin-bottom:12px;">📜</div>
                            <h4 style="color:#fff; font-size:0.95rem; font-weight:700; margin:0 0 10px;">Base Legal</h4>
                            <p style="color:rgba(255,255,255,0.82); font-size:0.82rem; line-height:1.6; margin:0;">Acuerdo 8-2022, Artículo 7.Bis: <em>"Los órganos jurisdiccionales y unidades administrativas que forman parte del Sistema deberán designar a una persona que le represente, a quien se le denominará <strong style="color:var(--gold-light);">'gestor'</strong>."</em></p>
                        </div>
                    </div>

                </div>

            </div>


        <!-- ══ POLÍTICA DE CALIDAD REDESIGN ══ -->
        <section id="politica" style="background:var(--white-soft); padding:70px 20px;">
            <div class="container">

                <div class="fade-in-up" style="text-align:center; margin-bottom:44px;">
                    <span style="display:inline-block; background:var(--gold-dim); color:var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">Compromiso Institucional</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color:var(--navy-deep); margin-bottom:10px; font-weight:800;">Política de Calidad</h2>
                    <p style="color:var(--text-secondary); font-size:0.95rem;">Organismo Judicial de Guatemala</p>
                </div>

                <div class="politica-layout fade-in-up" style="display:grid; grid-template-columns:1fr 1fr; gap:32px; align-items:start; margin-bottom:32px;">

                    <!-- Quote principal -->
                    <div style="background:linear-gradient(135deg,var(--navy-deepest) 0%,var(--navy-mid) 100%); border-radius:20px; padding:40px 36px; position:relative; overflow:hidden;">
                        <div style="position:absolute; top:-20px; left:20px; font-size:8rem; color:rgba(255,255,255,0.05); line-height:1; font-family:Georgia,serif;">"</div>
                        <p class="politica-quote" style="color:rgba(255,255,255,0.95); font-size:1.15rem; line-height:1.85; margin:0; position:relative; z-index:1; font-style:italic;">En el Organismo Judicial de Guatemala proporcionamos un servicio de administración de justicia aplicando la <strong style="color:var(--gold-light);">Constitución Política de la República de Guatemala</strong> y demás leyes vigentes, procurando la prontitud y la celeridad en cada gestión, la independencia en nuestras resoluciones, todo esto bajo una <strong style="color:var(--gold-light);">conducta ética</strong> y el compromiso social por parte del personal que forma parte del SGC.</p>
                        <div style="margin-top:24px; padding-top:20px; border-top:1px solid rgba(201,168,76,0.3);">
                            <p style="color:rgba(255,255,255,0.8); font-size:0.9rem; margin:0; line-height:1.6;">La administración eficiente de los recursos, la <strong style="color:var(--gold-light);">capacitación constante de nuestros colaboradores</strong> y su desempeño eficiente nos permite mejorar continuamente la Gestión de Calidad de la Institución, logrando satisfacer las necesidades y expectativas de los usuarios y partes interesadas.</p>
                        </div>
                        <div style="margin-top:20px;">
                            <button id="viewPoliticaImageBtn" class="view-image-button" style="background:rgba(201,168,76,0.2); color:var(--gold-light); border:1px solid var(--gold); padding:10px 20px; border-radius:8px; font-size:0.85rem; cursor:pointer; display:inline-flex; align-items:center; gap:8px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                Ver Documento Oficial
                            </button>
                        </div>
                    </div>

                    <!-- Valores institucionales -->
                    <div>
                        <h3 style="color:var(--navy-mid); font-size:1.1rem; font-weight:700; margin:0 0 20px; padding-bottom:10px; border-bottom:2px solid var(--gold);">Valores que Orientan la Política</h3>
                        <div style="display:flex; flex-direction:column; gap:12px;">
                            <div class="politica-value-item" style="display:flex; align-items:flex-start; gap:14px; background:#fff; border-radius:12px; padding:16px 18px; box-shadow:var(--shadow-sm); border-left:3px solid var(--blue-main);">
                                <span style="font-size:1.4rem; flex-shrink:0;">⚖️</span>
                                <div><h4 style="color:var(--navy-mid); font-size:0.95rem; font-weight:700; margin:0 0 4px;">Prontitud y Celeridad</h4><p style="color:var(--text-secondary); font-size:0.82rem; margin:0; line-height:1.5;">Resoluciones dentro de plazos establecidos para garantizar acceso a la justicia.</p></div>
                            </div>
                            <div class="politica-value-item" style="display:flex; align-items:flex-start; gap:14px; background:#fff; border-radius:12px; padding:16px 18px; box-shadow:var(--shadow-sm); border-left:3px solid var(--blue-main);">
                                <span style="font-size:1.4rem; flex-shrink:0;">🏛️</span>
                                <div><h4 style="color:var(--navy-mid); font-size:0.95rem; font-weight:700; margin:0 0 4px;">Independencia Judicial</h4><p style="color:var(--text-secondary); font-size:0.82rem; margin:0; line-height:1.5;">Resoluciones basadas exclusivamente en la ley, sin presiones externas.</p></div>
                            </div>
                            <div class="politica-value-item" style="display:flex; align-items:flex-start; gap:14px; background:#fff; border-radius:12px; padding:16px 18px; box-shadow:var(--shadow-sm); border-left:3px solid var(--gold);">
                                <span style="font-size:1.4rem; flex-shrink:0;">🎓</span>
                                <div><h4 style="color:var(--navy-mid); font-size:0.95rem; font-weight:700; margin:0 0 4px;">Capacitación Continua</h4><p style="color:var(--text-secondary); font-size:0.82rem; margin:0; line-height:1.5;">Formación permanente del talento humano como motor de la mejora continua.</p></div>
                            </div>
                            <div class="politica-value-item" style="display:flex; align-items:flex-start; gap:14px; background:#fff; border-radius:12px; padding:16px 18px; box-shadow:var(--shadow-sm); border-left:3px solid var(--gold);">
                                <span style="font-size:1.4rem; flex-shrink:0;">🤝</span>
                                <div><h4 style="color:var(--navy-mid); font-size:0.95rem; font-weight:700; margin:0 0 4px;">Conducta Ética</h4><p style="color:var(--text-secondary); font-size:0.82rem; margin:0; line-height:1.5;">Compromiso social e integridad en cada proceso de la administración de justicia.</p></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ══ OBJETIVOS DE CALIDAD REDESIGN ══ -->
        <section id="objetivos" style="background:#fff; padding:70px 20px;">
            <div class="container">

                <div class="fade-in-up" style="text-align:center; margin-bottom:44px;">
                    <span style="display:inline-block; background:var(--gold-dim); color:var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">Plan Estratégico</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color:var(--navy-deep); margin-bottom:10px; font-weight:800;">Objetivos de Calidad</h2>
                    <div style="display:flex; justify-content:center; gap:14px; margin-top:16px; flex-wrap:wrap;">
                        <button id="viewObjetivosImageBtn" class="view-image-button" style="background:var(--navy-deep); color:#fff; border:none; padding:10px 22px; border-radius:8px; font-size:0.88rem; cursor:pointer; display:inline-flex; align-items:center; gap:8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            Ver Documento Oficial
                        </button>
                    </div>
                </div>

                <div class="objetivos-grid fade-in-up" style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">1</span>
                            <span style="font-size:1.5rem;">📋</span>
                        </div>
                        <div style="background:var(--blue-main); color:#fff; font-size:1.6rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">82%</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Resoluciones dentro del plazo</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Emisión de resoluciones judiciales dentro de los tiempos legalmente estipulados.</p>
                    </div>

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">2</span>
                            <span style="font-size:1.5rem;">⚖️</span>
                        </div>
                        <div style="background:var(--blue-main); color:#fff; font-size:1.6rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">75%</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Ejecutorias Civil y Penal ≤ 18 días</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Ejecución de sentencias firmes en áreas clave dentro del plazo máximo.</p>
                    </div>

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--blue-light); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">3</span>
                            <span style="font-size:1.5rem;">📊</span>
                        </div>
                        <div style="background:var(--blue-light); color:#fff; font-size:1.6rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">3</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Procedimientos estandarizados</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Salas de la Corte de Apelaciones dentro del alcance del SGC.</p>
                    </div>

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--blue-light); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">4</span>
                            <span style="font-size:1.5rem;">🔧</span>
                        </div>
                        <div style="background:var(--blue-light); color:#fff; font-size:1.6rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">+3%</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Eficiencia en recursos e insumos</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Optimización de gestión de recursos materiales y del personal administrativo.</p>
                    </div>

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">5</span>
                            <span style="font-size:1.5rem;">🎓</span>
                        </div>
                        <div style="background:var(--gold); color:var(--navy-deepest); font-size:1.6rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">85%</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Programa de capacitación EEJ</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Cumplimiento del programa técnico de la Escuela de Estudios Judiciales.</p>
                    </div>

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">6</span>
                            <span style="font-size:1.5rem;">📈</span>
                        </div>
                        <div style="background:var(--gold); color:var(--navy-deepest); font-size:1rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">Anual</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Evaluación del desempeño</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Seguimiento a las oportunidades organizacionales identificadas en la evaluación anual.</p>
                    </div>

                    <div class="objetivo-card" style="background:var(--white-soft); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-sm); border-top:4px solid var(--navy-mid); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                            <span style="background:var(--navy-deep); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">7</span>
                            <span style="font-size:1.5rem;">🏆</span>
                        </div>
                        <div style="background:var(--navy-mid); color:#fff; font-size:1.6rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">85%</div>
                        <h4 style="color:var(--navy-mid); font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Eficacia del SGC</h4>
                        <p style="color:var(--text-secondary); font-size:0.8rem; margin:0; line-height:1.5;">Efectividad global del sistema cumpliendo sus propósitos estratégicos establecidos.</p>
                    </div>

                    <div class="objetivo-card dark-card" style="background:linear-gradient(135deg,var(--navy-deep) 0%,var(--blue-main) 100%); border-radius:16px; padding:24px 20px; box-shadow:var(--shadow-md); display:flex; flex-direction:column; justify-content:space-between;">
                        <div>
                            <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                                <span style="background:rgba(255,255,255,0.2); color:#fff; font-size:1rem; font-weight:800; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">8</span>
                                <span style="font-size:1.5rem;">😊</span>
                            </div>
                            <div style="background:rgba(255,255,255,0.15); color:#fff; font-size:1rem; font-weight:800; padding:8px 14px; border-radius:8px; display:inline-block; margin-bottom:10px;">Meta Central</div>
                            <h4 style="color:#fff; font-size:0.92rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Satisfacción de los Usuarios</h4>
                            <p style="color:rgba(255,255,255,0.82); font-size:0.8rem; margin:0; line-height:1.5;">Mejora continua de la percepción ciudadana sobre los servicios de administración de justicia.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>        <!-- ══ PROCESOS — DASHBOARD GRID REDESIGN ══ -->
        <section id="procesos" style="background:var(--white-soft); padding:70px 20px;">
            <div class="container">

                <div class="fade-in-up" style="text-align:center; margin-bottom:40px;">
                    <span style="display:inline-block; background:var(--gold-dim); color:var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">Dependencias del SGC</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color:var(--navy-deep); margin-bottom:12px; font-weight:800;">¿Quiénes forman parte del SGC?</h2>
                    <p style="color:var(--text-secondary); max-width:660px; margin:0 auto; line-height:1.7; font-size:0.97rem;">Órganos jurisdiccionales y unidades administrativas que integran el Sistema de Gestión de Calidad del Organismo Judicial.</p>
                </div>

                <!-- Filter chips -->
                <div class="procesos-filters fade-in-up" style="display:flex; flex-wrap:wrap; gap:10px; justify-content:center; margin-bottom:36px;">
                    <button class="filter-chip active" data-filter="all" onclick="filtrarProcesos('all',this)" style="background:var(--navy-deep); color:#fff; border:none; padding:8px 18px; border-radius:20px; font-size:0.85rem; font-weight:600; cursor:pointer; transition:all 0.2s;">Todos <span id="count-all"></span></button>
                    <button class="filter-chip" data-filter="misional" onclick="filtrarProcesos('misional',this)" style="background:#fff; color:var(--blue-main); border:2px solid var(--blue-main); padding:8px 18px; border-radius:20px; font-size:0.85rem; font-weight:600; cursor:pointer; transition:all 0.2s;">⚖️ Misionales</button>
                    <button class="filter-chip" data-filter="apoyo" onclick="filtrarProcesos('apoyo',this)" style="background:#fff; color:var(--gold); border:2px solid var(--gold); padding:8px 18px; border-radius:20px; font-size:0.85rem; font-weight:600; cursor:pointer; transition:all 0.2s;">🔧 Apoyo</button>
                </div>

                <!-- Dashboard grid -->
                <div class="procesos-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:18px;">

                    <!-- ─── MISIONALES ─────────────────────────────── -->
                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sala Sexta Penal — Cobán, Alta Verapaz</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte de Apelaciones del Ramo Penal, Narcoactividad y Delitos contra el Ambiente</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22904308 · Ext. 83796/7</div>
                    </div>

                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sala Regional Mixta — Quiché</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte de Apelaciones de Quiché</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22904665 · Ext. 80101/2</div>
                    </div>

                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sala Regional Mixta — Cobán, Alta Verapaz</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte de Apelaciones de Cobán</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22904665 · Ext. 83931/2</div>
                    </div>

                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sala Regional Mixta — Huehuetenango</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte de Apelaciones de Huehuetenango</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22904578 · Ext. 80721</div>
                    </div>

                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sección Antejuicios — Cámara de Amparo CSJ</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte Suprema de Justicia · Trámites Antejuicio</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22904044 · Ext. 4188</div>
                    </div>

                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sala Primera Civil y Mercantil — Guatemala</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte de Apelaciones del Ramo Civil y Mercantil</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22905044/45 · Ext. 89636/37</div>
                    </div>

                    <div class="proceso-card" data-cat="misional" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-main); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-main); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">MISIONAL</span>
                            <span style="font-size:1.2rem;">⚖️</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Sala Segunda Civil y Mercantil — Guatemala</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Corte de Apelaciones del Ramo Civil y Mercantil</p>
                        <div style="margin-top:10px; padding-top:10px; border-top:1px solid var(--white-mid); font-size:0.75rem; color:var(--text-secondary);">📞 22905551 · 2290-4444</div>
                    </div>

                    <!-- ─── APOYO ───────────────────────────────────── -->
                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--gold); color:var(--navy-deepest); font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">APOYO</span>
                            <span style="font-size:1.2rem;">🏢</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Unidad de Administración de Edificios</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Gestión y mantenimiento de las infraestructuras edilicias del OJ.</p>
                    </div>

                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--gold); color:var(--navy-deepest); font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">APOYO</span>
                            <span style="font-size:1.2rem;">🎓</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Escuela de Estudios Judiciales</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Capacitación y formación continua del personal judicial, institución emblema.</p>
                    </div>

                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--gold); color:var(--navy-deepest); font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">APOYO</span>
                            <span style="font-size:1.2rem;">🔩</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Unidad de Mantenimiento Correctivo y Servicios Técnicos</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Soluciones y reparaciones técnicas para equipamiento e instalaciones.</p>
                    </div>

                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--gold); color:var(--navy-deepest); font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">APOYO</span>
                            <span style="font-size:1.2rem;">💻</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Gerencia de Informática</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Administración de sistemas y recursos tecnológicos de la institución.</p>
                    </div>

                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--gold); color:var(--navy-deepest); font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">APOYO</span>
                            <span style="font-size:1.2rem;">🛒</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Unidad de Adquisiciones de Bienes y Servicios</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Gestión de compras e insumos para las dependencias del SGC.</p>
                    </div>

                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--gold); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--gold); color:var(--navy-deepest); font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">APOYO</span>
                            <span style="font-size:1.2rem;">🚗</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Unidad de Transportes y Taller Mecánico</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Logística de transporte y mantenimiento vehicular institucional.</p>
                    </div>

                    <div class="proceso-card" data-cat="apoyo" style="background:#fff; border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-sm); border-left:4px solid var(--blue-celeste); transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
                            <span style="background:var(--blue-celeste); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:1px; padding:3px 10px; border-radius:10px;">RRHH</span>
                            <span style="font-size:1.2rem;">👥</span>
                        </div>
                        <h4 style="color:var(--navy-mid); font-size:0.88rem; font-weight:700; margin:0 0 8px; line-height:1.4;">Unidades de Recursos Humanos</h4>
                        <p style="color:var(--text-secondary); font-size:0.78rem; margin:0; line-height:1.5;">Administración · Clasificación de Puestos · Desarrollo Integral · Dotación · Archivo Personal</p>
                    </div>

                    <!-- ── Enlace directorio OJ ── -->
                    <div style="background:linear-gradient(135deg,var(--navy-deepest) 0%,var(--blue-main) 100%); border-radius:14px; padding:22px 20px; box-shadow:var(--shadow-md); display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; grid-column:span 2;">
                        <span style="font-size:2rem; margin-bottom:10px;">🔍</span>
                        <p style="color:rgba(255,255,255,0.9); font-size:0.9rem; margin:0 0 16px; line-height:1.5;">¿Necesita contactar a una dependencia específica?<br>Consulte el <strong style="color:var(--gold-light);">Directorio Oficial</strong> del Organismo Judicial.</p>
                        <a href="http://directorio.oj.gob.gt/" target="_blank" rel="noopener" style="background:rgba(255,255,255,0.15); color:#fff; border:1px solid rgba(255,255,255,0.3); padding:10px 24px; border-radius:8px; font-size:0.88rem; font-weight:600; text-decoration:none; transition:all 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'">Ir al Directorio OJ →</a>
                    </div>

                </div><!-- /procesos-grid -->

            </div>
        </section>

        <script>
        function filtrarProcesos(cat, btn) {
            document.querySelectorAll('.filter-chip').forEach(function(c) {
                c.style.background = '#fff';
                c.style.color = c.dataset.filter === 'misional' ? 'var(--blue-main)' : (c.dataset.filter === 'apoyo' ? 'var(--gold)' : 'var(--navy-deep)');
                c.style.border = '2px solid ' + (c.dataset.filter === 'misional' ? 'var(--blue-main)' : (c.dataset.filter === 'apoyo' ? 'var(--gold)' : 'var(--navy-deep)'));
            });
            btn.style.background = cat === 'all' ? 'var(--navy-deep)' : (cat === 'misional' ? 'var(--blue-main)' : 'var(--gold)');
            btn.style.color = cat === 'apoyo' ? 'var(--navy-deepest)' : '#fff';
            btn.style.border = 'none';
            document.querySelectorAll('.proceso-card').forEach(function(card) {
                card.style.display = (cat === 'all' || card.dataset.cat === cat) ? '' : 'none';
            });
        }
        </script>

        <!-- ══ BENEFICIOS — HOJA DE RUTA REDESIGN ══ -->
        <section id="beneficios" style="background:#fff; padding:70px 20px;">
            <div class="container">

                <div class="fade-in-up" style="text-align:center; margin-bottom:48px;">
                    <span style="display:inline-block; background:var(--gold-dim); color:var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">ISO 9001 · Impacto Institucional</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color:var(--navy-deep); margin-bottom:12px; font-weight:800;">Beneficios del Sistema de Gestión de Calidad</h2>
                    <p style="color:var(--text-secondary); max-width:660px; margin:0 auto; line-height:1.7; font-size:0.97rem;">Cada beneficio del SGC es un eslabón en la cadena de excelencia del Organismo Judicial.</p>
                </div>

                <div class="beneficios-roadmap fade-in-up" style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-bottom:40px;">

                    <div class="beneficio-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-sm); position:relative; overflow:hidden; transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="position:absolute; top:-10px; right:-10px; font-size:5rem; color:var(--blue-main); opacity:0.06; font-weight:900; line-height:1;">01</div>
                        <div style="font-size:2.2rem; margin-bottom:14px;">🤝</div>
                        <h4 style="color:var(--navy-mid); font-size:1rem; font-weight:700; margin:0 0 10px;">Satisfacción del Ciudadano</h4>
                        <p style="color:var(--text-secondary); font-size:0.85rem; margin:0; line-height:1.6;">Al centrarse en los requisitos del usuario y superarlos, se incrementa la confianza y legitimidad del sistema judicial ante la ciudadanía.</p>
                        <div style="margin-top:14px; height:3px; background:linear-gradient(90deg, var(--blue-main), var(--blue-celeste)); border-radius:2px;"></div>
                    </div>

                    <div class="beneficio-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-sm); position:relative; overflow:hidden; transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="position:absolute; top:-10px; right:-10px; font-size:5rem; color:var(--blue-main); opacity:0.06; font-weight:900; line-height:1;">02</div>
                        <div style="font-size:2.2rem; margin-bottom:14px;">⚡</div>
                        <h4 style="color:var(--navy-mid); font-size:1rem; font-weight:700; margin:0 0 10px;">Eficiencia Operativa</h4>
                        <p style="color:var(--text-secondary); font-size:0.85rem; margin:0; line-height:1.6;">La estandarización de procesos y la identificación de áreas de mejora conducen a una utilización más eficaz de los recursos y a la reducción de errores.</p>
                        <div style="margin-top:14px; height:3px; background:linear-gradient(90deg, var(--blue-main), var(--blue-celeste)); border-radius:2px;"></div>
                    </div>

                    <div class="beneficio-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-sm); position:relative; overflow:hidden; transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="position:absolute; top:-10px; right:-10px; font-size:5rem; color:var(--gold); opacity:0.08; font-weight:900; line-height:1;">03</div>
                        <div style="font-size:2.2rem; margin-bottom:14px;">⚖️</div>
                        <h4 style="color:var(--navy-mid); font-size:1rem; font-weight:700; margin:0 0 10px;">Cumplimiento Normativo</h4>
                        <p style="color:var(--text-secondary); font-size:0.85rem; margin:0; line-height:1.6;">Un SGC robusto asegura que la institución se mantenga al día y cumpla con todas las normativas legales y regulatorias aplicables.</p>
                        <div style="margin-top:14px; height:3px; background:linear-gradient(90deg, var(--gold), var(--gold-light)); border-radius:2px;"></div>
                    </div>

                    <div class="beneficio-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-sm); position:relative; overflow:hidden; transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="position:absolute; top:-10px; right:-10px; font-size:5rem; color:var(--gold); opacity:0.08; font-weight:900; line-height:1;">04</div>
                        <div style="font-size:2.2rem; margin-bottom:14px;">🏆</div>
                        <h4 style="color:var(--navy-mid); font-size:1rem; font-weight:700; margin:0 0 10px;">Imagen y Reputación Institucional</h4>
                        <p style="color:var(--text-secondary); font-size:0.85rem; margin:0; line-height:1.6;">La certificación ISO 9001 es reconocimiento internacional que demuestra el compromiso con la excelencia, elevando el prestigio del OJ.</p>
                        <div style="margin-top:14px; height:3px; background:linear-gradient(90deg, var(--gold), var(--gold-light)); border-radius:2px;"></div>
                    </div>

                    <div class="beneficio-card" style="background:var(--white-soft); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-sm); position:relative; overflow:hidden; transition:transform 0.2s,box-shadow 0.2s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="position:absolute; top:-10px; right:-10px; font-size:5rem; color:var(--navy-mid); opacity:0.06; font-weight:900; line-height:1;">05</div>
                        <div style="font-size:2.2rem; margin-bottom:14px;">📈</div>
                        <h4 style="color:var(--navy-mid); font-size:1rem; font-weight:700; margin:0 0 10px;">Mejora Continua & Decisiones Informadas</h4>
                        <p style="color:var(--text-secondary); font-size:0.85rem; margin:0; line-height:1.6;">El ciclo <strong>PHVA</strong> inherente a la norma promueve una cultura de aprendizaje y adaptación constante basada en datos y evidencias.</p>
                        <div style="margin-top:14px; height:3px; background:linear-gradient(90deg, var(--navy-mid), var(--blue-main)); border-radius:2px;"></div>
                    </div>

                    <!-- PHVA visual badge -->
                    <div style="background:linear-gradient(135deg,var(--navy-deepest) 0%,var(--navy-mid) 100%); border-radius:16px; padding:28px 24px; box-shadow:var(--shadow-md); display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center;">
                        <h4 style="color:var(--gold-light); font-size:0.9rem; font-weight:700; margin:0 0 16px; letter-spacing:1px; text-transform:uppercase;">Ciclo de Excelencia</h4>
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px; width:100%;">
                            <div style="background:rgba(37,99,168,0.4); border-radius:8px; padding:10px 8px; text-align:center;">
                                <div style="color:var(--gold-light); font-weight:800; font-size:1rem;">P</div>
                                <div style="color:rgba(255,255,255,0.75); font-size:0.72rem; margin-top:2px;">Planificar</div>
                            </div>
                            <div style="background:rgba(37,99,168,0.4); border-radius:8px; padding:10px 8px; text-align:center;">
                                <div style="color:var(--gold-light); font-weight:800; font-size:1rem;">H</div>
                                <div style="color:rgba(255,255,255,0.75); font-size:0.72rem; margin-top:2px;">Hacer</div>
                            </div>
                            <div style="background:rgba(37,99,168,0.4); border-radius:8px; padding:10px 8px; text-align:center;">
                                <div style="color:var(--gold-light); font-weight:800; font-size:1rem;">V</div>
                                <div style="color:rgba(255,255,255,0.75); font-size:0.72rem; margin-top:2px;">Verificar</div>
                            </div>
                            <div style="background:rgba(37,99,168,0.4); border-radius:8px; padding:10px 8px; text-align:center;">
                                <div style="color:var(--gold-light); font-weight:800; font-size:1rem;">A</div>
                                <div style="color:rgba(255,255,255,0.75); font-size:0.72rem; margin-top:2px;">Actuar</div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Cierre institucional -->
                <div class="fade-in-up" style="text-align:center; padding:36px 40px; background:var(--white-soft); border-radius:16px; border-top:3px solid var(--gold);">
                    <p style="color:var(--navy-mid); font-size:1.1rem; font-style:italic; line-height:1.8; margin:0; max-width:680px; margin:0 auto;">"La calidad no es un acto, es un hábito institucional que se construye día a día con el compromiso de cada persona que forma parte del Sistema."</p>
                    <div style="margin-top:12px; color:var(--gold); font-size:0.85rem; font-weight:600; letter-spacing:1px; text-transform:uppercase;">SGC · Organismo Judicial · ISO 9001:2015</div>
                </div>

            </div>
        </section>

        <!-- ══ EEJ EN EL SGC REDESIGN ══ -->
        <section id="eej-sgc" style="background:var(--white-soft); padding:70px 20px;">
            <div class="container">

                <!-- Section header -->
                <div class="fade-in-up" style="text-align:center; margin-bottom:44px;">
                    <span style="display:inline-block; background:var(--gold-dim); color:var(--gold); font-size:0.8rem; font-weight:700; letter-spacing:2px; text-transform:uppercase; padding:6px 18px; border-radius:20px; margin-bottom:14px;">ISO 9001:2015</span>
                    <h2 style="font-size:clamp(1.8rem,3.5vw,2.6rem); color:var(--navy-deep); margin-bottom:12px; font-weight:800;">Escuela de Estudios Judiciales en el SGC</h2>
                    <p style="font-size:1rem; color:var(--text-secondary); max-width:700px; margin:0 auto; line-height:1.7;">Como parte del Sistema de Gestión de Calidad, la EEJ cumple una función de apoyo y debe contar con documentos clave revisables durante auditorías internas y externas.</p>
                </div>

                <!-- Document cards grid (3 cols) -->
                <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:22px; margin-bottom:28px;">

                    <!-- Card 1: Ficha de Procesos -->
                    <div style="background:#fff; border-radius:16px; padding:28px 24px; border-top:4px solid var(--blue-main); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s; display:flex; flex-direction:column;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--navy-deep),var(--blue-main)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.3rem; flex-shrink:0;">📄</div>
                            <div>
                                <span style="font-size:0.7rem; font-weight:700; color:var(--blue-main); text-transform:uppercase; letter-spacing:1px;">FP-GC-01</span>
                                <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:2px 0 0; line-height:1.3;">Ficha de Procesos</h4>
                            </div>
                        </div>
                        <p style="font-size:0.83rem; color:var(--text-secondary); line-height:1.6; margin:0 0 18px; flex-grow:1;">Resume los elementos, finalidad y controles de un proceso. Clave para la estandarización y auditoría dentro del SGC.</p>
                        <span id="openFichaProcesosBtn" style="display:inline-block; background:var(--blue-main); color:#fff; font-size:0.78rem; font-weight:700; padding:8px 16px; border-radius:8px; cursor:pointer; text-align:center; transition:background 0.2s;" onmouseover="this.style.background='var(--blue-light)'" onmouseout="this.style.background='var(--blue-main)'">Ver Ficha de Procesos</span>
                    </div>

                    <!-- Card 2: Análisis FODA -->
                    <div style="background:#fff; border-radius:16px; padding:28px 24px; border-top:4px solid var(--blue-main); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s; display:flex; flex-direction:column;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--blue-main),var(--blue-light)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.3rem; flex-shrink:0;">🔍</div>
                            <div>
                                <span style="font-size:0.7rem; font-weight:700; color:var(--blue-main); text-transform:uppercase; letter-spacing:1px;">FO-PE-01</span>
                                <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:2px 0 0; line-height:1.3;">Análisis de FODA</h4>
                            </div>
                        </div>
                        <p style="font-size:0.83rem; color:var(--text-secondary); line-height:1.6; margin:0 0 18px; flex-grow:1;">Técnica de planificación estratégica que analiza Fortalezas, Oportunidades, Debilidades y Amenazas institucionales.</p>
                        <span id="openFodaModalButton" style="display:inline-block; background:var(--blue-main); color:#fff; font-size:0.78rem; font-weight:700; padding:8px 16px; border-radius:8px; cursor:pointer; text-align:center; transition:background 0.2s;" onmouseover="this.style.background='var(--blue-light)'" onmouseout="this.style.background='var(--blue-main)'">Ver FODA</span>
                    </div>

                    <!-- Card 3: Gestión de Riesgos -->
                    <div id="openRiskModalCard" class="clickable-card" style="background:#fff; border-radius:16px; padding:28px 24px; border-top:4px solid var(--gold); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s; display:flex; flex-direction:column; cursor:pointer;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--gold),var(--gold-light)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.3rem; flex-shrink:0;">⚠️</div>
                            <div>
                                <span style="font-size:0.7rem; font-weight:700; color:var(--gold); text-transform:uppercase; letter-spacing:1px;">FO-PE-03</span>
                                <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:2px 0 0; line-height:1.3;">Gestión de Riesgos</h4>
                            </div>
                        </div>
                        <p style="font-size:0.83rem; color:var(--text-secondary); line-height:1.6; margin:0 0 18px; flex-grow:1;">Matriz de identificación de riesgos. Instrumento fundamental para mejorar el control de riesgos identificados en los procesos.</p>
                        <a class="risk-details-button" href="https://clases.legaltech.com.gt/gio/eej-2026/riaej-2026/NCR_6/MATRIZ%20%20DE%20RIESGOS/" target="_self" rel="noopener" onclick="event.stopPropagation();" style="display:inline-block; background:var(--gold); color:var(--navy-deepest); font-size:0.78rem; font-weight:700; padding:8px 16px; border-radius:8px; text-decoration:none; text-align:center; transition:background 0.2s;" onmouseover="this.style.background='var(--gold-light)'" onmouseout="this.style.background='var(--gold)'">Ver Riesgos</a>
                    </div>

                    <!-- Card 4: Control de Documentos -->
                    <div style="background:#fff; border-radius:16px; padding:28px 24px; border-top:4px solid var(--gold); box-shadow:var(--shadow-sm); transition:transform 0.2s,box-shadow 0.2s; display:flex; flex-direction:column;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:16px;">
                            <div style="width:44px; height:44px; background:linear-gradient(135deg,var(--gold-light),var(--gold)); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.3rem; flex-shrink:0;">🗂️</div>
                            <div>
                                <span style="font-size:0.7rem; font-weight:700; color:var(--gold); text-transform:uppercase; letter-spacing:1px;">FO-GC-02</span>
                                <h4 style="font-size:0.95rem; font-weight:700; color:var(--navy-mid); margin:2px 0 0; line-height:1.3;">Control de Documentos</h4>
                            </div>
                        </div>
                        <p style="font-size:0.83rem; color:var(--text-secondary); line-height:1.6; margin:0; flex-grow:1;">Lista Maestra de Documentos con información detallada de cada documento: código, nombre, versión, revisión, responsable y ubicación. Garantiza la trazabilidad y el uso de versiones correctas.</p>
                    </div>

                    <!-- Card 5: Indicador EEJ — dark metric card spanning 2 cols -->
                    <div class="dark-card" style="grid-column:span 2; background:linear-gradient(135deg,var(--navy-deepest) 0%,var(--navy-mid) 100%); border-radius:16px; padding:28px 28px; box-shadow:var(--shadow-md); display:flex; align-items:center; gap:28px;">
                        <div style="flex-shrink:0; text-align:center;">
                            <div style="font-size:2.8rem; font-weight:900; color:var(--gold); line-height:1;">85%</div>
                            <div style="font-size:0.7rem; color:rgba(255,255,255,0.65); font-weight:600; text-transform:uppercase; letter-spacing:1px; margin-top:4px;">Meta SGC</div>
                        </div>
                        <div>
                            <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
                                <div style="width:38px; height:38px; background:rgba(201,168,76,0.2); border-radius:8px; display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0;">📈</div>
                                <h4 style="color:#fff; font-size:0.95rem; font-weight:700; margin:0; line-height:1.3;">Indicador de la Escuela de Estudios Judiciales</h4>
                            </div>
                            <p style="color:rgba(255,255,255,0.8); font-size:0.83rem; line-height:1.6; margin:0;">Porcentaje de Ejecución del Programa Ordinario y Extraordinario de Capacitaciones dirigido a las dependencias ISO. El objetivo es alcanzar el <strong style="color:var(--gold-light);">85% de ejecución</strong>, garantizando la formación continua en las dependencias ISO.</p>
                        </div>
                    </div>

                </div>

                <!-- Important note block -->
                <div style="background:linear-gradient(135deg,var(--navy-deepest),var(--navy-mid)); border-radius:16px; padding:28px 32px; border-left:5px solid var(--gold); box-shadow:var(--shadow-md);">
                    <div style="display:flex; align-items:flex-start; gap:16px;">
                        <div style="font-size:1.6rem; flex-shrink:0; margin-top:2px;">📌</div>
                        <div>
                            <p style="color:var(--gold-light); font-size:0.8rem; font-weight:700; text-transform:uppercase; letter-spacing:2px; margin:0 0 8px;">IMPORTANTE</p>
                            <p style="color:rgba(255,255,255,0.88); font-size:0.88rem; line-height:1.7; margin:0 0 10px;">La Escuela de Estudios Judiciales, como parte del proceso de apoyo dentro del Sistema de Gestión de Calidad del Organismo Judicial, debe ser <strong style="color:#fff;">evaluada al menos una vez al año</strong>, tanto de forma interna como externa.</p>
                            <p style="color:rgba(255,255,255,0.75); font-size:0.85rem; line-height:1.7; margin:0;">Estas evaluaciones se realizan mediante auditorías internas llevadas a cabo por la Secretaría de Planificación y Desarrollo Institucional, con el objetivo de preparar a las dependencias del SGC para la auditoría externa realizada por los delegados del ente certificador.</p>
                        </div>
                    </div>
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
        </div>

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
                            <li><strong>F1</strong> Se cuenta con el apoyo de la Corte Suprema de Justicia y del Consejo de la Carrera Judicial en la gestión de aprobación del Programa de Formación Judicial y Administrativo.</li>
                            <li><strong>F2</strong> Se cuenta con la Reacreditación Internacional mediante certificación de Normas de Calidad NCR 1000:2019 de la Red Iberoamericana de Escuelas Judiciales -RIAEJ-, fortaleciendo la excelencia institucional.</li>
                            <li><strong>F3</strong> Se cuenta con la certificación como Miembro de la Red Iberoamericana de Escuelas Judiciales -RIAEJ-, que promueve el intercambio de experiencias y de información sobre programas, metodologías y sistemas de capacitación judicial.</li>
                            <li><strong>F4</strong> Se cuenta con el procedimiento establecido para la detección de necesidades de capacitación, para la adecuada planificación y construcción del Programa de Formación Judicial y Administrativo.</li>
                            <li><strong>F5</strong> Se cuenta con una red docente conformada por Jueces, Magistrados y docentes externos, debidamente aprobados por el Consejo de la Carrera Judicial.</li>
                            <li><strong>F6</strong> Se cuenta con una plataforma virtual educativa para desarrollo de cursos e-learning y b-learning, fortaleciendo la modernización y accesibilidad de los procesos formativos.</li>
                            <li><strong>F7</strong> Se cuenta con licencias de uso de plataformas de comunicación para la realización de reuniones virtuales, lo que garantiza una interacción efectiva y la optimización de los procesos de coordinación y capacitación virtual.</li>
                            <li><strong>F8</strong> Existe personal competente, identificado con la institución y con vocación de servicio al usuario.</li>
                            <li><strong>F9</strong> Se cuenta con una Biblioteca virtual, que proporciona acceso a material actualizado y relevante, promoviendo el aprendizaje autónomo al personal y discentes.</li>
                            <li><strong>F10</strong> Se cuenta con disponibilidad de sedes regionales en Chiquimula y Quetzaltenango, que permite ampliar la cobertura de los programas de formación.</li>
                            <li><strong>F11</strong> Se cuenta con el proyecto denominado "FORMACIÓN CONTINUA MOVIL", aprobado por el Pleno de la Corte Suprema de Justicia, para mejor alcance en la formación del personal del Organismo Judicial.</li>
                            <li><strong>F12</strong> Existen políticas de la Escuela de Estudios Judiciales aprobadas que incluyen el Eje Transversal de Tecnología.</li>
                        </ul>
                    </div>
                    <div id="foda-oportunidades" class="foda-category">
                        <h4>OPORTUNIDADES (O)</h4>
                        <ul>
                            <li><strong>O1</strong> Se cuenta con Organismos internacionales interesados en dar apoyo a instituciones gubernamentales, representando una oportunidad para fortalecer la institución.</li>
                            <li><strong>O2</strong> Se cuenta con programas académicos con Escuelas de Iberoamérica por medio de programas conjuntos con RIAEJ y SICA, contribuyendo al fortalecimiento de la formación judicial y administrativa.</li>
                            <li><strong>O3</strong> Posee el respaldo de las autoridades en la gestión institucional para acelerar la ejecución de proyectos estratégicos y expandir la capacidad operativa de la institución.</li>
                            <li><strong>O4</strong> Dispone de acceso a la tecnología y servidores institucionales para el resguardo digital de documentación.</li>
                            <li><strong>O5</strong> Se observa que la digitalización de expedientes de actividades académicas y almacenamiento en la nube del Organismo Judicial, permitiría garantizar la información y facilitar el acceso remoto y oportuno.</li>
                        </ul>
                    </div>
                    <div id="foda-debilidades" class="foda-category">
                        <h4>DEBILIDADES (D)</h4>
                        <ul>
                            <li><strong>D1</strong> Se evidencia la falta de una planta eléctrica en la Sede Central, lo cual puede afectar el desarrollo de actividades académicas y administrativas ante los cortes de suministro eléctrico.</li>
                            <li><strong>D2</strong> Se identifica una bodega llena con material obsoleto (sillas, escritorios, entre otros), reduciendo la disponibilidad de recursos útiles y afectando el espacio para el archivo general de documentación.</li>
                            <li><strong>D3</strong> Se cuenta con un Sistema de Convocatorias desactualizado, dificulta el manejo eficiente del registro masivo, la precisión de los datos y aumenta el riesgo de errores manuales.</li>
                            <li><strong>D4</strong> Se observa insuficiencia en el equipo electrónico de videoconferencia, cámaras web y equipo de cómputo de escritorio desactualizado, afecta la gestión administrativa y limita la efectividad de los procesos de formación y las actividades académicas.</li>
                            <li><strong>D5</strong> Se identifica la falta de una herramienta informática para la Detección de Necesidades de Capacitación que permita la agilización del proceso de recolección de insumos.</li>
                            <li><strong>D6</strong> Se detecta la falta de espacio para parqueo de los discentes y personal de la Escuela, limita la accesibilidad y comodidad a las instalaciones al realizarse actividades académicas conjuntas en modalidad presencial.</li>
                            <li><strong>D7</strong> Se observa deterioro progresivo de la infraestructura física de la Escuela de Estudios Judiciales, debido a la atención parcial y demorada de la Unidad de Mantenimiento e Infraestructura pese a los reiterados requerimientos, dentro de los cuales se incluye la urgente reparación del techo general, lo cual limita la capacidad institucional para enfrentar adecuadamente las inclemencias del clima.</li>                        
                        </ul>
                    </div>
                    <div id="foda-amenazas" class="foda-category">
                        <h4>AMENAZAS (A)</h4>
                        <ul>
                            <li><strong>A1</strong> Se observa una limitada asignación presupuestaria y dificultad en los procesos burocráticos de compra, lo cual compromete la eficiencia operativa de la EEJ al impedir la adquisición de avances tecnológicos clave (como Moodle, equipos de cómputo y vigilancia, e Inteligencia Artificial) y la dotación oportuna de suministros administrativos, afectando directamente la modernización y el funcionamiento administrativo de la institución.</li>
                            <li><strong>A2</strong> Se evidencia inestabilidad en los servidores informáticos institucionales, lo cual pone en riesgo la seguridad y disponibilidad de los sistemas judiciales.</li>
                            <li><strong>A3</strong> Se identifican limitaciones en el acceso a servicios de conectividad a internet por parte de los discentes, lo cual obstaculiza su participación efectiva en los procesos de capacitación virtual.</li>
                            <li><strong>A4</strong> Existen requerimientos de capacitación extraordinarios caracterizados por plazos de ejecución reducidos, lo cual dificulta una planificación y desarrollo oportuno, comprometiendo su implementación efectiva.</li>
                            <li><strong>A5</strong> Se observa inasistencia de los discentes debido a la programación de actividades de capacitación fuera del horario laboral, lo cual limita la participación y el cumplimiento de los objetivos formativos y el alcance de competencias laborales.</li>  
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section id="riaej" class="content-section" role="region" aria-labelledby="riaej-heading">
            <div class="container">
                <h2 class="content-section__title" id="riaej-heading"><i class="fas fa-globe-americas fa-icon" aria-hidden="true"></i> Red Iberoamericana de Escuelas Judiciales (RIAEJ)</h2>
                <p class="text-justify" style="max-width: 800px; margin-left:auto; margin-right:auto; margin-bottom: var(--spacing-xl);">
                    La Escuela de Estudios Judiciales (EEJ) es un miembro activo de la Red Iberoamericana de Escuelas Judiciales (RIAEJ), una comunidad de instituciones dedicadas a la formación y capacitación judicial en el ámbito iberoamericano. Esta red facilita la cooperación, el intercambio de conocimientos y la promoción de buenas prácticas entre las escuelas judiciales de la región.
                </p>
                <p class="text-justify" style="max-width: 800px; margin-left:auto; margin-right:auto; margin-bottom: var(--spacing-xl);">
                    La RIAEJ cuenta con una Junta Directiva integrada por nueve miembros elegidos por la Asamblea General para cada período. Actualmente, para el período 2025–2027, la Secretaría General está a cargo de la Escuela Nacional de la Judicatura de la República Dominicana. Los países de Uruguay, Argentina, Guatemala y República Dominicana integran actualmente la Junta Directiva de la RIAEJ, participando activamente en los procesos de toma de decisiones y en la consolidación de iniciativas para el fortalecimiento de la formación judicial en Iberoamérica.
                </p>

                <!-- SLIDER DE PROGRAMAS RIAEJ -->
                <h3 class="riaej-program-slider-title">Programas Destacados RIAEJ</h3>
                <div class="riaej-program-slider-container">
                    <div id="riaejProgramSlidesWrapper">
                        <!-- Los slides se generarán aquí por JavaScript -->
                    </div>
                    <div class="riaej-program-slider-nav">
                        <button id="riaejPrevSlide" aria-label="Programa anterior"><i class="fas fa-chevron-left"></i> Anterior</button>
                        <div class="riaej-program-slider-dots" id="riaejProgramSliderDots">
                            <!-- Los puntos de paginación se generarán aquí -->
                        </div>
                        <button id="riaejNextSlide" aria-label="Siguiente programa">Siguiente <i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
                <!-- FIN SLIDER DE PROGRAMAS RIAEJ -->
                
                <!-- SLIDER DE CERTIFICADOS (IMÁGENES) -->
                <h3 class="certificates-slider-title">Certificados y Reconocimientos RIAEJ</h3>
                <div class="certificates-slider-container" id="sliderCertificatesContainer">
                    <!-- Las imágenes se cargarán aquí por JavaScript -->
                </div>
            
                <!-- Modal para la imagen ampliada del slider de certificados -->
                <div class="certificates-modal-overlay" id="imageCertificatesModal">
                    <div class="certificates-modal-content">
                        <span class="certificates-modal-close" id="modalCertificatesCloseButton">&times;</span>
                        <img src="" alt="Imagen Ampliada" id="enlargedCertificatesImage">
                    </div>
                </div>
                <!-- FIN SLIDER DE CERTIFICADOS (IMÁGENES) -->

            </div>
        </section>

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
                            <p><a href="https://github.com/giovanni-1990/Lineamientos-SGC/raw/main/DG-PE-01%20Lineamientos%20del%20SGC%202025.pdf" target="_blank" style="color: var(--accent-blue-main); text-decoration: underline;">Descargar Lineamientos del SGC</a></p>
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
        </section>

    </main>

    <footer>
        <div class="footer-inner">

            <!-- Col 1: Identidad institucional -->
            <div class="footer-col footer-brand">
                <p class="footer-name">Escuela de Estudios Judiciales</p>
                <p class="footer-motto">"Formación para la Justicia y la Paz"</p>
            </div>

            <!-- Separador vertical -->
            <div class="footer-divider"></div>

            <!-- Col 2: Datos de contacto -->
            <div class="footer-col footer-contact">
                <p class="footer-col-title">Contacto</p>
                <p>&#128205; Lote 12, finca San Gaspar, aldea Santa Rosita,<br>zona 16, Ciudad de Guatemala, C.A.</p>
                <p>&#128222; PBX: 2290-3939</p>
                <p>&#127760; <a href="http://www.oj.gob.gt/esej" target="_blank" rel="noopener">www.oj.gob.gt/esej</a></p>
            </div>

            <!-- Separador vertical -->
            <div class="footer-divider"></div>

            <!-- Col 3: Certificación -->
            <div class="footer-col footer-cert">
                <p class="footer-col-title">Certificación</p>
                <div class="footer-cert-badge">
                    <span class="footer-cert-icon">&#127942;</span>
                    <span>Reacreditación Internacional<br><strong>Norma de Calidad RIAEJ 1000:2019</strong></span>
                </div>
                <div class="footer-cert-badge" style="margin-top:10px;">
                    <span class="footer-cert-icon">&#9989;</span>
                    <span>Sistema de Gestión de Calidad<br><strong>NTC ISO 9001:2015</strong></span>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="footer-bottom">
            <span>&copy; <?php echo date('Y'); ?> Organismo Judicial de Guatemala &nbsp;&middot;&nbsp; Escuela de Estudios Judiciales</span>
            <span>SGC &nbsp;&middot;&nbsp; ISO 9001:2015</span>
        </div>
    </footer>

    <!-- MODIFICADO: Pie de página del autor (ahora fijo) -->
    <div class="version-footer">
        <div class="container">
             Creado por: Giovanni Arias – Gestor de Calidad: Versión: 9.0
        </div>
    </div>

    <!-- ── Botón flotante PEI 2026-2030 — pestaña retráctil ── -->
    <a href="https://drive.google.com/file/d/1lidz7HL0a-IcucHCPc8OOI2gE4ZMArS0/view?usp=sharing" 
       id="boton-flotante-pei" 
       title="PEI 2026 - 2030" 
       target="_blank" 
       rel="noopener"
       aria-label="Ver Plan Estratégico Institucional 2026-2030">
        <span style="font-size:1.2rem;flex-shrink:0;">📑</span>
        <span>PEI 2026 – 2030</span>
    </a>

    <!-- ── Botón flotante Documentos — pestaña retráctil ── -->
    <a href="https://legaltech.com.gt/escuelasgc/docs/" id="boton-flotante" title="Documentos codificados" target="_blank" rel="noopener"
       aria-label="Ver documentos codificados del SGC">
        <span style="font-size:1.2rem;flex-shrink:0;">📂</span>
        <span>Documentos</span>
    </a>
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

    <!-- LINEA PARA IMPORTAR EL SCRIPT -->
    <!-- LINEA PARA IMPORTAR EL SCRIPT -->
    <script src="js/script.js"></script>
    <script>
    // Fallback para mostrar el botón hamburguesa si JS carga después del DOM
    document.addEventListener('DOMContentLoaded', function() {
        var mobileNavToggle = document.getElementById('mobile-nav-toggle');
        if (window.innerWidth <= 768 && mobileNavToggle) {
            mobileNavToggle.style.display = 'block';
        }
    });
    </script>
    <!-- LINEA PARA IMPORTAR EL SCRIPT -->

</body>
</html>







