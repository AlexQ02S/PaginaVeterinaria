<?php
require_once __DIR__ . '/../../config.php';
include_once __DIR__ . '/../../includes/header.php';
?>

<main class="flex-1 w-full max-w-7xl mx-auto px-4 pt-6 pb-16 space-y-12 relative">
    <!-- Decoración de fondo: huellas -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
        <i class="fa-solid fa-paw text-brand-100 text-7xl absolute top-10 left-8 -rotate-12 opacity-70"></i>
        <i class="fa-solid fa-paw text-brand-100 text-5xl absolute top-40 right-10 rotate-12 opacity-70"></i>
        <i class="fa-solid fa-paw text-brand-100/70 text-6xl absolute bottom-32 left-16 rotate-45 opacity-70"></i>
        <i class="fa-solid fa-paw text-brand-100 text-7xl absolute bottom-8 right-14 -rotate-6 opacity-70"></i>
    </div>

    <!-- ENCABEZADO DE PÁGINA -->
    <section class="relative text-center pt-8 pb-2">
        <span class="inline-flex items-center gap-2 rounded-full bg-accent-100 text-brand-900 px-5 py-2 text-xs md:text-sm font-bold tracking-wide border border-accent-300 shadow-sm">
            <i class="fa-solid fa-stethoscope text-accent-600"></i>
            Tu Huella Vet - Servicios
        </span>
        <h1 class="mt-5 text-4xl sm:text-5xl md:text-6xl font-black text-brand-900 tracking-tight leading-tight">
            Cuidado integral <br class="hidden sm:block"/>
            <span class="bg-gradient-to-r from-brand-700 via-brand-600 to-accent-600 bg-clip-text text-transparent">para tu compañero</span>
        </h1>
        <p class="mt-4 text-base md:text-lg text-slate-600 max-w-2xl mx-auto font-medium">
            Atención médica, bienestar y servicios especializados para perros y gatos. Conoce todo lo que ofrecemos para el cuidado de tu mascota.
        </p>
    </section>

    <!-- TARJETAS DE SERVICIOS -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- 1. Consulta General -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?auto=format&fit=crop&w=800&q=80" alt="Consulta General Veterinaria" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Atención Médica
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Consulta General</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Atención veterinaria integral para evaluar la salud de tu mascota, identificar posibles enfermedades y establecer el tratamiento más adecuado. Realizamos una valoración clínica completa y orientación personalizada.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Perros y Gatos</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 2. Hospitalización Veterinaria -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVY2xk0Nq8RCETJbViYKg6kSjC28Khqk1EPuEbX229jrw3jeoPSCD5jK0j&s=10" alt="Hospitalización Veterinaria" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Cuidado Continuo
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Hospitalización Veterinaria</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Servicio de hospitalización y monitoreo para pacientes que requieren cuidados continuos o recuperación bajo supervisión profesional. Brindamos control constante de signos vitales para favorecer una recuperación segura.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Monitoreo 24/7</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 3. Medicina Preventiva -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?auto=format&fit=crop&w=800&q=80" alt="Medicina Preventiva y Vacunación" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Prevención & Vacunas
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Medicina Preventiva</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Cuidamos la salud de tu mascota antes de que aparezcan las enfermedades. Incluye vacunación completa, desparasitación, controles periódicos y recomendaciones nutricionales personalizadas.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Planes de Vacuna</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 4. Consulta de Especialidad -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?auto=format&fit=crop&w=800&q=80" alt="Consulta de Especialidad Veterinaria" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Especialistas
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Consulta de Especialidad</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Atención veterinaria especializada para pacientes que requieren una evaluación más profunda o manejo clínico específico de acuerdo con su condición particular.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Dermatología & Más</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 5. Estética Canina y Felina -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=800&q=80" alt="Estética y Spa de Mascotas" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Spa & Peluquería
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Estética Canina y Felina</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Servicios de baño medicado, corte higiénico o de raza, cepillado profundo y limpieza de oídos y uñas, brindándole a cada mascota una experiencia tranquila y confortable.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Baño & Corte</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 6. Exámenes de Laboratorio Veterinario -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&w=800&q=80" alt="Laboratorio Clínico Veterinario" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Laboratorio
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Exámenes de Laboratorio</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Hemogramas, bioquímica sanguínea, análisis de orina, coproparasitarios, citologías y pruebas rápidas para obtener diagnósticos oportunos y tratamientos exactos.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Resultados Rápidos</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 7. Cirugías Menores y Esterilizaciones -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?auto=format&fit=crop&w=800&q=80" alt="Cirugías y Esterilizaciones" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Quirófano Seguro
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Cirugías y Esterilizaciones</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Cirugías menores y procedimientos de esterilización para perros y gatos bajo estrictos protocolos de bioseguridad, anestesia inhalatoria y monitoreo permanente.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Esterilizaciones</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 8. Profilaxis Dental -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1535294435445-d7249524ef2e?auto=format&fit=crop&w=800&q=80" alt="Profilaxis Dental Veterinaria" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Salud Bucal
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Profilaxis Dental</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Remoción de placa bacteriana y sarro para prevenir la gingivitis, mal aliento y pérdida prematura de piezas dentales, mejorando la calidad de vida de tu mascota.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Limpieza Ultrasónica</span>
                    <a href="<?= BASE_URL ?>/pages/citas.php" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Agendar cita <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 9. Farmacia Veterinaria -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=800&q=80" alt="Farmacia Veterinaria y Medicamentos" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Farmacia
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Farmacia Veterinaria</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Medicamentos e insumos certificados de laboratorios reconocidos. Asesoría profesional sobre la dosificación y uso correcto según la receta del médico veterinario.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Medicinas Certificadas</span>
                    <a href="https://wa.me/593983899798" target="_blank" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Consultar <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 10. Cremación de Mascotas -->
        <div class="rounded-[32px] border border-purple-100 bg-white overflow-hidden shadow-soft flex flex-col justify-between transition-all hover:shadow-glow card-hover group md:col-span-2 lg:col-span-1">
            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-purple-100">
                <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=800&q=80" alt="Cremación y Despedida Digna de Mascotas" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/60 via-transparent to-transparent"></div>
                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md text-brand-900 text-[11px] font-black uppercase tracking-wider px-3 py-1.5 rounded-full shadow-md border border-white/80">
                    Despedida Digna
                </span>
            </div>
            <div class="p-6 flex flex-col justify-between flex-1">
                <div>
                    <h3 class="text-xl font-black text-brand-900 mb-2 group-hover:text-brand-700 transition-colors">Cremación Digna</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Servicio de cremación digno y respetuoso para acompañarte en los momentos difíciles. Manejo cuidadoso y sensible con consideración hacia cada familia.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                    <span class="text-xs font-bold text-slate-500">Acompañamiento</span>
                    <a href="https://wa.me/593983899798" target="_blank" class="text-sm font-black text-brand-700 hover:text-brand-900 flex items-center gap-1.5 group-hover:translate-x-1 transition-transform">
                        Más información <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- CTA FINAL -->
    <section class="bg-gradient-to-r from-brand-900 via-brand-800 to-purple-950 rounded-[36px] p-8 sm:p-12 text-white shadow-xl relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
            <div class="lg:col-span-8">
                <span class="bg-accent-300 text-brand-900 font-extrabold text-xs uppercase px-3.5 py-1.5 rounded-full shadow-sm">Atención Inmediata</span>
                <h2 class="text-3xl md:text-4xl font-black mt-3 leading-tight">¿Listo para cuidar a tu mascota?</h2>
                <p class="text-purple-200 mt-2 text-sm md:text-base font-medium">
                    Agenda hoy mismo tu cita o contáctanos para brindarle a tu compañero la atención que se merece.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-col sm:flex-row gap-3.5 justify-center lg:justify-end">
                <a href="<?= BASE_URL ?>/pages/citas.php" class="bg-accent-300 hover:bg-accent-400 text-brand-900 font-black text-base py-3.5 px-7 rounded-2xl transition-all shadow-lg text-center flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-calendar-check"></i> Agendar Cita
                </a>
                <a href="https://wa.me/593983899798" target="_blank" class="bg-white/10 hover:bg-white/20 text-white font-black text-base py-3.5 px-6 rounded-2xl transition-all border border-white/20 text-center flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-xl text-accent-300"></i> WhatsApp
                </a>
            </div>
        </div>
    </section>

</main>

<?php include_once __DIR__ . '/../../includes/footer.php'; ?>