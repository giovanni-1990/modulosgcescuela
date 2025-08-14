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
    <button id="mobile-nav-toggle" aria-label="Abrir menú de navegación" aria-expanded="false">&#9776;</button>

    <nav id="main-nav">
        <div class="sidebar-logo-container">
            <img src="https://raw.githubusercontent.com/djsalazar/aa/b74e56ed5e3c0105afd0613626877ac3e2f56563/logo%20-%20Blanco.png" alt="Escuela Estudios Judiciales Logo">
        </div>
        <ul>            <li><a href="#escuela" class="active">Escuela de Estudios Judiciales</a></li>
            <li><a href="#sgc">¿Qué es ISO 9001:2015?</a></li>
            <li><a href="#roles">Comité de Calidad</a></li>
            <li><a href="#politica">Política de Calidad</a></li> <!-- REORDENADO -->
            <li><a href="#objetivos">Objetivos de Calidad</a></li> <!-- REORDENADO -->
            <li><a href="#procesos">Procesos Estratégicos</a></li>
            <li><a href="#beneficios">Beneficios del SGC</a></li>
            <li><a href="#eej-sgc">Gestión ESEJ en SGC</a></li>
            <li><a href="#riaej">Red de Escuelas Judiciales (RIAEJ)</a></li>
            <li><a href="#recursos">Documentos y Recursos</a></li>
        <li><a href="#red-docente" style="color: var(--accent-gold);">Jueces y Magistrados Docentes</a></li>
        <li><a href="#directorio-completo" style="color: var(--accent-gold);">Docentes externos</a></li>
        <li>
            <form action="logout.php" method="post" style="margin:0;padding:0;">
                <button type="submit" class="header-logout-btn" style="background-color:#dc3545;color:white;font-weight:bold;text-align:center;border-radius:4px;margin:5px 5px;display:block;width:60%;cursor:pointer;">↪ Cerrar</button>
            </form>
        </li>
    </ul>
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
                <p style="text-align: justify;">La Escuela de Estudios Judiciales es la unidad encargada de planificar, ejecutar y facilitar la capacitación y formación técnica y profesional de jueces, magistrados, funcionarios y empleados del Organismo Judicial, con el fin de asegurar la excelencia y actualización profesional para el eficiente desempeño de sus cargos.</p>
                <br>
                <p style="text-align: justify;">La Escuela de Estudios Judiciales ofrece distintos programas de formación, con base en la detección de necesidades de capacitación de funcionarios judiciales, auxiliares judiciales y personal administrativo y técnico del Organismo Judicial, y se presenta de la forma siguiente:</p>
                <div style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin-top: 25px; margin-bottom: 25px;">
                    <button class="programa-formacion-btn" style="background-color: #0056b3; color: white; padding: 12px 20px; border: none; border-radius: 8px; font-size: 14px; cursor: pointer; flex: 1; min-width: 200px; max-width: 250px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        Programas de Formación Inicial
                    </button>
                    <button class="programa-formacion-btn" style="background-color: #0056b3; color: white; padding: 12px 20px; border: none; border-radius: 8px; font-size: 14px; cursor: pointer; flex: 1; min-width: 200px; max-width: 250px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        Programas de Formación Continua
                    </button>
                    <button class="programa-formacion-btn" style="background-color: #0056b3; color: white; padding: 12px 20px; border: none; border-radius: 8px; font-size: 14px; cursor: pointer; flex: 1; min-width: 200px; max-width: 250px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                        Programas de Especialización
                    </button>
                </div>
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
                <p style="text-align: justify; font-size: 1.1em;">Trámite y resolución en segunda instancia en las ramas del derecho Penal, Civil, Mercantil, Laboral, Familia, Constitucional, Niñez y Adolescentes en: La Sala Sexta Penal de Cobán, Sala Regional Mixta de Quiché, Sala Regional Mixta de Huehuetenango, Sala Regional Mixta de Cobán, Sala Primera Civil de Guatemala y Sala Segunda Civil de Guatemala. Trámites Antejuicio.</p>
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

        <!-- INICIO: SECCIÓN DE DIRECTORIO DE DOCENTES (INTEGRADA) -->
        <section id="red-docente" class="content-section">
            <div class="container">
                <div class="section-title-wrapper">
                    <h3 style="font-size: 2em; color: var(--accent-blue-darker); border-left: 4px solid var(--accent-gold); padding-left: 15px; margin: 0; display: flex; align-items: center;">
                        <i class="fas fa-chalkboard-teacher" style="margin-right: 15px;"></i>
                        Jueces y Magistrados docentes del Organismo Judicial
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
                    <div id="judges-container"></div>
                </div>
                <!-- FIN: SECCIÓN DE DIRECTORIO DE DOCENTES (INTEGRADA) -->
            </div>
        </section>

        <!-- INICIO: SECCIÓN DIRECTORIO INTERACTIVO COMPLETO -->
        <section id="directorio-completo" class="content-section">
            <div class="container">
                <div class="section-title-wrapper">
                    <h3 style="font-size: 2em; color: var(--accent-blue-darker); border-left: 4px solid var(--accent-gold); padding-left: 15px; margin: 0; display: flex; align-items: center;">
                        <i class="fas fa-users" style="margin-right: 15px;"></i>
                        Docentes externos del Organismo Judicial
                    </h3>
                </div>
                <p style="margin-top:15px; margin-bottom: 30px; text-align: justify;">Explore el directorio completo de jueces y magistrados docentes de la Escuela de Estudios Judiciales. Este sistema interactivo le permite filtrar por múltiples criterios y obtener información detallada de cada profesional.</p>
                
                <!-- Estadísticas Generales -->
                <div class="directory-summary-panel">
                    <div class="directory-summary-box directory-total-box">
                        <div id="directory-total-judges" class="directory-summary-number"></div>
                        <div class="directory-summary-label">Total de Registros</div>
                    </div>
                    <div class="directory-summary-box directory-expertise-box">
                        <h3 class="directory-summary-title">Top 15 Áreas de Docencia</h3>
                        <ul id="directory-expertise-stats-list" class="directory-summary-list"></ul>
                    </div>
                </div>

                <!-- Filtros de Búsqueda -->
                <div class="directory-filters-container">
                    <h4 class="directory-filters-header">Filtros de Búsqueda Avanzada</h4>
                    <div class="directory-filter-grid">
                        <div class="directory-filter-group">
                            <label for="directory-filter-name">Nombre</label>
                            <input type="text" id="directory-filter-name" placeholder="Buscar por nombre...">
                        </div>
                        <div class="directory-filter-group">
                            <label for="directory-filter-judicatura">Profesión / Especialidad</label>
                            <select id="directory-filter-judicatura">
                                <option value="">Todas las Profesiones</option>
                            </select>
                        </div>
                        <div class="directory-filter-group">
                            <label for="directory-filter-docencia">Área de Docencia</label>
                            <select id="directory-filter-docencia">
                                <option value="">Todas las Áreas</option>
                            </select>
                        </div>
                        <div class="directory-filter-group">
                            <label for="directory-filter-estado">Estado</label>
                            <select id="directory-filter-estado">
                                <option value="">Todos</option>
                                <option value="ACTIVO">Activo</option>
                                <option value="BAJA">Baja</option>
                            </select>
                        </div>
                    </div>
                    <div class="directory-filter-buttons">
                        <button id="directory-reset-filters">Limpiar Filtros</button>
                    </div>
                </div>

                <!-- Contador de Resultados -->
                <div id="directory-results-count"></div>

                <!-- Contenedor de Tarjetas -->
                <div id="directory-judges-container"></div>
            </div>
        </section>
        <!-- FIN: SECCIÓN DIRECTORIO INTERACTIVO COMPLETO -->
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
             Creado por: Giovanni Arias – Gestor de Calidad: Versión: 9.0
        </div>
    </div>

    <!-- Botón flotante personalizado -->
    <a href="https://legaltech.com.gt/escuelasgc/docs/" id="boton-flotante" title="Documentos codificados" target="_blank" rel="noopener">
    Documentos codificados
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
    <!-- LINEA PARA IMPORTAR EL SCRIPT -->

</body>
</html>







