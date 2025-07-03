document.addEventListener('DOMContentLoaded', function() {

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

        // Inicialización del directorio de docentes
        const initDocentesDirectory = () => {
            console.log('Iniciando directorio de docentes...');
            const judgesDirectory = document.getElementById('docentes-directory');
            if (!judgesDirectory) {
                console.log('Elemento docentes-directory no encontrado');
                return;
            }
            console.log('Elemento docentes-directory encontrado:', judgesDirectory);
            
            // Añadir mensaje visible de debugging
            const debugDiv = document.createElement('div');
            debugDiv.innerHTML = '<p style="background: yellow; padding: 10px; margin: 10px 0;">🟡 DEBUG: Función initDocentesDirectory ejecutándose...</p>';
            judgesDirectory.insertBefore(debugDiv, judgesDirectory.firstChild); 

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
        };
        
        // --- FIN: LÓGICA DIRECTORIO DOCENTES --- //

        // --- INICIO: FUNCIONES PARA MODALES DEL NUEVO APARTADO --- //
        function abrirModalNuevo(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function cerrarModalNuevo(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Cerrar modal al hacer clic fuera de él
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        });

        // Cerrar modal con tecla Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modalesNuevos = ['modal-automatizacion', 'modal-analisis', 'modal-colaboracion'];
                modalesNuevos.forEach(modalId => {
                    const modal = document.getElementById(modalId);
                    if (modal && modal.style.display === 'block') {
                        modal.style.display = 'none';
                    }
                });
            }
        });

        // Efectos hover para las tarjetas del nuevo apartado
        const initHoverEffects = () => {
            const tarjetas = document.querySelectorAll('#nuevo-apartado > div > div[style*="grid-template-columns"] > div');
            tarjetas.forEach(tarjeta => {
                tarjeta.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 8px 25px rgba(0, 51, 102, 0.15)';
                });
                tarjeta.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 4px 8px var(--shadow-color)';
                });
            });
        };
        
        // --- FIN: FUNCIONES PARA MODALES DEL NUEVO APARTADO --- //

        // Inicialización del slider RIAEJ
        const initRiaejSlider = () => {
            // --- Script para el Slider de Programas RIAEJ ---
            const riaejProgramSliderData = [
                {
                    title: "Programa de Formación Inicial para Jueces de Paz",
                    description: "El programa tiene como objetivo consolidar los conocimientos jurídicos, los valores, la vocación de servicio y las habilidades de los futuros jueces de paz, promoviendo la excelencia en el ejercicio profesional. Incluye el manejo de conocimientos actualizados, nuevas metodologías de aprendizaje, tecnologías digitales y sistemas de evaluación. Busca que los jueces en formación adquieran competencias procesales para dirigir y gestionar adecuadamente los casos, resolviendo conflictos conforme al sistema legal y con resoluciones debidamente fundamentadas."
                },
                {
                    title: "Programa de Formación Inicial para Jueces de Primera Instancia",
                    description: "Este programa tiene como propósito fortalecer los conocimientos jurisdiccionales, valores, vocación de servicio y habilidades de los futuros jueces de instancia, asegurando la excelencia en su desempeño profesional. La formación integra la gestión del conocimiento en el contexto actual, métodos innovadores de aprendizaje, el uso de tecnologías digitales y la mejora continua en los sistemas de evaluación. Se busca que los jueces de instancia desarrollen competencias procesales para dirigir y resolver adecuadamente los casos, con decisiones fundamentadas y en estricto apego al marco legal."
                },
                {
                    title: "Diplomado en Derechos Humanos de los Pueblos Indígenas",
                    description: "Este diplomado, impartido por la Escuela de Estudios Judiciales a través del Programa de Educación Continua, busca sensibilizar a los operadores de justicia sobre los derechos humanos, con énfasis en los derechos de los pueblos indígenas. Promueve un enfoque de equidad e igualdad, orientado a garantizar el acceso a la justicia sin discriminación, fortaleciendo así el Estado de derecho en Guatemala."
                },
                {
                    title: "Programa de Formación Inicial para los Órganos Especializados en Delitos de Femicidio y Violencia contra la Mujer",
                    description: "Este programa permite al Organismo Judicial de Guatemala contar con personal especializado en justicia con enfoque de género. Su objetivo es que todos los integrantes de los Órganos Especializados actúen, atiendan y juzguen desde esta perspectiva, priorizando la protección de la víctima y el apoyo a la reconstrucción de su proyecto de vida, todo ello en estricto respeto a las garantías constitucionales y procesales."
                }
            ];

            const riaejProgramSlidesWrapper = document.getElementById('riaejProgramSlidesWrapper');
            const riaejPrevButton = document.getElementById('riaejPrevSlide');
            const riaejNextButton = document.getElementById('riaejNextSlide');
            const riaejDotsContainer = document.getElementById('riaejProgramSliderDots');
            let currentRiaejProgramSlideIndex = 0;
            let riaejProgramSlides = [];
            let riaejProgramDots = [];

            function createRiaejProgramSlides() {
                if (!riaejProgramSlidesWrapper || !riaejDotsContainer) return;
                riaejProgramSlidesWrapper.innerHTML = '';
                riaejDotsContainer.innerHTML = '';
                riaejProgramSlides = []; 
                riaejProgramDots = [];   

                riaejProgramSliderData.forEach((program, index) => {
                    const slide = document.createElement('div');
                    slide.classList.add('riaej-program-slide');
                    slide.innerHTML = `<h4>${program.title}</h4><p>${program.description}</p>`;
                    riaejProgramSlidesWrapper.appendChild(slide);
                    riaejProgramSlides.push(slide);

                    const dot = document.createElement('span');
                    dot.classList.add('dot');
                    dot.dataset.index = index;
                    dot.setAttribute('aria-label', `Ir al programa ${index + 1}`);
                    dot.addEventListener('click', () => showRiaejProgramSlide(index));
                    riaejDotsContainer.appendChild(dot);
                    riaejProgramDots.push(dot);
                });
            }

            function showRiaejProgramSlide(index) {
                riaejProgramSlides.forEach(slide => slide.classList.remove('active'));
                riaejProgramDots.forEach(dot => dot.classList.remove('active'));

                if (riaejProgramSlides[index]) riaejProgramSlides[index].classList.add('active');
                if (riaejProgramDots[index]) riaejProgramDots[index].classList.add('active');
                currentRiaejProgramSlideIndex = index;

                if (riaejPrevButton) riaejPrevButton.disabled = index === 0;
                if (riaejNextButton) riaejNextButton.disabled = index === riaejProgramSlides.length - 1;
            }

            if (riaejProgramSlidesWrapper && riaejPrevButton && riaejNextButton && riaejDotsContainer) {
                createRiaejProgramSlides();
                if (riaejProgramSlides.length > 0) {
                    showRiaejProgramSlide(0);
                }

                riaejPrevButton.addEventListener('click', () => {
                    if (currentRiaejProgramSlideIndex > 0) {
                        showRiaejProgramSlide(currentRiaejProgramSlideIndex - 1);
                    }
                });

                riaejNextButton.addEventListener('click', () => {
                    if (currentRiaejProgramSlideIndex < riaejProgramSlides.length - 1) {
                        showRiaejProgramSlide(currentRiaejProgramSlideIndex + 1);
                    }
                });
            } else {
                 console.warn("Elementos del slider de programas RIAEJ no encontrados.");
            }
            // --- FIN Script para el Slider de Programas RIAEJ ---


            // --- Script para el Slider de Certificados RIAEJ (IMÁGENES) ---
            const certificateImageNames = [
                'raw.githubusercontent.com/giovanni-1990/dnc/refs/heads/main/certificado1.jpg',
                'raw.githubusercontent.com/giovanni-1990/dnc/refs/heads/main/certificado2.jpg',
                'raw.githubusercontent.com/giovanni-1990/dnc/refs/heads/main/certificado2.jpg',
                'raw.githubusercontent.com/giovanni-1990/dnc/refs/heads/main/certificado4.jpg'
            ];
            const certificateImageBasePath = 'https://'; 

            const sliderCertContainer = document.getElementById('sliderCertificatesContainer'); 
            const imageCertModal = document.getElementById('imageCertificatesModal'); 
            const enlargedCertImage = document.getElementById('enlargedCertificatesImage'); 
            const modalCertCloseButton = document.getElementById('modalCertificatesCloseButton'); 

            if (sliderCertContainer && imageCertModal && enlargedCertImage && modalCertCloseButton) {
                certificateImageNames.forEach(name => {
                    const imgElement = document.createElement('img');
                    imgElement.src = certificateImageBasePath + name; 
                    imgElement.alt = `Vista previa de ${name.split('.')[0]}`;
                    imgElement.classList.add('thumbnail');
                    imgElement.onerror = function() { 
                        this.alt = `Error al cargar ${name}`; 
                        this.style.border = '1px solid var(--color-risk-extremo)'; 
                        console.error("Error al cargar imagen del certificado: ", this.src);
                    };

                    imgElement.addEventListener('click', function() {
                        enlargedCertImage.src = this.src; 
                        enlargedCertImage.alt = `Certificado: ${name.split('.')[0]}`;
                        imageCertModal.classList.add('active');
                    });
                    sliderCertContainer.appendChild(imgElement);
                });

                function closeCertSliderModal() {
                    imageCertModal.classList.remove('active');
                    enlargedCertImage.src = ""; 
                }

                modalCertCloseButton.addEventListener('click', closeCertSliderModal);

                imageCertModal.addEventListener('click', function(event) {
                    if (event.target === imageCertModal) { 
                        closeCertSliderModal();
                    }
                });

                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape' && imageCertModal.classList.contains('active')) {
                        closeCertSliderModal();
                    }
                });
            } else {
                console.warn("Elementos del slider de certificados (imágenes) no encontrados. El slider no funcionará.");            }
            // --- FIN Script para el Slider de Certificados (IMÁGENES) ---
        };

        // --- INICIO: LÓGICA DIRECTORIO INTERACTIVO COMPLETO --- //
        const directoryJudgesData = [
            { "correlativo": 1, "nombre": "ALEJANDRO CHANG JIMÉNEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Psicología Clínica", "docencia": ["Psicología Clínica"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 2, "nombre": "ALLAN AMILKAR ESTRADA MORALES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 3, "nombre": "AMANDA JUDITH LÓPEZ DE LEÓN", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Letras", "docencia": ["Letras"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 4, "nombre": "ANA IZABEL ORTIZ GODÍNEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Ciencias Psicológicas", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 5, "nombre": "ANA SUSANA CHAVAC VELÁSQUEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 6, "nombre": "CARLOS ENRIQUE ORTEGA SALGUERO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 7, "nombre": "CARLOS FERNANDO BARRIENTOS BAILÓN", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Trabajador Social con Enfasis en Gerencia del Desarrollo", "docencia": ["Trabajo Social", "Gerencia"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 8, "nombre": "CARLOS FERNANDO PRERA MEJÍA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 9, "nombre": "CARLOS OCTAVIO ENRIQUEZ MENA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 10, "nombre": "CAROLL ANETA RIOS ARATHOON", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Politóloga", "docencia": ["Ciencias Políticas"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 11, "nombre": "DOUGLAS FERNANDO HERNÁNDEZ FRANCO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Bachiller en Ciencias y Letras", "docencia": ["Ciencias y Letras"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 12, "nombre": "EDDY ESTUARDO ARRIAZA VALENZUELA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Administración de Recursos y Tecnología", "docencia": ["Administración", "Tecnología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 13, "nombre": "EDGAR GIOVANNI JUÁREZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Ciencias de la Comunicación", "docencia": ["Ciencias de la Comunicación"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 14, "nombre": "EDNA ANABELLA JULIAN LEAL", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Médica y Cirujana con especialidad en Psiquiatría", "docencia": ["Medicina", "Psiquiatría"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 15, "nombre": "FREDY ARMANDO TORRES BOLAÑOS", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 16, "nombre": "GILDA ISABEL BARRIOS BRAVO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 17, "nombre": "GUSTAVO ADOLFO GARCÍA FONG", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 18, "nombre": "HELEN AMELIA MUÑOZ CABRERA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 19, "nombre": "HELGA TZICAP DE SNOW", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 20, "nombre": "HUGO LEONEL PEREIRA GÓMEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 21, "nombre": "JAIME FRANCISCO VIÑALS MASSANET", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Biología", "docencia": ["Biología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 22, "nombre": "JAVIER ARTURO LOBO CASTILLO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Ingeniero de Sistemas, Informática y Ciencias de la Computación", "docencia": ["Ingeniería de Sistemas", "Informática"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 23, "nombre": "JONATHAN EFRAIN HERNANDEZ FUENTES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 24, "nombre": "JORGE ABEL ALVAREZ RAMIREZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Psicólogo Forense", "docencia": ["Psicología Forense"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 25, "nombre": "JORGE ABULARACH REYES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Ingeniero en Sistemas", "docencia": ["Ingeniería de Sistemas"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 26, "nombre": "JORGE ADÁN LÓPEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 27, "nombre": "JOSÉ CARMEN MORALES VÉLIZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 28, "nombre": "JOSÉ DAVID LÓPEZ MORALES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Abogado y Notario / Contador Púbico y Auditor", "docencia": ["Ciencias Jurídicas y Sociales", "Contaduría y Auditoría"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 29, "nombre": "JOSÉ EDUARDO ROJAS RACANCOJ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 30, "nombre": "JUAN CARLOS VÁSQUEZ MENDOZA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Psicología Industrial", "docencia": ["Psicología Industrial"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 31, "nombre": "JUAN JOSÉ PEREZ SWANA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Perito en Mercadotecnia y Publicidad", "docencia": ["Mercadotecnia y Publicidad"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 32, "nombre": "JULIO CÉSAR CORDÓN AGUILAR", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 33, "nombre": "KARLA CECILIA MACARIO RAMOS", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Psicología Clínica", "docencia": ["Psicología Clínica"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 34, "nombre": "KARLA GUISELA ORTÍZ BOJÓRQUEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Ingeniería Química Industrial", "docencia": ["Ingeniería Química"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 35, "nombre": "KARLA JEANNETTE MARTINEZ ABADIA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 36, "nombre": "LESTER MANUEL MEDA RUANO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 37, "nombre": "LIGIA MARÍA VILLEDA LÓPEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 38, "nombre": "LILIAN LIZBETH BARRIENTOS HERNÁNDEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Profesora de Historia y Ciencias Sociales", "docencia": ["Historia y Ciencias Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 39, "nombre": "LILIANA EUGENIA MATHEU PAREDES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Maestra en Educación Preprimaria", "docencia": ["Educación"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 40, "nombre": "LUIS ALBERTO MIRANDA VILLAFUERTE", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 41, "nombre": "LUIS ALEXIS CALDERON MALDONADO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 42, "nombre": "LUIS ALFREDO BETETA PERERA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Profesor en Lengua y Literatura", "docencia": ["Lengua y Literatura"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 43, "nombre": "LUIS CARLOS LAPARRA RIVAS", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 44, "nombre": "LUIS ENRIQUE ESPINO SIQUE", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Psicología General", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 45, "nombre": "LUIS FERNANDO CORDÓN MORALES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario / Sociologo", "docencia": ["Ciencias Jurídicas y Sociales", "Sociología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 46, "nombre": "LUISA MARÍA DE LEÓN SANTIZO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 47, "nombre": "MARCO LUIS RENATO GODÍNEZ ESCOBAR", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura, Ingenieria Quimica Industrial", "docencia": ["Ingeniería Química"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 48, "nombre": "MARÍA ELENA ROCHA NAVARRO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Educación", "docencia": ["Educación"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 49, "nombre": "MARÍA RAQUEL MONTENEGRO MUÑOZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en letras", "docencia": ["Letras"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 50, "nombre": "MARÍA VERÓNICA SÁNCHEZ CHUVAC", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 51, "nombre": "MARÍA VICTORIA MORÁN ANDRADE", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 52, "nombre": "MARICRUZ FIGUEROA PORTILLO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 53, "nombre": "MARIO DAVID GARCÍA VELÁSQUEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario / Sociologo", "docencia": ["Ciencias Jurídicas y Sociales", "Sociología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 54, "nombre": "MARIO RENÉ MANCILLA BARILLAS", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario / Psicologo", "docencia": ["Ciencias Jurídicas y Sociales", "Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 55, "nombre": "MARIO RENE VELASQUEZ LETONA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Psicología Clínica", "docencia": ["Psicología Clínica"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 56, "nombre": "MERLY MERCEDEZ GONZÁLEZ KLUSMANN", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 57, "nombre": "MIGUEL ALFREDO GUILLÉN BARILLAS", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 58, "nombre": "MIRZA EUGENIA IRUNGARAY LOPEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 59, "nombre": "MOISÉS ABRAHAM GUZMÁN GRAMAJO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 60, "nombre": "MYRIAM HAYDÉE SALVADOR RUYÁN", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 61, "nombre": "NUVIA MARIA PATRICIA REINA MUÑOZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 62, "nombre": "OSCAR EDUARDO MORA GÓMEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 63, "nombre": "OSCAR FERNANDO QUAN GONZÁLEZ", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Ingeniero Industrial", "docencia": ["Ingeniería Industrial"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 64, "nombre": "RAUL ALBERTO CALDERÓN TELLO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Tecnología Médica", "docencia": ["Tecnología Médica"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 65, "nombre": "ROBERTO RENE ALONZO DEL CID", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 66, "nombre": "ROSELYNE DESIREE ALDANA ROBLES", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Ciencias Jurídicas y Sociales, Abogada y Notaria", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 67, "nombre": "SAÚL GONZÁLEZ CABRERA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 68, "nombre": "SEYLIN NATALY CORDOVA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciatura En Psicología Clínica", "docencia": ["Psicología Clínica"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 69, "nombre": "SOFIA MARLENE GARCÍA ALVARADO", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciada en Psicología", "docencia": ["Psicología"], "otra_especialidad": null, "estado": "ACTIVO" },
            { "correlativo": 70, "nombre": "VICTOR MANUEL TURCIOS URRUTIA", "cargo": "Docente Externo", "dependencia": "Escuela de Estudios Judiciales", "judicatura": "Licenciado en Ciencias Jurídicas y Sociales, Abogado y Notario", "docencia": ["Ciencias Jurídicas y Sociales"], "otra_especialidad": null, "estado": "ACTIVO" }
        ];

        // Inicialización del directorio completo
        const initDirectoryCompleto = () => {
            const directoryJudgesContainer = document.getElementById('directory-judges-container');
            const directoryFilterName = document.getElementById('directory-filter-name');
            const directoryFilterJudicatura = document.getElementById('directory-filter-judicatura');
            const directoryFilterDocencia = document.getElementById('directory-filter-docencia');
            const directoryFilterEstado = document.getElementById('directory-filter-estado');
            const directoryResultsCount = document.getElementById('directory-results-count');
            const directoryResetFiltersBtn = document.getElementById('directory-reset-filters');
            
            const directoryTotalJudgesEl = document.getElementById('directory-total-judges');
            const directoryExpertiseStatsList = document.getElementById('directory-expertise-stats-list');

            const directoryPopulateStatistics = () => {
                if (directoryTotalJudgesEl) {
                    directoryTotalJudgesEl.textContent = directoryJudgesData.length;
                }
                
                const docenciaCounts = {};
                directoryJudgesData.forEach(j => { 
                    if (j.docencia) {
                        j.docencia.forEach(exp => { docenciaCounts[exp] = (docenciaCounts[exp] || 0) + 1; }); 
                    }
                });
                const sortedDocencia = Object.entries(docenciaCounts).sort((a, b) => b[1] - a[1]);
                if (directoryExpertiseStatsList) {
                    directoryExpertiseStatsList.innerHTML = sortedDocencia.slice(0, 15).map(([exp, count]) => `<li><span>${exp}</span><span class="directory-count-badge">${count}</span></li>`).join('');
                }
            };
            
            const directoryPopulateFilters = () => {
                const judicaturas = [...new Set(directoryJudgesData.map(j => j.judicatura).filter(j => j))].sort();
                const docencias = [...new Set(directoryJudgesData.flatMap(j => j.docencia || []))].sort();
                
                if (directoryFilterJudicatura) {
                    judicaturas.forEach(judicatura => { directoryFilterJudicatura.add(new Option(judicatura, judicatura)); });
                }
                if (directoryFilterDocencia) {
                    docencias.forEach(docencia => { directoryFilterDocencia.add(new Option(docencia, docencia)); });
                }
            };

            const directoryRenderJudges = (judges) => {
                if (!directoryJudgesContainer) return;
                
                directoryJudgesContainer.innerHTML = '';
                if (directoryResultsCount) {
                    directoryResultsCount.textContent = `${judges.length} resultado(s) encontrado(s).`;
                }
                
                if (judges.length === 0) {
                    directoryJudgesContainer.innerHTML = '<p style="text-align:center; grid-column: 1 / -1; padding: 40px 0;">No se encontraron resultados con los filtros aplicados.</p>';
                    return;
                }
                
                judges.forEach(judge => {
                    const initials = judge.nombre.split(' ').map(n => n[0]).slice(0, 2).join('').toUpperCase();
                    
                    const docenciaTags = judge.docencia ? judge.docencia.map(d => `<li class="directory-docencia-tag">${d}</li>`).join('') : '';
                    
                    const otraEspecialidadHTML = judge.otra_especialidad ? `<div class="directory-otra-especialidad"><strong>Nota / Otra especialidad:</strong> ${judge.otra_especialidad}</div>` : '';
                    const inactiveClass = judge.estado !== 'ACTIVO' ? 'directory-inactive-judge' : '';

                    const card = document.createElement('div');
                    card.className = `directory-judge-card ${inactiveClass}`;
                    card.innerHTML = `
                        <div class="directory-card-header">
                            <div class="directory-card-photo">${initials}</div>
                            <div class="directory-card-info">
                                <h3 class="directory-name">${judge.nombre}</h3>
                                <p class="directory-cargo">${judge.cargo}</p>
                            </div>
                            <div class="directory-card-correlativo">#${judge.correlativo}</div>
                        </div>
                        <div class="directory-card-body">
                            <div class="directory-detail-group"><strong>Dependencia:</strong><p>${judge.dependencia}</p></div>
                            <div class="directory-detail-group"><strong>Profesión / Especialidad:</strong><p>${judge.judicatura}</p></div>
                            <div class="directory-detail-group">
                                <strong>Áreas de Docencia:</strong>
                                <ul class="directory-expertise-tags">${docenciaTags.length > 0 ? docenciaTags : '<li>No especificada</li>'}</ul>
                            </div>
                            ${otraEspecialidadHTML}
                        </div>`;
                    directoryJudgesContainer.appendChild(card);
                });
            };
            
            const directoryApplyFilters = () => {
                const nameValue = directoryFilterName ? directoryFilterName.value.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") : '';
                const judicaturaValue = directoryFilterJudicatura ? directoryFilterJudicatura.value : '';
                const docenciaValue = directoryFilterDocencia ? directoryFilterDocencia.value : '';
                const estadoValue = directoryFilterEstado ? directoryFilterEstado.value : '';

                const filteredJudges = directoryJudgesData.filter(j => {
                    const normalizedName = j.nombre.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                    const isEstadoMatch = !estadoValue || j.estado === estadoValue;
                    
                    return normalizedName.includes(nameValue) && 
                    (!judicaturaValue || j.judicatura === judicaturaValue) && 
                    (!docenciaValue || (j.docencia && j.docencia.includes(docenciaValue))) &&
                    isEstadoMatch;
                });
                directoryRenderJudges(filteredJudges);
            };

            const directoryResetFilters = () => {
                if (directoryFilterName) directoryFilterName.value = ''; 
                if (directoryFilterJudicatura) directoryFilterJudicatura.value = '';
                if (directoryFilterDocencia) directoryFilterDocencia.value = '';
                if (directoryFilterEstado) directoryFilterEstado.value = '';
                directoryApplyFilters();
            };

            // Event Listeners
            if (directoryFilterName) directoryFilterName.addEventListener('keyup', directoryApplyFilters);
            if (directoryFilterJudicatura) directoryFilterJudicatura.addEventListener('change', directoryApplyFilters);
            if (directoryFilterDocencia) directoryFilterDocencia.addEventListener('change', directoryApplyFilters);
            if (directoryFilterEstado) directoryFilterEstado.addEventListener('change', directoryApplyFilters);
            if (directoryResetFiltersBtn) directoryResetFiltersBtn.addEventListener('click', directoryResetFilters);

            // Initial Load
            directoryPopulateStatistics();
            directoryPopulateFilters();
            directoryRenderJudges(directoryJudgesData);
        };

        //INSERTA AQUÍ EL RESTO DE CÓDIGO 




        //HASTA AQUÌ

        // Inicializar todas las funciones después de que el DOM esté listo
        console.log('Inicializando funciones después del DOM...');
        initDocentesDirectory();
        initDirectoryCompleto();
        initHoverEffects();
        initRiaejSlider();

//esto no se quita
});
//esto no se quita