(function () {
    const baseUrl = window.BASE_URL || '';
    const API = baseUrl + '/backend/controllers/api_citas.php';
    const ZONA_HORARIA = 'America/Guayaquil';
    let currentStep = 1;
    let seleccion = { tipo_cita_id: null, veterinario_id: null, tipo_nombre: '', vet_nombre: '' };

    // --- 1. CARGAR TIPOS DE CITA EN PASO 1 ---
    fetch(API + '?action=tipos')
        .then(r => r.json())
        .then(data => {
            const cont = document.getElementById('tipos-list');
            cont.innerHTML = '';
            data.forEach(t => {
                const card = document.createElement('button');
                card.type = 'button';
                card.className = 'tipo-card text-left bg-white border-2 border-purple-100 hover:border-brand-500 rounded-2xl p-4 flex items-center gap-3 transition-all shadow-sm';
                card.dataset.id = t.id;
                card.dataset.nombre = t.nombre;
                card.innerHTML = `
                    <div class="w-12 h-12 rounded-xl bg-accent-300 text-brand-900 flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid ${t.icono || 'fa-paw'}"></i>
                    </div>
                    <div>
                        <p class="font-bold text-brand-900">${t.nombre}</p>
                        <p class="text-xs text-slate-500">${t.duracion_estimada_min} min aprox.</p>
                    </div>`;
                cont.appendChild(card);
                card.addEventListener('click', () => seleccionarTipo(card));
            });
        })
        .catch(() => mostrarError('No se pudieron cargar los tipos de atención.'));

    // --- 2. SELECCIONAR TIPO Y CARGAR VETERINARIOS DISPONIBLES EN PASO 2 ---
    function seleccionarTipo(card) {
        document.querySelectorAll('.tipo-card').forEach(c => { 
            c.classList.remove('border-brand-500', 'bg-brand-50', 'ring-2', 'ring-brand-500'); 
            c.classList.add('border-purple-100'); 
        });
        card.classList.remove('border-purple-100'); 
        card.classList.add('border-brand-500', 'bg-brand-50', 'ring-2', 'ring-brand-500');

        seleccion.tipo_cita_id = card.dataset.id;
        seleccion.tipo_nombre = card.dataset.nombre;

        // Resetear selección de veterinario si cambia de servicio
        seleccion.veterinario_id = null;
        seleccion.vet_nombre = '';
        document.getElementById('hora').value = '';
        document.querySelector('[data-next="3"]').disabled = true;

        // Cargar solo los veterinarios que atienden este tipo de cita
        cargarVeterinariosPorTipo(card.dataset.id);

        document.querySelector('[data-next="2"]').disabled = false;
        actualizarResumenLateral();
    }

    function cargarVeterinariosPorTipo(tipoId) {
        const cont = document.getElementById('vets-list');
        cont.innerHTML = '<div class="col-span-2 text-center text-slate-400 py-4"><i class="fa-solid fa-spinner fa-spin"></i> Cargando especialistas...</div>';

        fetch(API + '?action=veterinarios&tipo_cita_id=' + encodeURIComponent(tipoId))
            .then(r => r.json())
            .then(data => {
                cont.innerHTML = '';
                if (!Array.isArray(data) || data.length === 0) {
                    cont.innerHTML = '<p class="col-span-2 text-center text-rose-500 font-bold py-4">No hay especialistas disponibles para este servicio.</p>';
                    return;
                }

                data.forEach(v => {
                    const card = document.createElement('button');
                    card.type = 'button';
                    card.className = 'vet-card text-left bg-white border-2 border-purple-100 hover:border-brand-500 rounded-2xl p-4 flex items-center gap-3 transition-all shadow-sm';
                    card.dataset.id = v.id;
                    card.dataset.nombre = v.nombre;
                    card.innerHTML = `
                        <div class="w-12 h-12 rounded-full bg-accent-100 text-brand-900 flex items-center justify-center text-xl shrink-0 font-bold border border-accent-300">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-900">${v.nombre}</p>
                            <p class="text-xs text-emerald-600 font-semibold"><i class="fa-solid fa-circle-check"></i> Disponible</p>
                        </div>`;
                    cont.appendChild(card);
                    card.addEventListener('click', () => seleccionarVet(card));
                });
            })
            .catch(() => mostrarError('No se pudieron cargar los veterinarios para esta especialidad.'));
    }

    function seleccionarVet(card) {
        document.querySelectorAll('.vet-card').forEach(c => { 
            c.classList.remove('border-brand-500', 'bg-brand-50', 'ring-2', 'ring-brand-500'); 
            c.classList.add('border-purple-100'); 
        });
        card.classList.remove('border-purple-100'); 
        card.classList.add('border-brand-500', 'bg-brand-50', 'ring-2', 'ring-brand-500');

        seleccion.veterinario_id = card.dataset.id;
        seleccion.vet_nombre = card.dataset.nombre;

        document.querySelector('[data-next="3"]').disabled = false;
        actualizarResumenLateral();

        if (document.getElementById('fecha').value) {
            cargarHorariosDisponibles();
        }
    }

    // --- 3. CONTROL DE FECHA Y HORARIOS (PASO 3) ---
    const inputFecha = document.getElementById('fecha');
    function onFechaCambiada() {
        const ahora = ahoraEnZonaHoraria();
        if (inputFecha.value && inputFecha.value < ahora.fecha) {
            mostrarError('No puedes seleccionar una fecha anterior a hoy.');
            inputFecha.value = ahora.fecha;
        } else {
            ocultarError();
        }
        document.getElementById('hora').value = '';
        actualizarResumenLateral();
        cargarHorariosDisponibles();
    }
    inputFecha.addEventListener('change', onFechaCambiada);
    inputFecha.addEventListener('input', onFechaCambiada);

    function actualizarResumenLateral() {
        const f = document.getElementById('fecha').value;
        const h = document.getElementById('hora').value;
        const fechaLegible = f ? new Date(f + 'T00:00:00').toLocaleDateString('es-EC', { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' }) : '—';

        document.getElementById('sum-servicio').textContent = seleccion.tipo_nombre || '—';
        document.getElementById('sum-veterinario').textContent = seleccion.vet_nombre || '—';
        document.getElementById('sum-fecha').textContent = fechaLegible;
        document.getElementById('sum-hora').textContent = h || '—';
    }

    // --- 4. NAVEGACIÓN Y PROGRESO ---
    document.querySelectorAll('.next-btn').forEach(btn => btn.addEventListener('click', () => {
        if (currentStep === 3) {
            const fecha = document.getElementById('fecha').value;
            const hora = document.getElementById('hora').value;
            if (!fecha || !hora) {
                mostrarError('Selecciona fecha y hora para continuar.');
                return;
            }
            if (!fechaHoraValida(fecha, hora)) {
                mostrarError('El horario o la fecha seleccionada ya ha pasado en el reloj. Por favor selecciona un turno disponible.');
                return;
            }
        }
        goToStep(parseInt(btn.dataset.next));
    }));

    document.querySelectorAll('.prev-btn').forEach(btn => btn.addEventListener('click', () => goToStep(parseInt(btn.dataset.prev))));

    function goToStep(n) {
        document.querySelectorAll('.step-panel').forEach(p => p.classList.add('hidden'));
        document.getElementById('step-' + n).classList.remove('hidden');
        currentStep = n;
        actualizarProgreso(n);
        ocultarError();
        if (n === 3) {
            cargarHorariosDisponibles();
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function actualizarProgreso(n) {
        const dots = document.querySelectorAll('.step-dot');
        dots.forEach((d, i) => {
            d.classList.toggle('bg-brand-600', i < n);
            d.classList.toggle('bg-gray-300', i >= n);
            d.classList.toggle('shadow-md', i < n);
        });
        const spans = document.querySelectorAll('#progress-bar .step-line');
        spans.forEach((s, i) => {
            const realizado = n > i + 1;
            s.classList.toggle('bg-brand-500', realizado);
            s.classList.toggle('bg-gray-300', !realizado);
        });
    }

    function horaValida(hora) {
        return /^([01]\d|2[0-3]):(00|30)$/.test(hora) && hora >= '08:00' && hora <= '16:30';
    }

    // Sincronización con el reloj del servidor / zona horaria del negocio
    let serverOffsetMs = 0;
    if (window.SERVER_NOW) {
        const serverDate = new Date(window.SERVER_NOW);
        if (!isNaN(serverDate.getTime())) {
            serverOffsetMs = serverDate.getTime() - Date.now();
        }
    }

    function getNowLocal() {
        return new Date(Date.now() + serverOffsetMs);
    }

    function ahoraEnZonaHoraria() {
        const d = getNowLocal();
        const partes = new Intl.DateTimeFormat('en-US', {
            timeZone: ZONA_HORARIA,
            year: 'numeric', month: '2-digit', day: '2-digit',
            hour: '2-digit', minute: '2-digit', second: '2-digit', hourCycle: 'h23'
        }).formatToParts(d).reduce((resultado, parte) => {
            resultado[parte.type] = parte.value;
            return resultado;
        }, {});

        return {
            fecha: `${partes.year}-${partes.month}-${partes.day}`,
            horaStr: `${partes.hour}:${partes.minute}`,
            horaCompleta: `${partes.hour}:${partes.minute}:${partes.second}`,
            minutos: Number(partes.hour) * 60 + Number(partes.minute)
        };
    }

    function actualizarRelojEnVivo() {
        const el = document.getElementById('reloj-vivo');
        if (!el) return;
        const ahora = ahoraEnZonaHoraria();
        el.textContent = ahora.horaCompleta;
    }
    setInterval(actualizarRelojEnVivo, 1000);
    actualizarRelojEnVivo();

    function fechaHoraValida(fecha, hora) {
        if (!horaValida(hora)) return false;

        const ahora = ahoraEnZonaHoraria();
        if (fecha < ahora.fecha) return false;
        if (fecha === ahora.fecha) {
            const [horas, minutos] = hora.split(':').map(Number);
            return (horas * 60 + minutos) > ahora.minutos;
        }
        return true;
    }

    function generarHorarios() {
        const slots = [];
        for (let hora = 8; hora <= 16; hora++) {
            const h = String(hora).padStart(2, '0');
            slots.push(`${h}:00`);
            slots.push(`${h}:30`);
        }
        return slots;
    }

    function renderHorarios(ocupadas = new Set()) {
        const cont = document.getElementById('horarios-list');
        const aviso = document.getElementById('horarios-aviso');
        const contador = document.getElementById('horarios-contador');
        const slots = generarHorarios();
        const fecha = document.getElementById('fecha').value;
        const ahora = ahoraEnZonaHoraria();
        const horaSeleccionada = document.getElementById('hora').value;

        cont.innerHTML = '';
        if (aviso) {
            aviso.classList.add('hidden');
            aviso.className = 'hidden mb-3 p-3 rounded-2xl text-xs font-bold';
            aviso.textContent = '';
        }

        const esHoy = fecha && (fecha === ahora.fecha);
        const esPasada = fecha && (fecha < ahora.fecha);
        let disponiblesCount = 0;

        if (fecha) {
            const diaSemana = new Date(fecha + 'T12:00:00').getDay();
            if (diaSemana === 0 && aviso) {
                aviso.className = 'mb-3 p-3 rounded-2xl text-xs font-bold bg-amber-50 border border-amber-200 text-amber-800 flex items-center gap-2';
                aviso.innerHTML = '<i class="fa-solid fa-triangle-exclamation text-amber-600"></i> Atención: Los domingos la clínica atiende emergencias bajo previa coordinación. Para citas regulares recomendamos de lunes a sábado.';
                aviso.classList.remove('hidden');
            }
        }

        if (esPasada && aviso) {
            aviso.className = 'mb-3 p-3 rounded-2xl text-xs font-bold bg-rose-50 border border-rose-200 text-rose-700 flex items-center gap-2';
            aviso.innerHTML = '<i class="fa-solid fa-circle-xmark text-rose-600"></i> La fecha seleccionada ya pasó. Elige una fecha válida.';
            aviso.classList.remove('hidden');
        }

        slots.forEach(hora => {
            const btn = document.createElement('button');
            btn.type = 'button';
            const ocupado = ocupadas.has(hora);
            const vencido = esHoy ? !fechaHoraValida(fecha, hora) : esPasada;
            const noDisponible = ocupado || vencido;

            let estadoClass = '';
            let labelExtra = '';

            if (vencido) {
                estadoClass = 'border-rose-200 bg-rose-50/70 text-slate-400 cursor-not-allowed opacity-60 line-through';
                btn.title = 'Este horario ya pasó según el reloj actual (' + ahora.horaStr + ')';
                labelExtra = '<span class="block text-[9px] font-semibold text-rose-500 no-underline">Pasó</span>';
            } else if (ocupado) {
                estadoClass = 'border-slate-200 bg-slate-100 text-slate-400 cursor-not-allowed opacity-60';
                btn.title = 'Horario reservado por otro cliente';
                labelExtra = '<span class="block text-[9px] font-semibold text-slate-500">Reservado</span>';
            } else {
                disponiblesCount++;
                const isSelected = (hora === horaSeleccionada);
                if (isSelected) {
                    estadoClass = 'border-brand-500 bg-brand-600 text-white shadow-md transform scale-[1.02]';
                    labelExtra = '<span class="block text-[9px] font-bold text-accent-300">Elegido</span>';
                } else {
                    estadoClass = 'border-purple-200 bg-white text-brand-900 hover:border-brand-500 hover:bg-brand-50 hover:shadow-sm';
                    labelExtra = '<span class="block text-[9px] font-medium text-emerald-600">Libre</span>';
                }
            }

            btn.className = `hora-slot rounded-2xl border px-2 py-2 text-xs sm:text-sm font-bold transition-all flex flex-col items-center justify-center ${estadoClass}`;
            btn.innerHTML = `<span class="tracking-tight">${hora}</span>${labelExtra}`;
            btn.dataset.hora = hora;
            btn.disabled = noDisponible;

            if (!noDisponible) {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.hora-slot').forEach(b => {
                        if (!b.disabled) {
                            b.className = 'hora-slot rounded-2xl border px-2 py-2 text-xs sm:text-sm font-bold transition-all flex flex-col items-center justify-center border-purple-200 bg-white text-brand-900 hover:border-brand-500 hover:bg-brand-50';
                            const horaTxt = b.dataset.hora;
                            b.innerHTML = `<span class="tracking-tight">${horaTxt}</span><span class="block text-[9px] font-medium text-emerald-600">Libre</span>`;
                        }
                    });
                    btn.className = 'hora-slot rounded-2xl border px-2 py-2 text-xs sm:text-sm font-bold transition-all flex flex-col items-center justify-center border-brand-500 bg-brand-600 text-white shadow-md transform scale-[1.02]';
                    btn.innerHTML = `<span class="tracking-tight">${hora}</span><span class="block text-[9px] font-bold text-accent-300">Elegido</span>`;
                    document.getElementById('hora').value = hora;
                    ocultarError();
                    actualizarResumenLateral();
                });
            }

            cont.appendChild(btn);
        });

        if (contador) {
            contador.textContent = `${disponiblesCount} de ${slots.length} turnos libres`;
        }

        if (esHoy && disponiblesCount === 0 && aviso) {
            aviso.className = 'mb-3 p-3.5 rounded-2xl text-xs font-bold bg-amber-50 border border-amber-200 text-amber-800 flex items-start gap-2.5';
            aviso.innerHTML = '<i class="fa-solid fa-clock-rotate-left text-amber-600 mt-0.5 text-sm"></i> <div><span>Ya no hay horarios disponibles para hoy debido a la hora actual.</span><br><span class="font-normal text-slate-600">Por favor selecciona la fecha de mañana o un día posterior.</span></div>';
            aviso.classList.remove('hidden');
        }

        if (horaSeleccionada && esHoy && !fechaHoraValida(fecha, horaSeleccionada)) {
            document.getElementById('hora').value = '';
            actualizarResumenLateral();
            mostrarError('El turno de las ' + horaSeleccionada + ' acaba de expirar en el reloj. Por favor selecciona otro.');
        }
    }

    function cargarHorariosDisponibles() {
        const fecha = document.getElementById('fecha').value;
        if (!fecha || !seleccion.veterinario_id) {
            renderHorarios();
            return;
        }

        fetch(API + '?action=ocupados&veterinario_id=' + encodeURIComponent(seleccion.veterinario_id) + '&fecha=' + encodeURIComponent(fecha))
            .then(r => r.json())
            .then(data => {
                let ocupadosArr = [];
                if (Array.isArray(data)) {
                    ocupadosArr = data.map(item => item.hora || item);
                } else if (data && data.ocupados) {
                    ocupadosArr = data.ocupados;
                    if (data.servidor_timestamp) {
                        serverOffsetMs = (data.servidor_timestamp * 1000) - Date.now();
                    }
                }
                const ocupadas = new Set(ocupadosArr);
                renderHorarios(ocupadas);
            })
            .catch(() => renderHorarios());
    }

    const hoyISO = ahoraEnZonaHoraria().fecha;
    inputFecha.min = hoyISO;
    if (!inputFecha.value) {
        inputFecha.value = hoyISO;
    }

    renderHorarios();

    // Actualizar disponibilidad periódicamente cada 30s
    setInterval(() => {
        const fecha = document.getElementById('fecha').value;
        if (fecha && seleccion.veterinario_id) {
            cargarHorariosDisponibles();
        } else if (fecha) {
            renderHorarios();
        }
    }, 30000);

    // --- 5. ENVIAR FORMULARIO (PASO 4 -> PASO 5) ---
    document.getElementById('btn-confirmar').addEventListener('click', () => {
        const nombre = document.getElementById('nombre').value.trim();
        const telefono = document.getElementById('telefono').value.trim();
        if (!nombre) return mostrarError('Escribe tu nombre.');
        if (!telefono) return mostrarError('Escribe tu teléfono.');
        ocultarError();

        const hora = document.getElementById('hora').value;
        const fecha = document.getElementById('fecha').value;
        if (!fechaHoraValida(fecha, hora)) {
            return mostrarError('El horario o la fecha seleccionada ya ha transcurrido. Por favor regresa al paso 3 y elige un turno disponible.');
        }

        const payload = {
            nombre,
            telefono,
            email: document.getElementById('email').value.trim() || null,
            mascota: document.getElementById('mascota').value.trim(),
            observaciones: document.getElementById('observaciones').value.trim(),
            tipo_cita_id: seleccion.tipo_cita_id,
            veterinario_id: seleccion.veterinario_id,
            fecha_hora: fecha + ' ' + hora + ':00'
        };

        const btn = document.getElementById('btn-confirmar');
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Reservando...';

        fetch(API + '?action=crear', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
        })
        .then(r => r.json().then(d => ({ ok: r.ok, d })))
        .then(({ ok, d }) => {
            if (!ok) { 
                btn.disabled = false; 
                btn.innerHTML = '<i class="fa-solid fa-paw"></i> Confirmar Cita'; 
                return mostrarError(d.error || 'Error al agendar.'); 
            }
            document.getElementById('turno-ref').textContent = 'Número de referencia: #' + d.turno_id;
            goToStep(5);
        })
        .catch(() => { 
            btn.disabled = false; 
            btn.innerHTML = '<i class="fa-solid fa-paw"></i> Confirmar Cita'; 
            mostrarError('Error de conexión. Intenta de nuevo.'); 
        });
    });

    function mostrarError(msg) {
        const el = document.getElementById('global-error');
        el.textContent = msg;
        el.classList.remove('hidden');
    }
    function ocultarError() { document.getElementById('global-error').classList.add('hidden'); }

    actualizarProgreso(1);
    actualizarResumenLateral();
})();