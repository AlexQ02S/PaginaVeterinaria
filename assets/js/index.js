document.addEventListener("DOMContentLoaded", () => {
    // 1. Contador dinámico para la sección de métricas
    const counters = document.querySelectorAll('.counter');
    let animated = false;

    const runCounter = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const speed = target / 40;

            const updateCount = () => {
                count += speed;
                if (count < target) {
                    counter.innerText = Math.ceil(count).toLocaleString();
                    setTimeout(updateCount, 25);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            updateCount();
        });
    };

    const metricsSection = document.querySelector('.grid-cols-2.md\\:grid-cols-4');
    if (metricsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    runCounter();
                    animated = true;
                    observer.disconnect();
                }
            });
        }, { threshold: 0.3 });

        observer.observe(metricsSection);
    }

    // 2. Acordeón interactivo para FAQ
    const faqButtons = document.querySelectorAll('.faq-btn');
    faqButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const answer = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            const isOpen = !answer.classList.contains('hidden');

            document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
            document.querySelectorAll('.faq-btn i').forEach(i => i.classList.remove('rotate-180'));

            if (!isOpen) {
                answer.classList.remove('hidden');
                icon.classList.add('rotate-180');
            }
        });
    });

    // 3. Calculadora de Salud y Cronograma Preventivo
    const calcBtn = document.getElementById('calc-btn');
    const calcResult = document.getElementById('calc-result');

    if (calcBtn && calcResult) {
        calcBtn.addEventListener('click', () => {
            const petType = document.getElementById('calc-pet-type').value;
            const petAge = document.getElementById('calc-pet-age').value;
            const petName = document.getElementById('calc-pet-name').value.trim() || (petType === 'perro' ? 'Tu perrito' : 'Tu gatito');

            let planTitle = '';
            let vaccines = [];
            let deworming = '';
            let checkups = [];
            let nutritionTips = '';

            if (petType === 'perro') {
                if (petAge === 'puppy') {
                    planTitle = `Plan Cachorro (Menor a 1 año) para ${petName}`;
                    vaccines = [
                        'Vacuna Parvovirus / Moquillo (6-8 semanas)',
                        'Polivalente Canina DHPPi (Refuerzo cada 3-4 semanas)',
                        'Vacuna Antirrábica (A partir de los 3 meses)',
                        'Bordetella / Tos de las perreras (opcional recomendado)'
                    ];
                    deworming = 'Interna cada 15 días hasta los 3 meses, luego mensual. Protección externa contra pulgas y garrapatas mensual.';
                    checkups = ['Evaluación de desarrollo óseo y dental', 'Test coproparasitario'];
                    nutritionTips = 'Alimento premium formulado para cachorros, 3 a 4 tomas diarias.';
                } else if (petAge === 'adult') {
                    planTitle = `Plan Adulto (1 a 7 años) para ${petName}`;
                    vaccines = [
                        'Refuerzo Anual de Vacuna Séxtuple / Múltiple',
                        'Refuerzo Anual Antirrábico Obligatorio',
                        'Vacuna contra Giardia / Tos de las perreras (según estilo de vida)'
                    ];
                    deworming = 'Desparasitación interna cada 3 meses. Pipeta o pastilla antiparasitaria externa mensual.';
                    checkups = ['Chequeo médico preventivo semestral o anual', 'Profilaxis y limpieza dental con ultrasonido'];
                    nutritionTips = 'Proteína de alta digestibilidad, porciones medidas según nivel de actividad física para evitar sobrepeso.';
                } else {
                    planTitle = `Plan Senior (+7 años) para ${petName}`;
                    vaccines = [
                        'Refuerzo Anual Séxtuple y Antirrábica (según evaluación veterinaria)'
                    ];
                    deworming = 'Desparasitación adaptada cada 3 a 4 meses.';
                    checkups = ['Perfil bioquímico sanguíneo completo', 'Ecografía abdominal y chequeo cardiológico geriátrico', 'Control de articulaciones (artrosis)'];
                    nutritionTips = 'Dieta Senior con glucosamina, condroitina y menor fósforo para proteger riñones.';
                }
            } else { // Gato
                if (petAge === 'puppy') {
                    planTitle = `Plan Gatito (Menor a 1 año) para ${petName}`;
                    vaccines = [
                        'Triple Felina (Panleucopenia, Rinotraqueitis, Calicivirus) a las 8 semanas',
                        'Refuerzo Triple Felina a las 12 semanas',
                        'Vacuna Leucemia Felina (FeLV previa prueba negativa)',
                        'Vacuna Antirrábica a los 3-4 meses'
                    ];
                    deworming = 'Interna mensual hasta los 6 meses. Antiparasitario externo seguro para gatitos.';
                    checkups = ['Test rápido de Leucemia e Inmunodeficiencia Felina (FeLV/FIV)', 'Control de peso y pelaje'];
                    nutritionTips = 'Pienso para gatitos alto en taurina y humedad mediante sobres o latas húmedas.';
                } else if (petAge === 'adult') {
                    planTitle = `Plan Gato Adulto (1 a 7 años) para ${petName}`;
                    vaccines = [
                        'Refuerzo Anual Triple Felina',
                        'Refuerzo Anual Rabia',
                        'Refuerzo Leucemia (en caso de gatos con acceso al exterior)'
                    ];
                    deworming = 'Interna cada 3-4 meses. Pipeta externa periódica antipulgas.';
                    checkups = ['Revisión bucodental (sarro y encías)', 'Chequeo de peso y densidad urinaria'];
                    nutritionTips = 'Fomenta el consumo de agua fresca (fuentes de agua) y comida húmeda para prevenir problemas renales.';
                } else {
                    planTitle = `Plan Gato Senior (+7 años) para ${petName}`;
                    vaccines = ['Esquema personalizado según estado de salud y anticuerpos'];
                    deworming = 'Desparasitación controlada cada 4 meses.';
                    checkups = ['Perfil renal completo (SDMA, Creatinina, Urea)', 'Control de presión arterial felina', 'Ecografía renal periódica'];
                    nutritionTips = 'Alimento Renal Support / Senior húmedo y fácil de masticar.';
                }
            }

            // Renderizar resultados con estilos acordes a TuHuellaVet
            calcResult.innerHTML = `
                <div class="bg-white p-6 sm:p-8 rounded-3xl border border-purple-200 mt-8 shadow-glow animate-fade-in space-y-6">
                    <div class="flex items-center gap-4 pb-4 border-b border-purple-100">
                        <div class="w-12 h-12 rounded-2xl bg-accent-300 text-brand-900 flex items-center justify-center font-black text-xl shadow-sm shrink-0">
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <div>
                            <h4 class="font-black text-brand-900 text-lg sm:text-xl">${planTitle}</h4>
                            <p class="text-xs sm:text-sm font-bold text-brand-700">Guía veterinaria preventiva personalizada por TuHuellaVet</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-brand-50/60 p-5 rounded-2xl border border-purple-100">
                            <h5 class="font-black text-brand-900 flex items-center gap-2 mb-2 text-sm sm:text-base">
                                <i class="fa-solid fa-shield-halved text-brand-700"></i> Esquema de Vacunación
                            </h5>
                            <ul class="text-xs sm:text-sm text-slate-700 space-y-1.5 list-disc list-inside font-medium">
                                ${vaccines.map(v => `<li>${v}</li>`).join('')}
                            </ul>
                        </div>

                        <div class="bg-brand-50/60 p-5 rounded-2xl border border-purple-100">
                            <h5 class="font-black text-brand-900 flex items-center gap-2 mb-2 text-sm sm:text-base">
                                <i class="fa-solid fa-pills text-brand-700"></i> Desparasitación
                            </h5>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed font-medium">${deworming}</p>
                        </div>

                        <div class="bg-brand-50/60 p-5 rounded-2xl border border-purple-100">
                            <h5 class="font-black text-brand-900 flex items-center gap-2 mb-2 text-sm sm:text-base">
                                <i class="fa-solid fa-stethoscope text-brand-700"></i> Chequeos Clave
                            </h5>
                            <ul class="text-xs sm:text-sm text-slate-700 space-y-1.5 list-disc list-inside font-medium">
                                ${checkups.map(c => `<li>${c}</li>`).join('')}
                            </ul>
                        </div>

                        <div class="bg-brand-50/60 p-5 rounded-2xl border border-purple-100">
                            <h5 class="font-black text-brand-900 flex items-center gap-2 mb-2 text-sm sm:text-base">
                                <i class="fa-solid fa-bowl-food text-brand-700"></i> Nutrición y Bienestar
                            </h5>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed font-medium">${nutritionTips}</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-purple-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <p class="text-[11px] text-slate-500 font-medium">
                            * Nota: Esta recomendación es orientativa. Nuestros médicos diseñan esquemas a la medida en consulta.
                        </p>
                        <a href="pages/citas.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand-700 hover:bg-brand-600 text-white font-extrabold rounded-xl text-xs sm:text-sm transition-all shadow-md">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Agendar chequeo para ${petName}</span>
                        </a>
                    </div>
                </div>
            `;
        });
    }

    // 4. Carrusel Interactivo de Servicios con Fotos
    const track = document.getElementById('servicios-carousel-track');
    const prevBtn = document.getElementById('carousel-servicios-prev');
    const nextBtn = document.getElementById('carousel-servicios-next');
    const dotsContainer = document.getElementById('servicios-carousel-dots');

    if (track && prevBtn && nextBtn) {
        const slides = track.querySelectorAll('.snap-start');
        const totalSlides = slides.length;

        // Generar dots dinámicos
        if (dotsContainer) {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('button');
                dot.setAttribute('aria-label', `Ir al servicio ${i + 1}`);
                dot.className = `h-2.5 transition-all rounded-full cursor-pointer ${i === 0 ? 'w-8 bg-brand-700' : 'w-2.5 bg-purple-200 hover:bg-purple-300'}`;
                dot.addEventListener('click', () => {
                    goToSlide(i);
                    resetAutoplay();
                });
                dotsContainer.appendChild(dot);
            }
        }

        const getCardWidth = () => {
            if (slides[0]) {
                const gap = 24; // gap-6
                return slides[0].offsetWidth + gap;
            }
            return 360;
        };

        const updateDots = () => {
            if (!dotsContainer) return;
            const cardWidth = getCardWidth();
            const activeIndex = Math.round(track.scrollLeft / cardWidth);
            const dots = dotsContainer.querySelectorAll('button');
            dots.forEach((dot, index) => {
                if (index === Math.min(activeIndex, totalSlides - 1)) {
                    dot.className = 'h-2.5 w-8 bg-brand-700 transition-all rounded-full cursor-pointer';
                } else {
                    dot.className = 'h-2.5 w-2.5 bg-purple-200 hover:bg-purple-300 transition-all rounded-full cursor-pointer';
                }
            });
        };

        const goToSlide = (index) => {
            const cardWidth = getCardWidth();
            track.scrollTo({
                left: index * cardWidth,
                behavior: 'smooth'
            });
        };

        const slideNext = () => {
            const cardWidth = getCardWidth();
            const maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft >= maxScroll - 30) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: cardWidth, behavior: 'smooth' });
            }
        };

        const slidePrev = () => {
            const cardWidth = getCardWidth();
            if (track.scrollLeft <= 30) {
                track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            }
        };

        nextBtn.addEventListener('click', () => {
            slideNext();
            resetAutoplay();
        });

        prevBtn.addEventListener('click', () => {
            slidePrev();
            resetAutoplay();
        });

        track.addEventListener('scroll', updateDots, { passive: true });

        // Autoplay suave cada 5 segundos
        let autoplayTimer = setInterval(slideNext, 5000);

        const stopAutoplay = () => clearInterval(autoplayTimer);
        const resetAutoplay = () => {
            stopAutoplay();
            autoplayTimer = setInterval(slideNext, 5000);
        };

        track.addEventListener('mouseenter', stopAutoplay);
        track.addEventListener('mouseleave', resetAutoplay);
        track.addEventListener('touchstart', stopAutoplay, { passive: true });
        track.addEventListener('touchend', resetAutoplay, { passive: true });

        // Arrastre con ratón (Drag to scroll) para computadoras
        let isDown = false;
        let startX, scrollLeft;

        track.addEventListener('mousedown', (e) => {
            isDown = true;
            track.classList.add('cursor-grabbing');
            track.classList.remove('cursor-grab');
            startX = e.pageX - track.offsetLeft;
            scrollLeft = track.scrollLeft;
            stopAutoplay();
        });

        track.addEventListener('mouseleave', () => {
            isDown = false;
            track.classList.remove('cursor-grabbing');
            track.classList.add('cursor-grab');
        });

        track.addEventListener('mouseup', () => {
            isDown = false;
            track.classList.remove('cursor-grabbing');
            track.classList.add('cursor-grab');
            resetAutoplay();
        });

        track.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - track.offsetLeft;
            const walk = (x - startX) * 1.5;
            track.scrollLeft = scrollLeft - walk;
        });
    }
});