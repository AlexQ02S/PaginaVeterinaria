<?php
require_once __DIR__ . '/../../backend/config/db_citas.php'; // Asegúrate de que apunte a tu archivo de conexión PDO
require_once __DIR__ . '/../../backend/config/email.php';

header('Content-Type: application/json; charset=utf-8');
$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
    exit;
}

// Obtener los datos enviados en formato JSON
$data = json_decode(file_get_contents('php://input'), true);

// Limpiar y validar datos
$nombre = trim($data['nombre'] ?? '');
$telefono = trim($data['telefono'] ?? '');
$email = trim($data['email'] ?? '');
$mensaje = trim($data['mensaje'] ?? '');

if (empty($nombre) || empty($telefono) || empty($mensaje)) {
    http_response_code(400);
    echo json_encode(['error' => 'Por favor completa los campos obligatorios.']);
    exit;
}

try {
    $stmt = $pdo->prepare("INSERT INTO mensajes_contacto (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $nombre, 
        $telefono, 
        !empty($email) ? $email : null, 
        $mensaje
    ]);
    
    $mensajeId = $pdo->lastInsertId();

    enviarCorreoNotificacion(
        'Nuevo mensaje de contacto',
        emailPlantilla('Formulario de contacto', 'Nuevo mensaje recibido', 'Una persona se ha puesto en contacto con TuHuellaVet.', [
            'Nombre' => $nombre,
            'Teléfono' => $telefono,
            'Correo' => $email ?: 'No indicado',
            'Referencia' => '#' . $mensajeId
        ], $mensaje)
    );

    echo json_encode([
        'success' => true,
        'mensaje' => '¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.',
        'id' => $mensajeId
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error en el servidor al guardar el mensaje.']);
}