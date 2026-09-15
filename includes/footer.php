<!-- FOOTER MODERNO TUHUELLAVET -->
<footer class="w-full bg-brand-900 text-purple-100 border-t border-brand-800 pt-16 pb-8 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Contenido Principal en Grilla -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-brand-800">
            
            <!-- Columna 1: Brand & Descripción -->
            <div class="space-y-4">
                <a href="<?= BASE_URL ?>/index.php" class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-accent-400 text-brand-900 rounded-full flex items-center justify-center shadow-md">
                        <i class="fa-solid fa-paw text-xl text-brand-900"></i>
                    </div>
                    <div>
                        <span class="text-xl font-black text-white tracking-tight">TuHuella<span class="text-accent-400">Vet</span></span>
                        <span class="block text-[9px] tracking-widest uppercase font-bold text-purple-300 -mt-1">Clínica Veterinaria</span>
                    </div>
                </a>
                <p class="text-sm text-purple-200/80 leading-relaxed">
                    Atención médica integral, diagnósticos precisos y el amor que tu mascota merece. Una mascota protegida es una familia tranquila.
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <a href="#" class="w-9 h-9 rounded-xl bg-brand-800 hover:bg-accent-400 hover:text-brand-900 flex items-center justify-center transition-all text-accent-400 shadow-sm">
                        <i class="fa-brands fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-xl bg-brand-800 hover:bg-accent-400 hover:text-brand-900 flex items-center justify-center transition-all text-accent-400 shadow-sm">
                        <i class="fa-brands fa-instagram text-sm"></i>
                    </a>
                    <a href="https://wa.me/593983899798?text=Hola,%20¿en%20qué%20podemos%20ayudarte?" target="_blank" class="w-9 h-9 rounded-xl bg-brand-800 hover:bg-accent-400 hover:text-brand-900 flex items-center justify-center transition-all text-accent-400 shadow-sm">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div>
                <h4 class="text-white font-black text-base uppercase tracking-wider mb-4 border-b border-brand-800 pb-2 inline-block">Navegación</h4>
                <ul class="space-y-2.5 text-sm font-medium">
                    <li><a href="<?= BASE_URL ?>/index.php" class="hover:text-accent-400 transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-accent-400"></i> Inicio</a></li>
                    <li><a href="<?= BASE_URL ?>/pages/servicios.php" class="hover:text-accent-400 transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-accent-400"></i> Servicios</a></li>
                    <li><a href="<?= BASE_URL ?>/pages/nosotros.php" class="hover:text-accent-400 transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-accent-400"></i> Nosotros</a></li>
                    <li><a href="<?= BASE_URL ?>/pages/contacto.php" class="hover:text-accent-400 transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs text-accent-400"></i> Contacto</a></li>
                </ul>
            </div>

            <!-- Columna 3: Contacto & Atención -->
            <div>
                <h4 class="text-white font-black text-base uppercase tracking-wider mb-4 border-b border-brand-800 pb-2 inline-block">Contacto Directo</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-phone text-accent-400 mt-1"></i>
                        <span>098 389 9798</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-brands fa-whatsapp text-accent-400 mt-1 text-base"></i>
                        <a href="https://wa.me/593983899798?text=Hola,%20¿en%20qué%20podemos%20ayudarte?" target="_blank" class="hover:text-accent-400 transition-colors">Agendar por WhatsApp</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-clock text-accent-400 mt-1"></i>
                        <span>Lun - Sáb: 08:00 - 15:00</span>
                    </li>
                </ul>
            </div>

            <!-- Columna 4: Ubicación con Enlace a Google Maps -->
            <div>
                <h4 class="text-white font-black text-base uppercase tracking-wider mb-4 border-b border-brand-800 pb-2 inline-block">Ubicación</h4>
                <div class="flex items-start gap-3 text-sm mb-4">
                    <i class="fa-solid fa-location-dot text-accent-400 mt-1"></i>
                    <span>Valle de los chillos - Playa Chica</span>
                </div>
                
                <!-- Botón directo a Google Maps -->
                <a href="https://maps.app.goo.gl/yUKRMHe25TkGUy7N8" target="_blank" class="flex items-center justify-center gap-2 bg-brand-800 border border-brand-700 hover:border-accent-400 hover:text-accent-400 p-3 rounded-2xl text-xs font-bold transition-all text-white shadow-sm mb-3 group">
                    <i class="fa-solid fa-map-location-dot text-accent-400 text-sm group-hover:scale-110 transition-transform"></i>
                    Ver Ubicación en Google Maps
                </a>
                
                <!-- BOTÓN FLOTANTE DE WHATSAPP CON TEXTO ARRIBA Y LATIDO -->
               <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-2">
        
                 <!-- Etiqueta de texto flotante arriba del icono -->
               <div class="bg-white text-brand-900 font-bold text-xs px-3 py-1.5 rounded-xl shadow-lg border border-purple-100 animate-bounce whitespace-nowrap">
               ¡Escríbenos aquí! 🐾
               </div>

                 <!-- Botón principal con el efecto de latido -->
                <a href="https://wa.me/593983899798?text=Hola,%20¿en%20qué%20podemos%20ayudarte?" 
                  target="_blank" 
                  class="bg-emerald-500 hover:bg-emerald-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 hover:scale-110 animate-palpitar"
                  title="Escríbenos por WhatsApp">
                 <i class="fa-brands fa-whatsapp text-3xl"></i>
                </a>
    </div>               
            </div>

        </div>

        <!-- Barra Inferior de Copyright centrada -->
        <div class="pt-8 flex justify-center items-center text-xs text-purple-300/80 font-medium text-center">
            <p>&copy; <?php echo date('Y'); ?> <span class="text-white font-bold">TuHuellaVet</span>. Todos los derechos reservados.</p>
        </div>

    </div>


</footer>

<!-- Script del Menú Móvil -->
<script>
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
</body>
</html>