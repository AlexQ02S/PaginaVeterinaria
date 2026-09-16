document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const errDiv = document.getElementById('form-error');
    const succDiv = document.getElementById('form-success');
    const btn = document.getElementById('btn-enviar');

    errDiv.classList.add('hidden');
    succDiv.classList.add('hidden');

    const payload = {
        nombre: document.getElementById('c-nombre').value.trim(),
        telefono: document.getElementById('c-telefono').value.trim(),
        email: document.getElementById('c-email').value.trim(),
        mensaje: document.getElementById('c-mensaje').value.trim()
    };

    btn.disabled = true;
    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Enviando...';

    fetch(BASE_URL + '/api/api_mensaje.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
    })
    .then(r => r.json().then(d => ({ ok: r.ok, d })))
    .then(({ ok, d }) => {
        btn.disabled = false;
        btn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Enviar Mensaje';
        
        if (!ok) {
            errDiv.textContent = d.error || 'Ocurrió un error al enviar.';
            errDiv.classList.remove('hidden');
            return;
        }

        succDiv.textContent = d.mensaje;
        succDiv.classList.remove('hidden');
        document.getElementById('contact-form').reset();
    })
    .catch(() => {
        btn.disabled = false;
        btn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Enviar Mensaje';
        errDiv.textContent = 'Error de conexión. Inténtalo de nuevo.';
        errDiv.classList.remove('hidden');
    });
});