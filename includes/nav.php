<div class="w-full sticky top-0 left-0 right-0 z-50">
    <!-- Topbar Púrpura y Amarillo -->
    <div class="w-full bg-brand-900 text-purple-100 text-xs py-2 px-4 border-b border-brand-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4 sm:gap-6 font-medium">
                <span class="flex items-center gap-1.5">
                    <i class="fa-solid fa-clock text-accent-400"></i>
                    Lun - Sáb: 08:00 - 15:00
                </span>
                <a href="https://maps.app.goo.gl/yUKRMHe25TkGUy7N8" target="_blank" class="hidden md:flex items-center gap-1.5 hover:text-accent-400 transition-colors">
                    <i class="fa-solid fa-location-dot text-accent-400"></i>
                    Atención Presencial en Clínica
                </a>
            </div>
            
            <div class="flex items-center gap-3 font-extrabold text-[11px] sm:text-xs">
                <!-- Badge de Urgencias -->
                <span class="inline-flex items-center gap-1.5 bg-red-500/20 text-red-300 px-2.5 py-0.5 rounded-full border border-red-500/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-400 animate-ping"></span>
                    Atención Médica
                </span>
                <a href="https://wa.me/593983899798" target="_blank" class="text-accent-400 hover:text-accent-300 flex items-center gap-1.5 transition-colors">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    098 389 9798
                </a>
            </div>
        </div>
    </div>

    <!-- Menú Principal Blanco / Glassmorphism -->
    <header class="w-full bg-white/95 backdrop-blur-md border-b border-purple-100 shadow-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo con animación al hover -->
                <a href="/index.php" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 bg-accent-400 text-brand-900 rounded-2xl flex items-center justify-center shadow-md group-hover:rotate-12 transition-transform duration-300">
                        <i class="fa-solid fa-paw text-2xl text-brand-900"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-black text-brand-900 tracking-tight">TuHuella<span class="text-brand-700">Vet</span></span>
                        <span class="block text-[9px] tracking-widest uppercase font-black text-brand-900/70 -mt-1">Clínica Veterinaria</span>
                    </div>
                </a>

                <!-- Navegación Desktop con Íconos -->
                <nav class="hidden md:flex items-center gap-7 font-extrabold text-brand-900 text-sm">
                    <a href="/index.php" class="flex items-center gap-2 hover:text-brand-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent-400 hover:after:w-full after:transition-all">
                        <i class="fa-solid fa-house text-xs text-brand-700"></i> Inicio
                    </a>
                    <a href="/pages/servicios.php" class="flex items-center gap-2 hover:text-brand-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent-400 hover:after:w-full after:transition-all">
                        <i class="fa-solid fa-stethoscope text-xs text-brand-700"></i> Servicios
                    </a>
                    <a href="/pages/nosotros.php" class="flex items-center gap-2 hover:text-brand-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent-400 hover:after:w-full after:transition-all">
                        <i class="fa-solid fa-heart-pulse text-xs text-brand-700"></i> Nosotros
                    </a>
                    <a href="/pages/contacto.php" class="flex items-center gap-2 hover:text-brand-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-accent-400 hover:after:w-full after:transition-all">
                        <i class="fa-solid fa-envelope text-xs text-brand-700"></i> Contacto
                    </a>
                </nav>

                <!-- Botón CTA Desktop -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="https://wa.me/593983899798" target="_blank" class="bg-gradient-to-r from-accent-400 to-accent-300 hover:from-accent-300 hover:to-accent-400 text-brand-900 font-black px-5 py-2.5 rounded-2xl shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 flex items-center gap-2 text-xs uppercase tracking-wide border border-accent-500/20">
                        <i class="fa-solid fa-calendar-check text-sm text-brand-900"></i>
                        Agendar Cita
                    </a>
                </div>

                <!-- Botón Hamburguesa Móvil -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" aria-label="Abrir menú" class="text-brand-900 p-2 rounded-xl focus:outline-none hover:bg-purple-50 transition-colors">
                        <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Desplegable Móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/98 border-b border-purple-100 px-4 pt-3 pb-6 space-y-2 shadow-lg">
            <a href="/index.php" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-brand-900 hover:bg-purple-50 transition-colors">
                <i class="fa-solid fa-house text-brand-700 w-5"></i> Inicio
            </a>
            <a href="/pages/servicios.php" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-brand-900 hover:bg-purple-50 transition-colors">
                <i class="fa-solid fa-stethoscope text-brand-700 w-5"></i> Servicios
            </a>
            <a href="/pages/nosotros.php" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-brand-900 hover:bg-purple-50 transition-colors">
                <i class="fa-solid fa-heart-pulse text-brand-700 w-5"></i> Nosotros
            </a>
            <a href="/pages/contacto.php" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-brand-900 hover:bg-purple-50 transition-colors">
                <i class="fa-solid fa-envelope text-brand-700 w-5"></i> Contacto
            </a>
            <a href="https://maps.app.goo.gl/yUKRMHe25TkGUy7N8" target="_blank" class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-bold text-slate-600 hover:bg-purple-50 transition-colors text-xs">
                <i class="fa-solid fa-map-location-dot text-accent-600 w-5"></i> Ver Ubicación en Google Maps
            </a>
            
            <div class="pt-3">
                <a href="https://wa.me/593983899798" target="_blank" class="w-full text-center bg-accent-400 hover:bg-accent-300 text-brand-900 font-black py-3 rounded-2xl flex items-center justify-center gap-2 shadow-md text-sm">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    AGENDAR CITA: 098 389 9798
                </a>
            </div>
        </div>
    </header>
</div>

<script>
    // Control del Menú Móvil
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-xmark');
        });
    }
</script>