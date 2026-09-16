<?php
require_once __DIR__ . '/../../config.php';
include_once __DIR__ . '/../../includes/header.php';
?>

<main class="flex-1 w-full max-w-6xl mx-auto px-4 pt-8 pb-16 relative">

    <!-- Encabezado -->
    <div class="text-center mb-8">
        <span class="inline-flex items-center gap-2 rounded-full bg-accent-100 text-brand-900 px-5 py-2 text-xs md:text-sm font-bold tracking-wide border border-accent-300 shadow-sm">
            <i class="fa-solid fa-calendar-check text-accent-600"></i>
            Agenda tu cita en 4 pasos
        </span>
        <h1 class="mt-4 text-3xl sm:text-4xl font-black text-brand-900 tracking-tight">
            Reserva tu turno <span class="text-brand-700">fácil y rápido</span>
        </h1>
    </div>

    <!-- Layout Principal: Formulario + Resumen Lateral -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

        <!-- Columna Izquierda: Formulario (2 columnas en desktop) -->
        <div class="lg:col-span-2 bg-white/90 backdrop-blur-md border border-purple-100 rounded-3xl shadow-glow p-6 md:p-8">
            
            <!-- Barra de progreso -->
            <div class="flex items-center justify-center gap-2 sm:gap-4 mb-8" id="progress-bar">
                <div class="flex flex-col items-center gap-1">
                    <span class="step-dot h-3 w-3 rounded-full bg-brand-600 shadow-md"></span>
                    <span class="hidden sm:block text-[11px] font-bold text-brand-900">Tipo</span>
                </div>
                <div class="step-line h-0.5 w-6 sm:w-12 bg-gray-300 rounded"></div>
                <div class="flex flex-col items-center gap-1">
                    <span class="step-dot h-3 w-3 rounded-full bg-gray-300"></span>
                    <span class="hidden sm:block text-[11px] font-bold text-slate-500">Vet</span>
                </div>
                <div class="step-line h-0.5 w-6 sm:w-12 bg-gray-300 rounded"></div>
                <div class="flex flex-col items-center gap-1">
                    <span class="step-dot h-3 w-3 rounded-full bg-gray-300"></span>
                    <span class="hidden sm:block text-[11px] font-bold text-slate-500">Fecha</span>
                </div>
                <div class="step-line h-0.5 w-6 sm:w-12 bg-gray-300 rounded"></div>
                <div class="flex flex-col items-center gap-1">
                    <span class="step-dot h-3 w-3 rounded-full bg-gray-300"></span>
                    <span class="hidden sm:block text-[11px] font-bold text-slate-500">Datos</span>
                </div>
                <div class="step-line h-0.5 w-6 sm:w-12 bg-gray-300 rounded"></div>
                <div class="flex flex-col items-center gap-1">
                    <span class="step-dot h-3 w-3 rounded-full bg-gray-300"></span>
                    <span class="hidden sm:block text-[11px] font-bold text-slate-500">Listo</span>
                </div>
            </div>

            <!-- Error global -->
            <div id="global-error" class="hidden mb-4 bg-red-50 border border-red-200 text-red-700 text-sm font-medium rounded-2xl px-4 py-3"></div>

            <!-- PASO 1: Tipo de atención -->
            <div id="step-1" class="step-panel">
                <h2 class="text-xl font-black text-brand-900 mb-5">¿Qué necesitas para tu mascota?</h2>
                <div id="tipos-list" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Cargado por JS -->
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="button" class="next-btn bg-brand-700 hover:bg-brand-600 text-white font-black px-6 py-3 rounded-2xl transition-all shadow-md" data-next="2" disabled>Siguiente →</button>
                </div>
            </div>

            <!-- PASO 2: Veterinario -->
            <div id="step-2" class="step-panel hidden">
                <h2 class="text-xl font-black text-brand-900 mb-5">Elige a tu veterinario</h2>
                <div id="vets-list" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Cargado por JS -->
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" class="prev-btn bg-slate-200 hover:bg-slate-300 text-brand-900 font-black px-6 py-3 rounded-2xl transition-all" data-prev="1">← Atrás</button>
                    <button type="button" class="next-btn bg-brand-700 hover:bg-brand-600 text-white font-black px-6 py-3 rounded-2xl transition-all shadow-md" data-next="3" disabled>Siguiente →</button>
                </div>
            </div>

            <!-- PASO 3: Fecha y hora -->
            <div id="step-3" class="step-panel hidden">
                <div class="flex items-center justify-between flex-wrap gap-2 mb-5">
                    <h2 class="text-xl font-black text-brand-900">Elige fecha y hora</h2>
                    <span class="inline-flex items-center gap-2 text-xs font-bold text-brand-900 bg-brand-50 border border-brand-200 px-3.5 py-1.5 rounded-full shadow-xs">
                        <i class="fa-solid fa-clock text-accent-600 animate-pulse"></i>
                        Hora actual: <strong id="reloj-vivo" class="text-brand-900 font-extrabold tracking-wider">--:--:--</strong>
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Fecha *</label>
                        <input type="date" id="fecha" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none" min="">
                        <p class="text-[11px] text-slate-500 mt-1.5"><i class="fa-solid fa-info-circle text-brand-600"></i> No se permiten fechas anteriores a hoy.</p>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex items-center justify-between mb-2">
                            <label class="block text-sm font-bold text-brand-900">Turnos de Atención</label>
                            <span id="horarios-contador" class="text-xs font-semibold text-slate-500"></span>
                        </div>
                        
                        <div id="horarios-aviso" class="hidden mb-3 p-3 rounded-2xl text-xs font-bold"></div>
                        <div id="horarios-list" class="grid grid-cols-3 sm:grid-cols-6 gap-2"></div>
                        <input type="hidden" id="hora" value="">
                    </div>
                </div>

                <!-- Leyenda de colores -->
                <div class="mt-4 pt-3 border-t border-purple-50 flex items-center gap-3 sm:gap-5 flex-wrap text-xs text-slate-600 font-medium">
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-md bg-white border-2 border-purple-300"></span> Disponible
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-md bg-brand-600"></span> Seleccionado
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-md bg-slate-100 border border-slate-300"></span> Reservado
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-md bg-rose-50 border border-rose-200"></span> Ya pasó (bloqueado)
                    </span>
                </div>

                <p id="horario-info" class="mt-3 text-xs text-slate-500">
                    <i class="fa-solid fa-calendar-check text-brand-700"></i> Horario de atención: Lun - Sáb 08:00 - 16:30 en intervalos de 30 minutos.
                </p>

                <div class="mt-6 flex justify-between">
                    <button type="button" class="prev-btn bg-slate-200 hover:bg-slate-300 text-brand-900 font-black px-6 py-3 rounded-2xl transition-all" data-prev="2">← Atrás</button>
                    <button type="button" class="next-btn bg-brand-700 hover:bg-brand-600 text-white font-black px-6 py-3 rounded-2xl transition-all shadow-md" data-next="4">Siguiente →</button>
                </div>
            </div>

            <!-- PASO 4: Datos del cliente -->
            <div id="step-4" class="step-panel hidden">
                <h2 class="text-xl font-black text-brand-900 mb-5">Tus datos</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Nombre completo *</label>
                        <input type="text" id="nombre" placeholder="Ej. María García" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Teléfono *</label>
                        <input type="tel" id="telefono" placeholder="Ej. 098 389 9798" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Email</label>
                        <input type="email" id="email" placeholder="opcional@email.com" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Nombre de tu mascota</label>
                        <input type="text" id="mascota" placeholder="Ej. Max" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-bold text-brand-900 mb-2">Observaciones</label>
                    <textarea id="observaciones" rows="3" placeholder="Ej. Para mi perrito Max, tose un poco..." class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none"></textarea>
                </div>

                <div class="mt-6 flex justify-between">
                    <button type="button" class="prev-btn bg-slate-200 hover:bg-slate-300 text-brand-900 font-black px-6 py-3 rounded-2xl transition-all" data-prev="3">← Atrás</button>
                    <button type="button" id="btn-confirmar" class="bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-black px-6 py-3 rounded-2xl transition-all shadow-md flex items-center gap-2">
                        <i class="fa-solid fa-paw"></i> Confirmar Cita
                    </button>
                </div>
            </div>

            <!-- PASO 5: Confirmación -->
            <div id="step-5" class="step-panel hidden text-center py-10">
                <div class="w-20 h-20 bg-accent-300 text-brand-900 rounded-full flex items-center justify-center text-4xl mx-auto mb-5 shadow-glow">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h2 class="text-2xl font-black text-brand-900 mb-2">¡Cita agendada con éxito!</h2>
                <p id="confirm-msg" class="text-slate-600 mb-4">Te contactaremos por WhatsApp para confirmar.</p>
                <p id="turno-ref" class="text-sm font-bold text-brand-700 mb-6"></p>
                <a href="<?= BASE_URL ?>/index.php" class="inline-block bg-brand-700 hover:bg-brand-600 text-white font-black px-8 py-3 rounded-2xl transition-all">Volver al inicio</a>
            </div>

        </div>

        <!-- Columna Derecha: Resumen en Vivo Estilo Tarjeta Oscura -->
        <div class="lg:col-span-1 sticky top-8">
            <div class="bg-brand-900 text-white rounded-3xl p-6 shadow-xl border border-brand-800 space-y-5">
                
                <h3 class="flex items-center gap-2 text-lg font-black text-accent-300 border-b border-brand-800 pb-4">
                    <i class="fa-solid fa-calendar-days text-accent-400"></i> Resumen
                </h3>

                <!-- Servicio -->
                <div class="bg-brand-800/60 rounded-2xl p-3.5 border border-brand-700/50">
                    <div class="flex items-center gap-2.5 text-xs font-bold text-accent-300 uppercase tracking-wider mb-1">
                        <i class="fa-solid fa-stethoscope"></i> Servicio
                    </div>
                    <p id="sum-servicio" class="text-sm font-medium text-slate-200 truncate">—</p>
                </div>

                <!-- Doctor / Veterinario -->
                <div class="bg-brand-800/60 rounded-2xl p-3.5 border border-brand-700/50">
                    <div class="flex items-center gap-2.5 text-xs font-bold text-accent-300 uppercase tracking-wider mb-1">
                        <i class="fa-solid fa-user-doctor"></i> Doctor
                    </div>
                    <p id="sum-veterinario" class="text-sm font-medium text-slate-200 truncate">—</p>
                </div>

                <!-- Fecha -->
                <div class="bg-brand-800/60 rounded-2xl p-3.5 border border-brand-700/50">
                    <div class="flex items-center gap-2.5 text-xs font-bold text-accent-300 uppercase tracking-wider mb-1">
                        <i class="fa-solid fa-calendar"></i> Fecha
                    </div>
                    <p id="sum-fecha" class="text-sm font-medium text-slate-200">—</p>
                </div>

                <!-- Hora -->
                <div class="bg-brand-800/60 rounded-2xl p-3.5 border border-brand-700/50">
                    <div class="flex items-center gap-2.5 text-xs font-bold text-accent-300 uppercase tracking-wider mb-1">
                        <i class="fa-solid fa-clock"></i> Hora
                    </div>
                    <p id="sum-hora" class="text-sm font-medium text-slate-200">—</p>
                </div>

                <!-- Footer del resumen -->
                <div class="pt-2 border-t border-brand-800 text-xs text-slate-400 space-y-2">
                    <div class="flex items-center gap-2 text-emerald-400 font-medium">
                        <i class="fa-solid fa-shield-check"></i> Reserva sin costo adicional
                    </div>
                    <div>
                        ¿Urgencia? <a href="tel:0983899798" class="text-accent-400 font-bold hover:underline">Llámanos ahora</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<script>
    window.BASE_URL = "<?= BASE_URL ?>";
    window.SERVER_NOW = "<?= date('Y-m-d\TH:i:s') ?>";
    window.SERVER_DATE = "<?= date('Y-m-d') ?>";
    window.SERVER_TIME = "<?= date('H:i:s') ?>";
</script>
<script src="<?= BASE_URL ?>/assets/js/citas.js"></script>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>