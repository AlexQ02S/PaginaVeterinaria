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
            <i class="fa-solid fa-headset text-accent-600"></i>
            Tu Huella Vet - Contacto
        </span>
        <h1 class="mt-5 text-4xl sm:text-5xl md:text-6xl font-black text-brand-900 tracking-tight leading-tight">
            Estamos aquí <br class="hidden sm:block"/>
            <span class="bg-gradient-to-r from-brand-700 via-brand-600 to-accent-600 bg-clip-text text-transparent">para ayudarte y escucharte</span>
        </h1>
        <p class="mt-4 text-base md:text-lg text-slate-600 max-w-2xl mx-auto font-medium">
            Ponte en contacto con nosotros para resolver tus dudas, consultar sobre nuestros servicios o recibir atención veterinaria oportuna.
        </p>
    </section>

    <!-- SECCIÓN DE INFORMACIÓN Y FORMULARIO -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Tarjetas de Información de Contacto (Izquierda) -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- Tarjeta 1: Teléfono y WhatsApp -->
            <div class="rounded-3xl border border-purple-100 bg-white/90 backdrop-blur-sm p-6 shadow-soft space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-accent-300 text-brand-900 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <h3 class="text-xl font-black text-brand-900">Llámanos o escríbenos</h3>
                <p class="text-sm text-slate-600">
                    Atención inmediata para resolver cualquier consulta o emergencia de tu mascota.
                </p>
                <div class="pt-2 space-y-2">
                    <a href="https://wa.me/593983899798" target="_blank" class="flex items-center gap-3 text-sm font-bold text-brand-700 hover:text-brand-900 transition-colors">
                        <i class="fa-brands fa-whatsapp text-lg text-emerald-600"></i> 098 389 9798
                    </a>
                      <a href="mailto:veterinariatuhuella@gmail.com" class="hover:underline transition-all">
                       veterinariatuhuella@gmail.com
                    </a>

                </div>
            </div>

            <!-- Tarjeta 2: Ubicación / Horarios -->
            <div class="rounded-3xl border border-purple-100 bg-white/90 backdrop-blur-sm p-6 shadow-soft space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-brand-600 text-white flex items-center justify-center text-xl">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3 class="text-xl font-black text-brand-900">Horarios de Atención</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    <strong>Lunes a Sábado:</strong> 09:00 - 18:00<br>
                    <span>Valle de los Chillos, Ecuador</span>
                </p>
            </div>

        </div>

        <!-- Formulario de Contacto (Derecha) con API -->
        <div class="lg:col-span-7 bg-white/90 backdrop-blur-md border border-purple-100 rounded-3xl shadow-glow p-6 md:p-8">
            <h3 class="text-2xl font-black text-brand-900 mb-2">Envíanos un mensaje</h3>
            <p class="text-sm text-slate-600 mb-6">Completa el formulario y nos pondremos en contacto contigo a la brevedad posible.</p>
            
            <!-- Mensajes de estado -->
            <div id="form-error" class="hidden mb-4 bg-red-50 border border-red-200 text-red-700 text-sm font-medium rounded-2xl px-4 py-3"></div>
            <div id="form-success" class="hidden mb-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-medium rounded-2xl px-4 py-3"></div>

            <form id="contact-form" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Nombre y Apellido *</label>
                        <input type="text" id="c-nombre" required placeholder="Ej. Carlos Pérez" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-brand-900 mb-2">Teléfono / WhatsApp *</label>
                        <input type="tel" id="c-telefono" required placeholder="Ej. 0983899798" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-brand-900 mb-2">Correo electrónico</label>
                    <input type="email" id="c-email" placeholder="tuemail@ejemplo.com" class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-bold text-brand-900 mb-2">Mensaje o Consulta *</label>
                    <textarea id="c-mensaje" rows="4" required placeholder="Escribe tu consulta o los detalles de tu requerimiento..." class="w-full border border-purple-200 rounded-2xl px-4 py-3 font-medium focus:ring-2 focus:ring-brand-500 focus:outline-none"></textarea>
                </div>

                <button type="submit" id="btn-enviar" class="w-full bg-gradient-to-r from-brand-700 to-brand-600 hover:from-brand-800 hover:to-brand-700 text-white font-black py-4 px-6 rounded-2xl transition-all shadow-md flex items-center justify-center gap-2">
                    <i class="fa-solid fa-paper-plane"></i> Enviar Mensaje
                </button>
            </form>
        </div>

    </section>

</main>

<script>
    window.BASE_URL = "<?= BASE_URL ?>";
</script>
<script src="<?= BASE_URL ?>/assets/js/contactos.js"></script>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>