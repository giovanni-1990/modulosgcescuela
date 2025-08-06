// js/catalogo.js

document.addEventListener('DOMContentLoaded', function() {
    const buscador = document.getElementById('buscador');
    const tablaCuerpo = document.getElementById('tabla-cuerpo');
    const rutaBase = 'docs/'; // Carpeta donde están los documentos

    /**
     * Dibuja las filas de la tabla basadas en una lista de documentos.
     * @param {Array} documentos - La lista de objetos de documentos a mostrar.
     */
    function renderizarTabla(documentos) {
        // Limpia la tabla antes de dibujar las nuevas filas
        tablaCuerpo.innerHTML = '';

        if (documentos.length === 0) {
            tablaCuerpo.innerHTML = '<tr><td colspan="5">No se encontraron documentos que coincidan con la búsqueda.</td></tr>';
            return;
        }

        documentos.forEach(doc => {
            const fila = document.createElement('tr');

            // Importante: La ruta del enlace se construye dinámicamente.
            // encodeURI se asegura de que los espacios y caracteres especiales en los nombres de archivo funcionen correctamente en la URL.
            const rutaArchivo = `${rutaBase}${doc.archivo}`;

            fila.innerHTML = `
                <td>${doc.codigo}</td>
                <td>${doc.nombre}</td>
                <td>${doc.version}</td>
                <td>${doc.fecha}</td>
                <td><a href="${encodeURI(rutaArchivo)}" class="btn-descargar" target="_blank" download>Descargar</a></td>
            `;

            tablaCuerpo.appendChild(fila);
        });
    }

    /**
     * Filtra la lista de documentos global (listaDocumentos)
     * basándose en el texto del buscador.
     */
    function filtrar() {
        const textoBusqueda = buscador.value.toLowerCase().trim();

        if (!textoBusqueda) {
            renderizarTabla(listaDocumentos);
            return;
        }

        const resultados = listaDocumentos.filter(doc => {
            const nombre = doc.nombre.toLowerCase();
            const codigo = doc.codigo.toLowerCase();
            return nombre.includes(textoBusqueda) || codigo.includes(textoBusqueda);
        });

        renderizarTabla(resultados);
    }

    // --- Event Listeners ---
    // Cada vez que el usuario teclea en el buscador, se llama a la función de filtrar.
    buscador.addEventListener('keyup', filtrar);

    // --- Carga Inicial ---
    // Al cargar la página por primera vez, mostramos todos los documentos.
    renderizarTabla(listaDocumentos);
});