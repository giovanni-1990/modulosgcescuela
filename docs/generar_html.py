import csv
import json

# Leer el archivo CSV y generar el HTML
def generar_html_desde_csv(archivo_csv, archivo_html_salida):
    # Leer datos del CSV
    documentos = []
    
    with open(archivo_csv, 'r', encoding='utf-8') as file:
        csv_reader = csv.DictReader(file)
        for row in csv_reader:
            documentos.append({
                'codigo': row['codigo'],
                'nombre': row['nombre'],
                'version': row['version'],
                'fecha': row['fecha'],
                'archivo': row['archivo']
            })
    
    # Convertir a JSON para embeber en el HTML
    documentos_json = json.dumps(documentos, ensure_ascii=False, indent=12)
    
    # Generar el HTML
    html_content = f'''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCUELA DE ESTUDIOS JUDICIALES - Programa de Capacitaciones</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        * {{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }}

        :root {{
            --azul-ejecutivo: #0a2342;
            --azul-profundo: #132b4b;
            --azul-medio: #1e3d5f;
            --blanco-puro: #ffffff;
            --blanco-suave: #f8f9fa;
            --dorado: #d4af37;
            --dorado-claro: #f0d46e;
            --dorado-sutil: #e8c872;
            --sombra-suave: rgba(10, 35, 66, 0.08);
            --sombra-media: rgba(10, 35, 66, 0.15);
            --sombra-fuerte: rgba(10, 35, 66, 0.25);
        }}

        body {{
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            color: #2c3e50;
            line-height: 1.6;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }}

        .background-overlay {{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(212, 175, 55, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(10, 35, 66, 0.04) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }}

        .particles {{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }}

        .particle {{
            position: absolute;
            width: 3px;
            height: 3px;
            background: var(--dorado);
            border-radius: 50%;
            opacity: 0.2;
            animation: float 15s infinite ease-in-out;
        }}

        @keyframes float {{
            0%, 100% {{ transform: translateY(0) translateX(0); opacity: 0.2; }}
            50% {{ transform: translateY(-30px) translateX(20px); opacity: 0.4; }}
        }}

        header {{
            position: relative;
            z-index: 10;
            background: linear-gradient(135deg, var(--azul-ejecutivo) 0%, var(--azul-medio) 100%);
            padding: 3rem 2rem 2.5rem;
            text-align: center;
            box-shadow: 0 8px 32px var(--sombra-fuerte);
            border-bottom: 3px solid var(--dorado);
        }}

        .header-content {{
            max-width: 1200px;
            margin: 0 auto;
        }}

        .logo-container {{
            margin-bottom: 1.5rem;
            animation: fadeInDown 1s ease-out;
        }}

        .logo {{
            max-width: 140px;
            height: auto;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
        }}

        .header-title {{
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--blanco-puro);
            margin: 1rem 0 0.5rem;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out 0.2s both;
        }}

        .header-subtitle {{
            font-size: 1.3rem;
            font-weight: 500;
            color: var(--dorado-claro);
            margin: 0.5rem 0 1.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeInUp 1s ease-out 0.4s both;
        }}

        .header-badge {{
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 0.8rem 2.5rem;
            border-radius: 50px;
            border: 2px solid var(--dorado);
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--blanco-puro);
            letter-spacing: 1px;
            animation: fadeInUp 1s ease-out 0.6s both;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }}

        .main-container {{
            position: relative;
            z-index: 10;
            max-width: 1400px;
            margin: -2rem auto 3rem;
            padding: 0 2rem;
        }}

        .content-card {{
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 
                0 20px 60px var(--sombra-media),
                0 0 0 1px rgba(212, 175, 55, 0.1);
            border-top: 4px solid var(--dorado);
            animation: fadeInUp 1s ease-out 0.8s both;
        }}

        .intro-section {{
            text-align: center;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid var(--blanco-suave);
        }}

        .intro-title {{
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--azul-ejecutivo);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }}

        .intro-title::after {{
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--dorado), transparent);
        }}

        .intro-text {{
            font-size: 1.1rem;
            color: #5a6c7d;
            max-width: 800px;
            margin: 1.5rem auto 0;
            line-height: 1.8;
        }}

        .stats-container {{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }}

        .stat-card {{
            background: linear-gradient(135deg, var(--azul-ejecutivo), var(--azul-medio));
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            color: var(--blanco-puro);
            box-shadow: 0 8px 24px var(--sombra-suave);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }}

        .stat-card:hover {{
            transform: translateY(-5px);
            box-shadow: 0 12px 32px var(--sombra-media);
        }}

        .stat-number {{
            font-size: 3rem;
            font-weight: 700;
            color: var(--dorado-claro);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }}

        .stat-label {{
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }}

        .search-section {{
            margin-bottom: 2.5rem;
        }}

        .search-label {{
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--azul-ejecutivo);
            margin-bottom: 1rem;
            display: block;
        }}

        .search-wrapper {{
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }}

        .search-input {{
            width: 100%;
            padding: 1rem 1.5rem 1rem 3.5rem;
            font-size: 1rem;
            border: 2px solid #e0e6ed;
            border-radius: 50px;
            background: var(--blanco-puro);
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }}

        .search-input:focus {{
            outline: none;
            border-color: var(--dorado);
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.1);
        }}

        .search-icon {{
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--dorado);
            font-size: 1.2rem;
        }}

        .table-container {{
            overflow-x: auto;
            border-radius: 16px;
            box-shadow: 0 4px 16px var(--sombra-suave);
            background: var(--blanco-puro);
        }}

        table {{
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }}

        thead {{
            background: linear-gradient(135deg, var(--azul-ejecutivo), var(--azul-medio));
            color: var(--blanco-puro);
        }}

        th {{
            padding: 1.2rem 1.5rem;
            text-align: left;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 3px solid var(--dorado);
        }}

        th:first-child {{
            border-top-left-radius: 16px;
        }}

        th:last-child {{
            border-top-right-radius: 16px;
        }}

        td {{
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid #f0f2f5;
            color: #2c3e50;
        }}

        tbody tr {{
            transition: all 0.3s ease;
        }}

        tbody tr:hover {{
            background: linear-gradient(90deg, 
                rgba(212, 175, 55, 0.05) 0%, 
                rgba(212, 175, 55, 0.02) 50%, 
                transparent 100%);
            transform: translateX(4px);
        }}

        tbody tr:last-child td:first-child {{
            border-bottom-left-radius: 16px;
        }}

        tbody tr:last-child td:last-child {{
            border-bottom-right-radius: 16px;
        }}

        td:nth-child(2) {{
            min-width: 350px;
            font-weight: 500;
        }}

        td:nth-child(1) {{
            font-weight: 600;
            color: var(--azul-ejecutivo);
        }}

        .btn-download {{
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1.5rem;
            background: linear-gradient(135deg, var(--dorado), var(--dorado-sutil));
            color: var(--azul-ejecutivo);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
            white-space: nowrap;
        }}

        .btn-download:hover {{
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
            background: linear-gradient(135deg, var(--dorado-claro), var(--dorado));
        }}

        footer {{
            position: relative;
            z-index: 10;
            background: linear-gradient(135deg, var(--azul-ejecutivo) 0%, var(--azul-medio) 100%);
            color: var(--blanco-puro);
            text-align: center;
            padding: 2.5rem 2rem;
            margin-top: 4rem;
            border-top: 3px solid var(--dorado);
        }}

        .footer-content {{
            max-width: 1200px;
            margin: 0 auto;
        }}

        .footer-text {{
            font-size: 1rem;
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }}

        .footer-year {{
            font-size: 0.9rem;
            color: var(--dorado-claro);
            font-weight: 500;
        }}

        .no-results {{
            text-align: center;
            padding: 3rem 2rem;
            color: #5a6c7d;
        }}

        .no-results-icon {{
            font-size: 4rem;
            color: var(--dorado);
            margin-bottom: 1rem;
        }}

        .no-results-text {{
            font-size: 1.2rem;
            font-weight: 500;
        }}

        @keyframes fadeInDown {{
            from {{
                opacity: 0;
                transform: translateY(-30px);
            }}
            to {{
                opacity: 1;
                transform: translateY(0);
            }}
        }}

        @keyframes fadeInUp {{
            from {{
                opacity: 0;
                transform: translateY(30px);
            }}
            to {{
                opacity: 1;
                transform: translateY(0);
            }}
        }}

        @media (max-width: 768px) {{
            .header-title {{
                font-size: 2rem;
            }}

            .header-subtitle {{
                font-size: 1rem;
            }}

            .content-card {{
                padding: 2rem 1.5rem;
            }}

            .stat-number {{
                font-size: 2.5rem;
            }}

            table {{
                font-size: 0.9rem;
            }}

            th, td {{
                padding: 0.8rem 1rem;
            }}

            td:nth-child(2) {{
                min-width: 250px;
            }}
        }}

        .loading {{
            text-align: center;
            padding: 2rem;
            color: var(--azul-ejecutivo);
        }}

        .spinner {{
            border: 3px solid #f3f3f3;
            border-top: 3px solid var(--dorado);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }}

        @keyframes spin {{
            0% {{ transform: rotate(0deg); }}
            100% {{ transform: rotate(360deg); }}
        }}
    </style>
</head>
<body>
    <div class="background-overlay"></div>
    <div class="particles" id="particles"></div>

    <header>
        <div class="header-content">
            <div class="logo-container">
                <img src="https://legaltech.com.gt/themeoj/img/logoBlanco.png" alt="Logo Organismo Judicial" class="logo">
            </div>
            <h1 class="header-title">ESCUELA DE ESTUDIOS JUDICIALES</h1>
            <p class="header-subtitle">Sistema de Gestión de Calidad</p>
            <div class="header-badge">Programa de Capacitaciones 2025</div>
        </div>
    </header>

    <div class="main-container">
        <div class="content-card">
            <div class="intro-section">
                <h2 class="intro-title">Catálogo de Documentos Institucionales</h2>
                <p class="intro-text">
                    Bienvenido al repositorio oficial de documentos del Sistema de Gestión de Calidad 
                    de la Escuela de Estudios Judiciales. Este catálogo contiene formularios, 
                    plantillas, programas de formación y recursos esenciales para el desarrollo 
                    profesional del personal del Organismo Judicial de Guatemala.
                </p>
            </div>

            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-number" id="total-docs">{len(documentos)}</div>
                    <div class="stat-label">Documentos Disponibles</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Categorías</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Actualizado</div>
                </div>
            </div>

            <div class="search-section">
                <label class="search-label" for="buscador">Buscar Documento</label>
                <div class="search-wrapper">
                    <span class="search-icon">🔍</span>
                    <input 
                        type="text" 
                        id="buscador" 
                        class="search-input" 
                        placeholder="Ingrese código o nombre del documento..."
                        autofocus
                    >
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre del Documento</th>
                            <th>Versión</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody id="tabla-cuerpo">
                        <tr class="loading">
                            <td colspan="5">
                                <div class="spinner"></div>
                                <p style="margin-top: 1rem;">Cargando documentos...</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p class="footer-text">Organismo Judicial de Guatemala</p>
            <p class="footer-year">© 2025 - Escuela de Estudios Judiciales</p>
        </div>
    </footer>

    <script>
        const listaDocumentos = {documentos_json};

        document.addEventListener('DOMContentLoaded', function() {{
            const buscador = document.getElementById('buscador');
            const tablaCuerpo = document.getElementById('tabla-cuerpo');
            const totalDocsElement = document.getElementById('total-docs');
            const rutaBase = 'docs/';

            totalDocsElement.textContent = listaDocumentos.length;

            const particlesContainer = document.getElementById('particles');
            for (let i = 0; i < 15; i++) {{
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (15 + Math.random() * 10) + 's';
                particlesContainer.appendChild(particle);
            }}

            function renderizarTabla(documentos) {{
                tablaCuerpo.innerHTML = '';

                if (documentos.length === 0) {{
                    tablaCuerpo.innerHTML = `
                        <tr>
                            <td colspan="5" class="no-results">
                                <div class="no-results-icon">📄</div>
                                <div class="no-results-text">No se encontraron documentos que coincidan con su búsqueda</div>
                            </td>
                        </tr>
                    `;
                    return;
                }}

                documentos.forEach(doc => {{
                    const fila = document.createElement('tr');
                    const rutaArchivo = `${{rutaBase}}${{doc.archivo}}`;

                    fila.innerHTML = `
                        <td>${{doc.codigo}}</td>
                        <td>${{doc.nombre}}</td>
                        <td>${{doc.version}}</td>
                        <td>${{doc.fecha}}</td>
                        <td>
                            <a href="${{encodeURI(rutaArchivo)}}" class="btn-download" target="_blank" download>
                                <span>📥</span>
                                <span>Descargar</span>
                            </a>
                        </td>
                    `;

                    tablaCuerpo.appendChild(fila);
                }});
            }}

            function filtrar() {{
                const textoBusqueda = buscador.value.toLowerCase().trim();

                if (!textoBusqueda) {{
                    renderizarTabla(listaDocumentos);
                    return;
                }}

                const resultados = listaDocumentos.filter(doc => {{
                    const nombre = doc.nombre.toLowerCase();
                    const codigo = doc.codigo.toLowerCase();
                    return nombre.includes(textoBusqueda) || codigo.includes(textoBusqueda);
                }});

                renderizarTabla(resultados);
            }}

            buscador.addEventListener('keyup', filtrar);
            buscador.addEventListener('input', filtrar);

            renderizarTabla(listaDocumentos);
        }});
    </script>
</body>
</html>'''
    
    # Guardar el HTML generado
    with open(archivo_html_salida, 'w', encoding='utf-8') as file:
        file.write(html_content)
    
    print(f"✅ Archivo HTML generado exitosamente: {archivo_html_salida}")
    print(f"📊 Total de documentos procesados: {len(documentos)}")


if __name__ == "__main__":
    # Configuración
    archivo_csv = "documentos.csv"
    archivo_html = "presentacion.html"
    
    # Generar HTML
    generar_html_desde_csv(archivo_csv, archivo_html)
