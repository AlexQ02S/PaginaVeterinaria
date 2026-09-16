<?php
require_once __DIR__ . '/../../config.php';
include_once __DIR__ . '/../../includes/header.php';
?>

<main class="flex-1 w-full max-w-7xl mx-auto px-4 pt-6 pb-16 space-y-16 relative">
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
            <i class="fa-solid fa-heart text-accent-600"></i>
            Sobre Tu Huella Vet
        </span>
        <h1 class="mt-5 text-4xl sm:text-5xl md:text-6xl font-black text-brand-900 tracking-tight leading-tight">
            Pasión y compromiso <br class="hidden sm:block"/>
            <span class="bg-gradient-to-r from-brand-700 via-brand-600 to-accent-600 bg-clip-text text-transparent">con la salud de tu mascota</span>
        </h1>
        <p class="mt-4 text-base md:text-lg text-slate-600 max-w-2xl mx-auto font-medium">
            Somos un equipo de profesionales dedicados a brindar atención médica de calidad, calidez y bienestar integral para perros y gatos en el Valle de los Chillos.
        </p>
    </section>

    <!-- MISIÓN Y VISIÓN -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="rounded-3xl border border-purple-100 bg-white/90 backdrop-blur-sm p-8 shadow-soft space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-accent-300 text-brand-900 flex items-center justify-center text-2xl">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h3 class="text-2xl font-black text-brand-900">Nuestra Misión</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
                Proporcionar servicios veterinarios integrales y de excelencia, enfocados en la prevención, diagnóstico oportuno y tratamiento compasivo. Buscamos mejorar la calidad de vida de cada paciente y fortalecer el vínculo entre las mascotas y sus familias a través de una atención profesional y humana.
            </p>
        </div>

        <div class="rounded-3xl border border-purple-100 bg-white/90 backdrop-blur-sm p-8 shadow-soft space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-brand-600 text-white flex items-center justify-center text-2xl">
                <i class="fa-solid fa-eye"></i>
            </div>
            <h3 class="text-2xl font-black text-brand-900">Nuestra Visión</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
                Ser la clínica veterinaria referente en el Valle de los Chillos, reconocida por la calidad humana de nuestro equipo, la constante innovación en nuestros servicios médicos y el compromiso inquebrantable con el bienestar animal y la tranquilidad de la comunidad.
            </p>
        </div>
    </section>

    <!-- NUESTROS VALORES -->
    <section class="space-y-8">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-brand-700 bg-brand-100 px-3.5 py-1.5 rounded-full border border-brand-200">Principios</span>
            <h2 class="text-3xl md:text-4xl font-black text-brand-900 mt-3 tracking-tight">Lo que nos define</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white/90 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 shadow-soft text-center space-y-3">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-accent-300 text-brand-900 flex items-center justify-center text-xl font-black">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>
                <h4 class="font-bold text-brand-900 text-lg">Empatía</h4>
                <p class="text-xs text-slate-600 leading-relaxed">Tratamos a cada paciente con el mismo amor y cuidado con el que cuidaríamos a los nuestros.</p>
            </div>

            <div class="bg-white/90 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 shadow-soft text-center space-y-3">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-brand-600 text-white flex items-center justify-center text-xl font-black">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h4 class="font-bold text-brand-900 text-lg">Profesionalismo</h4>
                <p class="text-xs text-slate-600 leading-relaxed">Actualización médica continua y rigurosidad en cada protocolo de diagnóstico y tratamiento.</p>
            </div>

            <div class="bg-white/90 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 shadow-soft text-center space-y-3">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-accent-300 text-brand-900 flex items-center justify-center text-xl font-black">
                    <i class="fa-solid fa-shield-heart"></i>
                </div>
                <h4 class="font-bold text-brand-900 text-lg">Compromiso</h4>
                <p class="text-xs text-slate-600 leading-relaxed">Disponibilidad y dedicación constante para garantizar la salud y seguridad de tu compañero.</p>
            </div>

            <div class="bg-white/90 backdrop-blur-sm border border-purple-100 rounded-3xl p-6 shadow-soft text-center space-y-3">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-brand-600 text-white flex items-center justify-center text-xl font-black">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h4 class="font-bold text-brand-900 text-lg">Transparencia</h4>
                <p class="text-xs text-slate-600 leading-relaxed">Comunicación clara y directa con los tutores en cada etapa del proceso clínico.</p>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="bg-gradient-to-r from-brand-900 via-brand-800 to-purple-950 rounded-[32px] p-8 md:p-12 text-white shadow-xl relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8">
                <span class="bg-accent-300 text-brand-900 font-extrabold text-xs uppercase px-3 py-1 rounded-full">Forma parte de nuestra familia</span>
                <h2 class="text-3xl md:text-4xl font-black mt-3 leading-tight">¿Listo para confiar la salud de tu mascota en manos expertas?</h2>
                <p class="text-purple-200 mt-2 text-sm md:text-base">
                    Agenda una cita hoy mismo o visítanos en nuestras instalaciones.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-col sm:flex-row gap-3 justify-center lg:justify-end">
                <a href="<?= BASE_URL ?>/pages/citas.php" class="bg-accent-300 hover:bg-accent-400 text-brand-900 font-black text-base py-3.5 px-6 rounded-2xl transition-all shadow-lg text-center flex items-center justify-center gap-2">
                    <i class="fa-solid fa-calendar-check"></i> Agendar Cita
                </a>
                <a href="<?= BASE_URL ?>/pages/contacto.php" class="bg-white/10 hover:bg-white/20 text-white font-black text-base py-3.5 px-6 rounded-2xl transition-all border border-white/20 text-center flex items-center justify-center gap-2">
                    <i class="fa-solid fa-envelope"></i> Contáctanos
                </a>
            </div>
        </div>
    </section>

</main>

<?php include_once __DIR__ . '/../../includes/footer.php'; ?>