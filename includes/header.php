<!DOCTYPE html>
<html lang="es" class="w-full m-0 p-0 overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuHuellaVet - Clínica Veterinaria</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><circle cx='256' cy='256' r='240' fill='%23fbbf24'/><path fill='%236b21a8' d='M226.5 132.9c14.3 42.9-.3 86.2-32.6 96.6s-68.7-18.9-83-61.8s.3-86.2 32.6-96.6s68.7 18.9 83 61.8zM415.5 132.9c14.3 42.9-.3 86.2-32.6 96.6s-68.7-18.9-83-61.8s.3-86.2 32.6-96.6s68.7 18.9 83 61.8zM245.5 276c-44.2 0-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80s-35.8-80-80-80zm209.5 24c-35.3 0-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64s-28.7-64-64-64zM56.5 300c-35.3 0-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64s-28.7-64-64-64z'/></svg>">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: {
                50: '#faf5ff',
                100: '#f3e8ff',
                500: '#9333ea',
                600: '#a855f7',
                700: '#7e22ce',
                800: '#6b21a8',
                900: '#4c1d95',
              },
              accent: {
                300: '#fde047', 
                400: '#facc15',
                500: '#eab308',
                600: '#ca8a04',
              }
            },
            boxShadow: {
              glow: '0 8px 30px rgba(76, 29, 149, 0.2)',
              soft: '0 12px 30px rgba(76, 29, 149, 0.08)'
            }
          }
        }
      }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet">
    
</head>
<body class="w-full m-0 p-0 text-slate-800 antialiased min-h-screen flex flex-col">

<!-- NAVEGACIÓN Y MENÚ -->
<div class="w-full sticky top-0 left-0 right-0 z-50">
    <!-- Topbar -->
    <div class="w-full bg-brand-900 text-purple-100 text-xs py-2.5 px-4 border-b border-brand-800">
        <div class="w-full flex flex-col md:flex-row md:justify-between items-center gap-2">
            <div class="flex items-center gap-6 font-medium">
                <span class="flex items-center gap-2">
                    <i class="fa-solid fa-clock text-accent-400"></i>
                    Lun - Sáb: 09:00 - 18:00
                </span>
               <span class="flex items-center gap-2">
                   <i class="fa-solid fa-envelope text-accent-400"></i>
                    <a href="mailto:veterinariatuhuella@gmail.com" class="hover:underline transition-all">
                       veterinariatuhuella@gmail.com
                    </a>
               </span>

                <span class="hidden lg:flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-accent-400"></i>
                    Av. General Rumiñahui e Isla Pinta, Valle de los Chillos 
                </span>
            </div>
            <div class="flex items-center gap-4 font-extrabold">
                <a href="https://wa.me/593983899798" target="_blank" class="text-accent-400 hover:text-accent-300 flex items-center gap-2 transition-colors">
                    <i class="fa-brands fa-whatsapp text-sm animate-pulse"></i>
                    AGENDA TU CITA: 098 389 9798
                </a>
            </div>
        </div>
    </div>

    <!-- Menú Principal -->
    <header class="w-full bg-white/90 backdrop-blur-md border-b border-purple-100 shadow-soft">
        <div class="w-full pl-1 sm:pl-3 lg:pl-5 pr-4 sm:pr-6 lg:pr-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="<?= BASE_URL ?>/index.php" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 bg-accent-400 text-brand-900 rounded-full flex items-center justify-center shadow-md group-hover:scale-105 transition-all">
                        <i class="fa-solid fa-paw text-2xl text-brand-900"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-black text-brand-900 tracking-tight">TuHuella<span class="text-brand-700">Vet</span></span>
                        <span class="block text-[10px] tracking-widest uppercase font-black text-brand-900/70 -mt-1">Clínica Veterinaria</span>
                    </div>
                </a>

                <!-- Navegación Desktop -->
                <nav class="hidden md:flex items-center gap-8 font-extrabold text-brand-900 text-sm">
                    <a href="<?= BASE_URL ?>/index.php" class="hover:text-brand-700 transition-colors py-1">Inicio</a>
                    <a href="<?= BASE_URL ?>/pages/servicios.php" class="hover:text-brand-700 transition-colors py-1">Servicios</a>
                    <a href="<?= BASE_URL ?>/pages/nosotros.php" class="hover:text-brand-700 transition-colors py-1">Nosotros</a>
                    <a href="<?= BASE_URL ?>/pages/contacto.php" class="hover:text-brand-700 transition-colors py-1">Contacto</a>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-map-location-dot text-accent-600"></i>
                        <a href="https://maps.app.goo.gl/yUKRMHe25TkGUy7N8" target="_blank" class="hover:text-brand-700 transition-colors underline">
                            Ver Ubicación 
                        </a>
                    </div>
                </nav>

                <!-- Botón Desktop -->
                <div class="hidden md:flex items-center">
                   <a href="<?= BASE_URL ?>/pages/citas.php" class="bg-accent-400 hover:bg-accent-300 text-brand-900 font-black px-6 py-2.5 rounded-2xl shadow-md transition-all text-sm flex items-center gap-2">
                        <i class="fa-solid fa-calendar-check animate-bounce"></i>
                        AGENDA TU CITA
                   </a>
                </div>

                <!-- Botón Menú Hamburguesa (Móvil) -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="text-brand-900 p-2 rounded-xl focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Desplegable Móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-purple-100 px-4 pt-3 pb-6 space-y-3 shadow-lg">
            <a href="<?= BASE_URL ?>/index.php" class="block px-3 py-2 rounded-xl font-black text-brand-900 hover:bg-purple-50">Inicio</a>
            <a href="<?= BASE_URL ?>/pages/servicios.php" class="block px-3 py-2 rounded-xl font-black text-brand-900 hover:bg-purple-50">Servicios</a>
            <a href="<?= BASE_URL ?>/pages/nosotros.php" class="block px-3 py-2 rounded-xl font-black text-brand-900 hover:bg-purple-50">Nosotros</a>
            <a href="<?= BASE_URL ?>/pages/contacto.php" class="block px-3 py-2 rounded-xl font-black text-brand-900 hover:bg-purple-50">Contacto</a>
            <a href="https://maps.app.goo.gl/yUKRMHe25TkGUy7N8" target="_blank" class="px-3 py-2 rounded-xl font-black text-brand-900 hover:bg-purple-50 flex items-center gap-2">
                <i class="fa-solid fa-map-location-dot text-accent-600"></i> Ver Ubicación
            </a>
            
            <!-- Botón de agendar cita adaptado para celulares -->
            <div class="pt-2">
                <a href="<?= BASE_URL ?>/pages/citas.php" class="w-full bg-accent-400 hover:bg-accent-300 text-brand-900 font-black px-6 py-3 rounded-2xl shadow-md transition-all text-sm flex items-center justify-center gap-2">
                    <i class="fa-solid fa-calendar-check"></i>
                    AGENDA TU CITA
                </a>
            </div>
        </div>
    </header>
</div>

</body>
</html>