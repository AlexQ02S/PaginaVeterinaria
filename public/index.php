<?php
require_once __DIR__ . '/../config.php';
include_once __DIR__ . '/../includes/header.php';
?>


<main class="flex-1 w-full max-w-7xl mx-auto px-4 pt-6 pb-20 space-y-20 relative">
    
    <!-- 1. HERO PRINCIPAL -->
    <section class="rounded-[36px] bg-white/90 backdrop-blur-md border border-purple-100 shadow-glow px-6 py-10 sm:px-10 sm:py-14 lg:px-14 lg:py-16 relative overflow-hidden">
        <!-- Elementos decorativos de fondo con brillo suave -->
        <div class="absolute -top-16 -right-16 w-64 h-64 bg-accent-300/30 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-brand-300/25 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-100/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center relative z-10">
            
            <!-- Columna de Texto (Izquierda) -->
            <div class="lg:col-span-7 text-left space-y-6">
                
                <!-- Chip superior con animación sutil -->
                <div class="inline-flex items-center gap-2 rounded-full bg-accent-100/90 text-brand-900 px-4 py-2 text-xs sm:text-sm font-extrabold tracking-wide border border-accent-300 shadow-sm">
                    <i class="fa-solid fa-paw text-accent-600 text-sm"></i>
                    <span>Porque una mascota protegida es una familia tranquila</span>
                </div>

                <!-- Título H1 con tipografía destacada -->
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-brand-900 tracking-tight leading-[1.12]">
                    Su centro local para el <br class="hidden sm:block"/>
                    <span class="bg-gradient-to-r from-brand-700 via-brand-600 to-accent-600 bg-clip-text text-transparent">cuidado preventivo</span> de mascotas
                </h1>

                <!-- Descripción persuasiva y cercana -->
                <p class="text-base sm:text-lg text-slate-600 font-medium leading-relaxed max-w-2xl">
                    Tus mascotas son parte de tu familia. Dales la atención veterinaria de calidad y con calidez humana que se merecen en <strong class="text-brand-900 font-bold">TuHuellaVet</strong>, en el corazón del Valle de los Chillos.
                </p>

                <!-- Botones de Acción (CTAs principales) -->
                <div class="pt-2 flex items-center gap-3.5 sm:gap-4 flex-wrap">
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold px-7 py-3.5 sm:px-8 sm:py-4 rounded-2xl shadow-glow transition-all transform hover:-translate-y-0.5 flex items-center gap-3 text-base group">
                        <i class="fa-solid fa-calendar-check text-accent-300 text-lg group-hover:scale-110 transition-transform"></i>
                        <span>Agendar Cita en Línea</span>
                    </a>

                    <a href="https://wa.me/593983899798" target="_blank" class="bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border border-emerald-200 font-bold px-6 py-3.5 sm:py-4 rounded-2xl transition-all shadow-sm flex items-center gap-2.5 text-base hover:-translate-y-0.5">
                        <i class="fa-brands fa-whatsapp text-emerald-600 text-xl"></i>
                        <span>WhatsApp Directo</span>
                    </a>

                    <a href="<?= BASE_URL ?>/pages/servicios.php" class="bg-white hover:bg-brand-50 text-brand-900 border border-purple-200 font-bold px-5 py-3.5 sm:py-4 rounded-2xl transition-all shadow-sm flex items-center gap-2 text-sm sm:text-base hover:border-brand-300">
                        <span>Ver Servicios</span>
                        <i class="fa-solid fa-arrow-right text-xs text-brand-600"></i>
                    </a>
                </div>

                <!-- Sellos de confianza rápida -->
                <div class="pt-2 flex items-center gap-4 sm:gap-6 flex-wrap text-xs text-slate-500 font-semibold">
                    <span class="inline-flex items-center gap-1.5 text-slate-700">
                        <i class="fa-solid fa-circle-check text-emerald-600"></i> Sin filas ni esperas
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-slate-700">
                        <i class="fa-solid fa-circle-check text-emerald-600"></i> Médicos certificados
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-slate-700">
                        <i class="fa-solid fa-location-dot text-brand-600"></i> Valle de los Chillos
                    </span>
                </div>
            </div>

            <!-- Columna de Imagen con Tarjetas Flotantes (Derecha) -->
            <div class="lg:col-span-5 relative flex justify-center mt-4 lg:mt-0">
                <div class="relative w-full max-w-[420px] lg:max-w-none">
                    
                    <!-- Marco principal de la imagen con bordes curvos modernos -->
                    <div class="relative h-[360px] sm:h-[440px] rounded-[32px] overflow-hidden shadow-soft border-2 border-purple-100 bg-purple-50 group">
                        <img src="<?= BASE_URL ?>/assets/img/veterinaria-feliz.avif" alt="Veterinaria atendiendo a una mascota con cariño" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"/>
                        
                        <!-- Overlay degradado sutil inferior -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/40 via-transparent to-transparent pointer-events-none"></div>
                        
                        <!-- Chip inferior en la foto -->
                        <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md rounded-2xl p-3 border border-white/60 shadow-lg flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 font-bold">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>
                            <div class="text-xs">
                                <p class="font-bold text-brand-900">Atención Personalizada</p>
                                <p class="text-slate-500 font-medium">Chequeos sin estrés para perros y gatos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta Flotante Superior: Calificación (animate-float) -->
                    <div class="hidden sm:flex absolute -top-5 -left-6 bg-white/95 backdrop-blur-md border border-purple-100 rounded-2xl px-4 py-3 shadow-glow items-center gap-3 animate-float">
                        <div class="w-10 h-10 rounded-xl bg-accent-300 text-brand-900 flex items-center justify-center text-lg shadow-sm">
                            <i class="fa-solid fa-star text-amber-500"></i>
                        </div>
                        <div>
                            <div class="flex items-center gap-1 text-amber-500 text-xs">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="font-black text-brand-900 ml-1 text-xs">4.9 / 5</span>
                            </div>
                            <p class="text-[11px] font-bold text-slate-500">Familias Satisfechas</p>
                        </div>
                    </div>

                    <!-- Tarjeta Flotante Inferior Derecha: Pacientes (animate-float-slow) -->
                    <div class="hidden sm:flex absolute -bottom-5 -right-6 bg-white/95 backdrop-blur-md border border-purple-100 rounded-2xl px-4 py-3 shadow-glow items-center gap-3 animate-float-slow">
                        <div class="w-10 h-10 rounded-xl bg-brand-100 text-brand-700 flex items-center justify-center text-lg">
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <div>
                            <p class="text-xs font-black text-brand-900">+2,500 Pacientes</p>
                            <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-600">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Atendiendo hoy
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- 2. NÚMEROS Y CONFIANZA (Métricas Dinámicas) -->
    <section class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
        <div class="bg-white/85 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 text-center shadow-soft card-hover flex flex-col items-center justify-center">
            <div class="w-12 h-12 rounded-2xl bg-brand-50 text-brand-700 border border-brand-100 flex items-center justify-center text-xl mb-3 shadow-xs">
                <i class="fa-solid fa-paw"></i>
            </div>
            <span class="block text-3xl sm:text-4xl font-black text-brand-900 tracking-tight">
                +<span class="counter" data-target="2500">0</span>
            </span>
            <span class="text-xs sm:text-sm font-bold text-slate-600 mt-1">Pacientes Atendidos</span>
        </div>

        <div class="bg-white/85 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 text-center shadow-soft card-hover flex flex-col items-center justify-center">
            <div class="w-12 h-12 rounded-2xl bg-accent-100 text-brand-900 border border-accent-200 flex items-center justify-center text-xl mb-3 shadow-xs">
                <i class="fa-solid fa-heart-pulse text-brand-800"></i>
            </div>
            <span class="block text-3xl sm:text-4xl font-black text-brand-900 tracking-tight">
                <span class="counter" data-target="100">0</span>%
            </span>
            <span class="text-xs sm:text-sm font-bold text-slate-600 mt-1">Amor & Vocación</span>
        </div>

        <div class="bg-white/85 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 text-center shadow-soft card-hover flex flex-col items-center justify-center">
            <div class="w-12 h-12 rounded-2xl bg-brand-50 text-brand-700 border border-brand-100 flex items-center justify-center text-xl mb-3 shadow-xs">
                <i class="fa-solid fa-award"></i>
            </div>
            <span class="block text-3xl sm:text-4xl font-black text-brand-900 tracking-tight">
                +<span class="counter" data-target="8">0</span> Años
            </span>
            <span class="text-xs sm:text-sm font-bold text-slate-600 mt-1">De Experiencia Médica</span>
        </div>

        <div class="bg-white/85 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 text-center shadow-soft card-hover flex flex-col items-center justify-center">
            <div class="w-12 h-12 rounded-2xl bg-accent-100 text-brand-900 border border-accent-200 flex items-center justify-center text-xl mb-3 shadow-xs">
                <i class="fa-solid fa-calendar-check text-brand-800"></i>
            </div>
            <span class="block text-3xl sm:text-4xl font-black text-brand-900 tracking-tight">
                100%
            </span>
            <span class="text-xs sm:text-sm font-bold text-slate-600 mt-1">Reserva Online Rápida</span>
        </div>
    </section>

    <!-- 3. NUESTROS SERVICIOS DESTACADOS (CARRUSEL INTERACTIVO CON FOTOS) -->
    <section class="relative">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-6">
            <div>
                <span class="text-xs font-extrabold uppercase tracking-widest text-brand-700 bg-brand-100 px-4 py-1.5 rounded-full border border-brand-200 shadow-xs">
                    Nuestros Servicios
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-900 mt-4 tracking-tight">
                    Cuidado Integral Para Tu Mascota
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 font-medium max-w-2xl">
                    Desliza y explora nuestras áreas de atención médica y bienestar. Equipamiento moderno, diagnóstico oportuno y el amor que tu consentido merece.
                </p>
            </div>

            <!-- Controles de navegación del carrusel -->
            <div class="flex items-center gap-3 shrink-0">
                <button id="carousel-servicios-prev" 
                        aria-label="Servicio anterior"
                        class="w-12 h-12 rounded-2xl bg-white border border-purple-200 text-brand-900 hover:bg-brand-50 hover:border-brand-400 hover:scale-105 active:scale-95 shadow-sm flex items-center justify-center transition-all cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-base"></i>
                </button>
                <button id="carousel-servicios-next" 
                        aria-label="Servicio siguiente"
                        class="w-12 h-12 rounded-2xl bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white hover:scale-105 active:scale-95 shadow-glow flex items-center justify-center transition-all cursor-pointer">
                    <i class="fa-solid fa-chevron-right text-base"></i>
                </button>
            </div>
        </div>

        <!-- Track deslizable del carrusel con fotos -->
        <div class="relative overflow-hidden -mx-4 px-4 sm:mx-0 sm:px-0">
            <div id="servicios-carousel-track" 
                 class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4 pt-1 px-1 select-none cursor-grab active:cursor-grabbing scrollbar-none" style="scrollbar-width: none; -ms-overflow-style: none;">
                
                <!-- Slide 1: Consultas Médicas -->
                <div class="w-[82vw] sm:w-[320px] md:w-[350px] lg:w-[370px] flex-shrink-0 snap-start bg-white rounded-[32px] overflow-hidden border border-purple-100 shadow-soft card-hover flex flex-col justify-between group transition-all">
                    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                        <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?auto=format&fit=crop&w=800&q=80" 
                             alt="Consulta médica y chequeo veterinario" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" 
                             loading="lazy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Medicina Preventiva
                        </span>
                        <span class="absolute bottom-3 left-4 text-white text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-stethoscope text-accent-300"></i> Cuidado General
                        </span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">
                                Consultas Médicas
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Exámenes clínicos completos, planes de vacunación, desparasitación interna y externa, y control nutricional personalizado.
                            </p>
                            <div class="space-y-1.5 mb-6 text-xs text-slate-500 font-semibold">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Chequeo clínico preventivo</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Vacunación y refuerzos</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Control de peso y dieta</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full text-center bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold text-xs sm:text-sm py-3 rounded-2xl shadow-sm transition-all flex items-center justify-center gap-2 group-hover:shadow-glow">
                            <span>Agendar Consulta</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 2: Diagnóstico & Laboratorio -->
                <div class="w-[82vw] sm:w-[320px] md:w-[350px] lg:w-[370px] flex-shrink-0 snap-start bg-white rounded-[32px] overflow-hidden border border-purple-100 shadow-soft card-hover flex flex-col justify-between group transition-all">
                    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                        <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&w=800&q=80" 
                             alt="Diagnóstico clínico y análisis de laboratorio veterinario" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" 
                             loading="lazy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span> Laboratorio
                        </span>
                        <span class="absolute bottom-3 left-4 text-white text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-flask-vial text-accent-300"></i> Resultados Precisos
                        </span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">
                                Diagnóstico & Cuidado
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Monitoreo continuo y análisis clínicos de laboratorio para identificar a tiempo cualquier afección con exactitud.
                            </p>
                            <div class="space-y-1.5 mb-6 text-xs text-slate-500 font-semibold">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Análisis de sangre y orina</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Pruebas rápidas infecciosas</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Monitoreo clínico continuo</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full text-center bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold text-xs sm:text-sm py-3 rounded-2xl shadow-sm transition-all flex items-center justify-center gap-2 group-hover:shadow-glow">
                            <span>Agendar Diagnóstico</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 3: Cirugías & Quirófano -->
                <div class="w-[82vw] sm:w-[320px] md:w-[350px] lg:w-[370px] flex-shrink-0 snap-start bg-white rounded-[32px] overflow-hidden border border-purple-100 shadow-soft card-hover flex flex-col justify-between group transition-all">
                    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                        <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?auto=format&fit=crop&w=800&q=80" 
                             alt="Cirugías veterinarias y quirófano equipado" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" 
                             loading="lazy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span> Quirófano
                        </span>
                        <span class="absolute bottom-3 left-4 text-white text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-halved text-accent-300"></i> Máxima Seguridad
                        </span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">
                                Cirugías & Farma
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Quirófano moderno equipado para esterilizaciones y cirugías con monitoreo permanente y farmacia garantizada.
                            </p>
                            <div class="space-y-1.5 mb-6 text-xs text-slate-500 font-semibold">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Esterilizaciones seguras</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Monitoreo anestésico</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Medicamentos post-operatorios</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full text-center bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold text-xs sm:text-sm py-3 rounded-2xl shadow-sm transition-all flex items-center justify-center gap-2 group-hover:shadow-glow">
                            <span>Consultar Cirugía</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 4: Estética & Spa -->
                <div class="w-[82vw] sm:w-[320px] md:w-[350px] lg:w-[370px] flex-shrink-0 snap-start bg-white rounded-[32px] overflow-hidden border border-purple-100 shadow-soft card-hover flex flex-col justify-between group transition-all">
                    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                        <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=800&q=80" 
                             alt="Baño spa y peluquería canina felina" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" 
                             loading="lazy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span> Spa & Peluquería
                        </span>
                        <span class="absolute bottom-3 left-4 text-white text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-bath text-accent-300"></i> Belleza & Aseo
                        </span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">
                                Estética & Spa
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Peluquería canina y felina profesional, baños medicados, corte higiénico y profilaxis dental para consentir a tu mascota.
                            </p>
                            <div class="space-y-1.5 mb-6 text-xs text-slate-500 font-semibold">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Baños medicados & antipulgas</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Corte según la raza</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Limpieza de oídos y uñas</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full text-center bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold text-xs sm:text-sm py-3 rounded-2xl shadow-sm transition-all flex items-center justify-center gap-2 group-hover:shadow-glow">
                            <span>Agendar Spa / Baño</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 5: Hospitalización & Cuidados Continuos -->
                <div class="w-[82vw] sm:w-[320px] md:w-[350px] lg:w-[370px] flex-shrink-0 snap-start bg-white rounded-[32px] overflow-hidden border border-purple-100 shadow-soft card-hover flex flex-col justify-between group transition-all">
                    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVY2xk0Nq8RCETJbViYKg6kSjC28Khqk1EPuEbX229jrw3jeoPSCD5jK0j&s=10" 
                             alt="Hospitalización veterinaria y monitoreo" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" 
                             loading="lazy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span> Cuidado Continuo
                        </span>
                        <span class="absolute bottom-3 left-4 text-white text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-house-chimney-medical text-accent-300"></i> Supervisión Atenta
                        </span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">
                                Hospitalización 24/7
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Cuidados intensivos y monitoreo profesional continuo para pacientes en recuperación médica o post-quirúrgica.
                            </p>
                            <div class="space-y-1.5 mb-6 text-xs text-slate-500 font-semibold">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Control de signos vitales</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Terapia de fluidos y sueros</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Ambiente seguro y tranquilo</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full text-center bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold text-xs sm:text-sm py-3 rounded-2xl shadow-sm transition-all flex items-center justify-center gap-2 group-hover:shadow-glow">
                            <span>Agendar Hospitalización</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Slide 6: Profilaxis Dental -->
                <div class="w-[82vw] sm:w-[320px] md:w-[350px] lg:w-[370px] flex-shrink-0 snap-start bg-white rounded-[32px] overflow-hidden border border-purple-100 shadow-soft card-hover flex flex-col justify-between group transition-all">
                    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                        <img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?auto=format&fit=crop&w=800&q=80" 
                             alt="Profilaxis dental y salud bucal de mascotas" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" 
                             loading="lazy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                        <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span> Salud Bucal
                        </span>
                        <span class="absolute bottom-3 left-4 text-white text-xs font-bold flex items-center gap-1.5">
                            <i class="fa-solid fa-tooth text-accent-300"></i> Limpieza Ultrasónica
                        </span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">
                                Profilaxis Dental
                            </h3>
                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                                Remoción profunda de sarro y placa bacteriana mediante ultrasonido para prevenir el dolor, mal aliento y pérdida de piezas.
                            </p>
                            <div class="space-y-1.5 mb-6 text-xs text-slate-500 font-semibold">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Ultrasonido odontológico</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Prevención de gingivitis</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600 text-[11px]"></i> Aliento fresco y saludable</div>
                            </div>
                        </div>
                        <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full text-center bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-extrabold text-xs sm:text-sm py-3 rounded-2xl shadow-sm transition-all flex items-center justify-center gap-2 group-hover:shadow-glow">
                            <span>Agendar Profilaxis</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Indicadores / Dots del carrusel -->
        <div id="servicios-carousel-dots" class="flex items-center justify-center gap-2 mt-6"></div>

        <div class="text-center mt-10">
            <a href="<?= BASE_URL ?>/pages/servicios.php" class="inline-flex items-center gap-2 text-brand-700 hover:text-brand-900 font-extrabold text-sm hover:underline">
                <span>Ver todos los 10 servicios veterinarios detallados</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>
    </section>

    <!-- 4. CÓMO FUNCIONA NUESTRO AGENDAMIENTO EN LÍNEA (3 Pasos Rápidos) -->
    <section class="bg-gradient-to-br from-brand-900 via-brand-800 to-purple-950 rounded-[36px] p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
        <!-- Decoraciones lumínicas -->
        <div class="absolute -top-12 -right-12 w-64 h-64 bg-accent-300/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-12 -left-12 w-64 h-64 bg-brand-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-3xl mx-auto text-center relative z-10 mb-10">
            <span class="bg-accent-300 text-brand-900 font-black text-xs uppercase px-4 py-1.5 rounded-full tracking-wider">
                Rápido & Sin Esperas
            </span>
            <h2 class="text-3xl sm:text-4xl font-black mt-4 tracking-tight">
                Agenda la Cita de tu Mascota en 3 Pasos
            </h2>
            <p class="text-purple-200 mt-2 text-sm sm:text-base font-medium">
                Sin llamadas ni tiempos de espera. Elige el horario exacto y recibe tu confirmación al instante.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-10">
            <!-- Paso 1 -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/15 relative">
                <div class="w-12 h-12 rounded-2xl bg-accent-300 text-brand-900 flex items-center justify-center font-black text-lg mb-4 shadow-sm">
                    1
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Elige el Servicio</h3>
                <p class="text-xs sm:text-sm text-purple-200">
                    Consulta general, vacunación, chequeo preventivo o baño spa para tu perrito o gatito.
                </p>
            </div>

            <!-- Paso 2 -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/15 relative">
                <div class="w-12 h-12 rounded-2xl bg-brand-500 text-white flex items-center justify-center font-black text-lg mb-4 shadow-sm">
                    2
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Fecha y Turno Libre</h3>
                <p class="text-xs sm:text-sm text-purple-200">
                    Selecciona al doctor y el horario en tiempo real. Los horarios ya transcurridos se bloquean automáticamente.
                </p>
            </div>

            <!-- Paso 3 -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/15 relative">
                <div class="w-12 h-12 rounded-2xl bg-emerald-400 text-brand-900 flex items-center justify-center font-black text-lg mb-4 shadow-sm">
                    3
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Confirma y ¡Listo!</h3>
                <p class="text-xs sm:text-sm text-purple-200">
                    Ingresa tus datos de contacto y obtén tu referencia de cita para acudir a la clínica sin filas.
                </p>
            </div>
        </div>

        <div class="mt-10 text-center relative z-10">
            <a href="<?= BASE_URL ?>/pages/citas.php" class="inline-flex items-center gap-3 bg-accent-300 hover:bg-accent-400 text-brand-900 font-black px-8 py-4 rounded-2xl transition-all shadow-glow text-base transform hover:-translate-y-0.5">
                <i class="fa-solid fa-paw text-brand-900"></i>
                <span>¡Reservar turno ahora mismo!</span>
            </a>
        </div>
    </section>

    <!-- 6. CALCULADORA DE SALUD Y CRONOGRAMA PREVENTIVO (REDESEÑADA CON ESTILO TUHUELLAVET) -->
    <section id="calculadora" class="bg-white/90 backdrop-blur-md border border-purple-100 rounded-[36px] p-8 sm:p-12 lg:p-14 shadow-soft relative overflow-hidden">
        <!-- Decoraciones sutiles de fondo -->
        <div class="absolute -top-16 -left-16 w-64 h-64 bg-accent-300/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-3xl mx-auto text-center mb-10 relative z-10">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-100 text-brand-900 text-xs font-black uppercase tracking-wider border border-accent-300 shadow-xs">
                <i class="fa-solid fa-calculator text-accent-600"></i> Herramienta Interactiva Gratuita
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-brand-900 mt-3 tracking-tight">
                Calculadora de Salud y Cronograma Preventivo
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2 font-medium">
                Ingresa los datos de tu consentido para descubrir al instante su esquema recomendado de vacunación, controles periódicos y consejos nutricionales.
            </p>
        </div>

        <!-- Formulario de la Calculadora -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 relative z-10 bg-brand-50/70 p-6 sm:p-8 rounded-3xl border border-purple-100">
            <!-- Nombre -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-brand-900 mb-2">Nombre de la Mascota</label>
                <input type="text" id="calc-pet-name" placeholder="Ej: Milo, Luna, Toby..." class="w-full px-4 py-3.5 rounded-2xl border border-purple-200 bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 font-medium text-sm text-slate-800">
            </div>

            <!-- Tipo de Mascota -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-brand-900 mb-2">Tipo de Mascota</label>
                <select id="calc-pet-type" class="w-full px-4 py-3.5 rounded-2xl border border-purple-200 bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 font-medium text-sm text-slate-800">
                    <option value="perro">🐶 Perro (Canino)</option>
                    <option value="gato">🐱 Gato (Felino)</option>
                </select>
            </div>

            <!-- Etapa / Edad -->
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-brand-900 mb-2">Etapa / Edad</label>
                <select id="calc-pet-age" class="w-full px-4 py-3.5 rounded-2xl border border-purple-200 bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 font-medium text-sm text-slate-800">
                    <option value="puppy">Cachorro / Gatito (< 1 año)</option>
                    <option value="adult" selected>Adulto (1 a 7 años)</option>
                    <option value="senior">Senior (+7 años)</option>
                </select>
            </div>
        </div>

        <div class="mt-6 flex justify-center relative z-10">
            <button id="calc-btn" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-black rounded-2xl shadow-glow transition-all cursor-pointer">
                <i class="fa-solid fa-calculator text-accent-300"></i>
                <span>Calcular Recomendaciones</span>
            </button>
        </div>

        <!-- Contenedor de Resultados -->
        <div id="calc-result" class="relative z-10"></div>
    </section>

    <!-- 5. POR QUÉ ELEGIRNOS -->
    <section class="bg-white/85 backdrop-blur-md border border-purple-100 rounded-[36px] p-8 sm:p-12 lg:p-14 shadow-soft">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Columna Izquierda: Mensaje y Puntos Clave -->
            <div class="lg:col-span-6 space-y-5">
                <span class="text-xs font-extrabold uppercase tracking-widest text-brand-700 bg-brand-100 px-4 py-1.5 rounded-full border border-brand-200 shadow-xs">
                    ¿Por qué TuHuellaVet?
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-900 leading-tight tracking-tight">
                    La tranquilidad de dejar a tu mascota en las mejores manos
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-medium">
                    Entendemos que tus mascotas son miembros de tu familia. Por eso combinamos tecnología veterinaria de vanguardia con instalaciones confortables y un trato 100% empático.
                </p>

                <div class="space-y-3.5 pt-2">
                    <div class="flex items-start gap-3 text-sm font-bold text-brand-900">
                        <div class="w-6 h-6 rounded-full bg-accent-300 text-brand-900 flex items-center justify-center text-xs shrink-0 mt-0.5">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <span>Consultorios higienizados y desinfectados continuamente</span>
                            <p class="text-xs text-slate-500 font-normal mt-0.5">Ambiente seguro contra infecciones cruzadas.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 text-sm font-bold text-brand-900">
                        <div class="w-6 h-6 rounded-full bg-accent-300 text-brand-900 flex items-center justify-center text-xs shrink-0 mt-0.5">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <span>Manejo amable y libre de estrés (Fear-Free)</span>
                            <p class="text-xs text-slate-500 font-normal mt-0.5">Paciencia y cariño con mascotas nerviosas o temerosas.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 text-sm font-bold text-brand-900">
                        <div class="w-6 h-6 rounded-full bg-accent-300 text-brand-900 flex items-center justify-center text-xs shrink-0 mt-0.5">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div>
                            <span>Seguimiento médico y recordatorios personalizados</span>
                            <p class="text-xs text-slate-500 font-normal mt-0.5">Te acompañamos en cada etapa de la salud de tu mascota.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Tarjetas de Beneficios -->
            <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-brand-50/80 p-6 rounded-3xl border border-purple-100 shadow-xs card-hover">
                    <div class="w-12 h-12 rounded-2xl bg-white text-brand-700 border border-purple-100 flex items-center justify-center text-2xl mb-4 shadow-xs">
                        <i class="fa-solid fa-hospital"></i>
                    </div>
                    <h4 class="font-black text-brand-900 text-base">Instalaciones Top</h4>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed font-medium">
                        Áreas limpias, climatizadas y equipadas para que tu mascota se sienta como en casa.
                    </p>
                </div>

                <div class="bg-brand-50/80 p-6 rounded-3xl border border-purple-100 shadow-xs card-hover">
                    <div class="w-12 h-12 rounded-2xl bg-white text-brand-700 border border-purple-100 flex items-center justify-center text-2xl mb-4 shadow-xs">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h4 class="font-black text-brand-900 text-base">Trato Humano</h4>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed font-medium">
                        Atendemos con calma y vocación para que la visita al veterinario sea una experiencia positiva.
                    </p>
                </div>

                <div class="bg-brand-50/80 p-6 rounded-3xl border border-purple-100 shadow-xs card-hover">
                    <div class="w-12 h-12 rounded-2xl bg-white text-brand-700 border border-purple-100 flex items-center justify-center text-2xl mb-4 shadow-xs">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <h4 class="font-black text-brand-900 text-base">Farmacia Propia</h4>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed font-medium">
                        Medicamentos certificados, vacunas de laboratorios reconocidos y antiparasitarios confiables.
                    </p>
                </div>

                <div class="bg-brand-50/80 p-6 rounded-3xl border border-purple-100 shadow-xs card-hover">
                    <div class="w-12 h-12 rounded-2xl bg-white text-brand-700 border border-purple-100 flex items-center justify-center text-2xl mb-4 shadow-xs">
                        <i class="fa-solid fa-shield-cat"></i>
                    </div>
                    <h4 class="font-black text-brand-900 text-base">Atención Puntual</h4>
                    <p class="text-xs text-slate-600 mt-1.5 leading-relaxed font-medium">
                        Citas organizadas para respetar tu tiempo y evitar aglomeraciones en la sala de espera.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- 6. TESTIMONIOS (Opiniones Reales) -->
    <section>
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-extrabold uppercase tracking-widest text-brand-700 bg-brand-100 px-4 py-1.5 rounded-full border border-brand-200 shadow-xs">
                Opiniones Reales
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-brand-900 mt-4 tracking-tight">
                Lo Que Dicen Nuestras Familias
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2 font-medium">
                La confianza de nuestros clientes y la felicidad de sus mascotas son nuestro mejor respaldo.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Testimonio 1 -->
            <div class="bg-white/90 border border-purple-100 rounded-[28px] p-7 shadow-soft card-hover flex flex-col justify-between relative overflow-hidden">
                <i class="fa-solid fa-quote-right text-brand-100 text-6xl absolute -bottom-3 -right-2 pointer-events-none opacity-40"></i>
                <div class="space-y-3 relative z-10">
                    <div class="text-amber-400 text-sm flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                        "Excelente atención en la clínica con mi gatito. Estaba muy asustado y supieron manejarlo con tanta paciencia y cariño. ¡Totalmente recomendados!"
                    </p>
                </div>
                <div class="pt-5 mt-4 border-t border-purple-50 flex items-center gap-3 relative z-10">
                    <div class="w-10 h-10 rounded-full bg-brand-100 text-brand-800 font-black flex items-center justify-center text-xs shrink-0">
                        CR
                    </div>
                    <div>
                        <div class="font-extrabold text-brand-900 text-xs sm:text-sm">Camila R. & "Milo"</div>
                        <div class="text-[11px] text-emerald-600 font-semibold flex items-center gap-1">
                            <i class="fa-solid fa-badge-check"></i> Dueña de gato (Valle de los Chillos)
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="bg-white/90 border border-purple-100 rounded-[28px] p-7 shadow-soft card-hover flex flex-col justify-between relative overflow-hidden">
                <i class="fa-solid fa-quote-right text-brand-100 text-6xl absolute -bottom-3 -right-2 pointer-events-none opacity-40"></i>
                <div class="space-y-3 relative z-10">
                    <div class="text-amber-400 text-sm flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                        "Instalaciones impecables y muy limpias. Agendé la cita por su página web, llegué a tiempo y nos atendieron sin demoras. Los doctores son de primera."
                    </p>
                </div>
                <div class="pt-5 mt-4 border-t border-purple-50 flex items-center gap-3 relative z-10">
                    <div class="w-10 h-10 rounded-full bg-accent-200 text-brand-900 font-black flex items-center justify-center text-xs shrink-0">
                        CM
                    </div>
                    <div>
                        <div class="font-extrabold text-brand-900 text-xs sm:text-sm">Carlos M. & "Thor"</div>
                        <div class="text-[11px] text-emerald-600 font-semibold flex items-center gap-1">
                            <i class="fa-solid fa-badge-check"></i> Dueño de Golden Retriever
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="bg-white/90 border border-purple-100 rounded-[28px] p-7 shadow-soft card-hover flex flex-col justify-between relative overflow-hidden">
                <i class="fa-solid fa-quote-right text-brand-100 text-6xl absolute -bottom-3 -right-2 pointer-events-none opacity-40"></i>
                <div class="space-y-3 relative z-10">
                    <div class="text-amber-400 text-sm flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                        "El baño spa y la limpieza dental de mi perrita Luna quedaron impecables. Te explican cada procedimiento con claridad y el costo es muy justo."
                    </p>
                </div>
                <div class="pt-5 mt-4 border-t border-purple-50 flex items-center gap-3 relative z-10">
                    <div class="w-10 h-10 rounded-full bg-brand-100 text-brand-800 font-black flex items-center justify-center text-xs shrink-0">
                        AP
                    </div>
                    <div>
                        <div class="font-extrabold text-brand-900 text-xs sm:text-sm">Andrea P. & "Luna"</div>
                        <div class="text-[11px] text-emerald-600 font-semibold flex items-center gap-1">
                            <i class="fa-solid fa-badge-check"></i> Dueña de Schnauzer
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 7. PREGUNTAS FRECUENTES (FAQ Acordeón) -->
    <section class="bg-white/80 backdrop-blur-md border border-purple-100 rounded-[36px] p-8 sm:p-12 shadow-soft max-w-4xl mx-auto">
        <div class="text-center mb-8">
            <span class="text-xs font-extrabold uppercase tracking-widest text-brand-700 bg-brand-100 px-4 py-1.5 rounded-full border border-brand-200">
                Preguntas Frecuentes
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-brand-900 mt-3 tracking-tight">
                ¿Tienes Dudas? Te Ayudamos
            </h2>
        </div>

        <div class="space-y-3" id="faq-accordion">
            <!-- FAQ 1 -->
            <div class="border border-purple-100 rounded-2xl overflow-hidden bg-white/70">
                <button type="button" class="faq-btn w-full px-5 py-4 text-left font-extrabold text-brand-900 flex justify-between items-center text-sm sm:text-base hover:bg-brand-50/50 transition-colors">
                    <span>¿Cómo reservo una cita para mi mascota?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 text-xs transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-5 pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                    Puedes agendar directamente desde nuestra web en la sección <a href="<?= BASE_URL ?>/pages/citas.php" class="text-brand-700 font-bold underline">Agendar Cita</a>. Eliges el servicio, el veterinario, la fecha y la hora disponible en tiempo real, ¡sin llamadas ni esperas!
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="border border-purple-100 rounded-2xl overflow-hidden bg-white/70">
                <button type="button" class="faq-btn w-full px-5 py-4 text-left font-extrabold text-brand-900 flex justify-between items-center text-sm sm:text-base hover:bg-brand-50/50 transition-colors">
                    <span>¿Cuáles son los horarios de atención de la clínica?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 text-xs transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-5 pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                    Atendemos de Lunes a Sábado de 08:00 a 16:30 para turnos programados. Los domingos atendemos urgencias prioritarias bajo contacto directo por WhatsApp al 098 389 9798.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="border border-purple-100 rounded-2xl overflow-hidden bg-white/70">
                <button type="button" class="faq-btn w-full px-5 py-4 text-left font-extrabold text-brand-900 flex justify-between items-center text-sm sm:text-base hover:bg-brand-50/50 transition-colors">
                    <span>¿Qué debo llevar a la primera consulta veterinaria?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 text-xs transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-5 pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                    Recomendamos traer el carné de vacunas previo (si lo tiene), una mantita o transportadora si es gato, y collar con correa si es perro. Si toma alguna medicación actual, puedes traer el empaque.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="border border-purple-100 rounded-2xl overflow-hidden bg-white/70">
                <button type="button" class="faq-btn w-full px-5 py-4 text-left font-extrabold text-brand-900 flex justify-between items-center text-sm sm:text-base hover:bg-brand-50/50 transition-colors">
                    <span>¿Dónde se encuentra ubicada la clínica veterinaria?</span>
                    <i class="fa-solid fa-chevron-down text-brand-600 text-xs transition-transform duration-300"></i>
                </button>
                <div class="faq-answer hidden px-5 pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                    Estamos ubicados en Av. General Rumiñahui e Isla Pinta, en el Valle de los Chillos, con fácil acceso y espacio de parqueo para tu tranquilidad.
                </div>
            </div>
        </div>
    </section>

    <!-- 8. BANNER FINAL DE ACCIÓN (CTA Principal) -->
    <section class="bg-gradient-to-r from-brand-900 via-brand-800 to-purple-950 rounded-[36px] p-8 sm:p-12 lg:p-14 text-white shadow-2xl relative overflow-hidden">
        <!-- Decoraciones lumínicas -->
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-accent-300/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-brand-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
            <div class="lg:col-span-8 space-y-3">
                <span class="inline-flex items-center gap-1.5 bg-accent-300 text-brand-900 font-extrabold text-xs uppercase px-3.5 py-1.5 rounded-full shadow-sm">
                    <i class="fa-solid fa-shield-heart"></i> Atención Inmediata & Programada
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mt-2 leading-tight tracking-tight">
                    ¿Listo para darle a tu mascota el mejor cuidado?
                </h2>
                <p class="text-purple-200 text-sm sm:text-base max-w-2xl font-medium leading-relaxed">
                    Reserva tu cita en línea en menos de 2 minutos o comunícate con nuestro equipo médico si tienes alguna duda o emergencia.
                </p>
            </div>

            <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3.5 justify-center lg:justify-end">
                <a href="<?= BASE_URL ?>/pages/citas.php" class="bg-accent-300 hover:bg-accent-400 text-brand-900 font-black text-base py-4 px-8 rounded-2xl transition-all shadow-lg text-center flex items-center justify-center gap-3 transform hover:-translate-y-0.5 animate-palpitar">
                    <i class="fa-solid fa-calendar-check text-brand-900 text-xl"></i>
                    <span>Agendar Cita en Línea</span>
                </a>

                <a href="https://wa.me/593983899798" target="_blank" class="bg-emerald-600 hover:bg-emerald-500 text-white font-black text-base py-4 px-8 rounded-2xl transition-all shadow-md text-center flex items-center justify-center gap-3 hover:-translate-y-0.5">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    <span>098 389 9798</span>
                </a>
            </div>
        </div>
    </section>

</main>

<script>
    window.BASE_URL = "<?= BASE_URL ?>";
</script>
<script src="<?= BASE_URL ?>/assets/js/index.js"></script>


<?php include_once __DIR__ . '/../includes/footer.php'; ?>