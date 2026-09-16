
<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../backend/config/db_citas.php';
require_once __DIR__ . '/../../backend/config/email.php';

header('Content-Type: application/json; charset=utf-8');
$method = $_SERVER['REQUEST_METHOD'];
$action = isset($_GET['action']) ? $_GET['action'] : '';

function columnExists($pdo, $table, $column) {
    $safeTable = preg_replace('/[^a-zA-Z0-9_]/', '', $table);
    $safeColumn = preg_replace('/[^a-zA-Z0-9_]/', '', $column);

    $stmt = $pdo->query(
        "SELECT COUNT(*) AS total FROM INFORMATION_SCHEMA.COLUMNS " .
        "WHERE TABLE_SCHEMA = DATABASE() " .
        "AND TABLE_NAME = '{$safeTable}' " .
        "AND COLUMN_NAME = '{$safeColumn}'"
    );

    $row = $stmt->fetch();
    return (int)($row['total'] ?? 0) > 0;
}

try {
    switch ($action) {
        // GET: listar tipos de atención disponibles
        case 'tipos':
            $tieneIcono = columnExists($pdo, 'tipos_cita', 'icono');
            $query = $tieneIcono
                ? "SELECT id, nombre, icono, duracion_estimada_min FROM tipos_cita ORDER BY id"
                : "SELECT id, nombre, duracion_estimada_min FROM tipos_cita ORDER BY id";

            $stmt = $pdo->query($query);
            $tipos = $stmt->fetchAll();

            if (!$tieneIcono) {
                foreach ($tipos as &$tipo) {
                    $tipo['icono'] = 'fa-paw';
                }
                unset($tipo);
            }

            echo json_encode($tipos);
            break;

        // GET: listar veterinarios (filtrado opcional por tipo_cita_id)
        case 'veterinarios':
            $tipoCitaId = isset($_GET['tipo_cita_id']) ? (int)$_GET['tipo_cita_id'] : 0;

            if ($tipoCitaId > 0) {
                // Obtener solo veterinarios asociados al tipo de cita seleccionado
                $stmt = $pdo->prepare(
                    "SELECT v.id, v.nombre 
                     FROM veterinarios v
                     INNER JOIN veterinario_tipo_cita vtc ON v.id = vtc.veterinario_id
                     WHERE vtc.tipo_cita_id = ?
                     ORDER BY v.nombre"
                );
                $stmt->execute([$tipoCitaId]);
            } else {
                // Obtener todos los veterinarios
                $stmt = $pdo->query("SELECT id, nombre FROM veterinarios ORDER BY nombre");
            }

            echo json_encode($stmt->fetchAll());
            break;

        // GET: horarios ocupados por veterinario y fecha
        case 'ocupados':
            $veterinarioId = isset($_GET['veterinario_id']) ? (int)$_GET['veterinario_id'] : 0;
            $fecha = isset($_GET['fecha']) ? trim($_GET['fecha']) : '';

            if (!$veterinarioId || !$fecha) {
                http_response_code(400);
                echo json_encode(['error' => 'Faltan parámetros: veterinario_id y fecha']);
                break;
            }

            $stmt = $pdo->prepare("SELECT TIME_FORMAT(fecha_hora, '%H:%i') AS hora FROM turnos WHERE veterinario_id = ? AND DATE(fecha_hora) = ? AND estado IN ('pendiente','confirmado')");
            $stmt->execute([$veterinarioId, $fecha]);
            $turnos = $stmt->fetchAll();
            $ocupados = array_column($turnos, 'hora');

            echo json_encode([
                'ocupados' => $ocupados,
                'servidor_fecha' => date('Y-m-d'),
                'servidor_hora' => date('H:i'),
                'servidor_timestamp' => time()
            ]);
            break;

        // POST: guardar un turno completo
        case 'crear':
            if ($method !== 'POST') {
                http_response_code(405);
                echo json_encode(['error' => 'Método no permitido']);
                break;
            }
            $data = json_decode(file_get_contents('php://input'), true);

            // Validar campos requeridos
            $requeridos = ['nombre', 'telefono', 'tipo_cita_id', 'veterinario_id', 'fecha_hora'];
            foreach ($requeridos as $campo) {
                if (empty($data[$campo])) {
                    http_response_code(400);
                    echo json_encode(['error' => "Falta el campo: $campo"]);
                    exit;
                }
            }

            $pdo->beginTransaction();

            // 1. Registrar / buscar cliente
            $email = isset($data['email']) ? trim($data['email']) : null;
            $telefono = trim($data['telefono']);
            $nombre = trim($data['nombre']);
            $mascota = isset($data['mascota']) ? trim($data['mascota']) : '';

            $clienteId = null;
            $tieneMascota = columnExists($pdo, 'clientes', 'mascota');

            // Buscar por teléfono para no duplicar clientes
            $stmt = $pdo->prepare("SELECT id FROM clientes WHERE telefono = ? LIMIT 1");
            $stmt->execute([$telefono]);
            $cliente = $stmt->fetch();

            if ($cliente) {
                $clienteId = $cliente['id'];

                if ($tieneMascota) {
                    $stmt = $pdo->prepare("UPDATE clientes SET nombre = ?, email = COALESCE(?, email), mascota = ? WHERE id = ?");
                    $stmt->execute([$nombre, $email, $mascota, $clienteId]);
                } else {
                    $stmt = $pdo->prepare("UPDATE clientes SET nombre = ?, email = COALESCE(?, email) WHERE id = ?");
                    $stmt->execute([$nombre, $email, $clienteId]);
                }
            } else {
                if ($tieneMascota) {
                    $stmt = $pdo->prepare("INSERT INTO clientes (nombre, telefono, email, mascota) VALUES (?, ?, ?, ?)");
                    $stmt->execute([$nombre, $telefono, $email, $mascota]);
                } else {
                    $stmt = $pdo->prepare("INSERT INTO clientes (nombre, telefono, email) VALUES (?, ?, ?)");
                    $stmt->execute([$nombre, $telefono, $email]);
                }
                $clienteId = $pdo->lastInsertId();
            }

            // 2. Validar existencia de tipo de cita y veterinario
            $stmt = $pdo->prepare("SELECT id, nombre FROM tipos_cita WHERE id = ?");
            $stmt->execute([$data['tipo_cita_id']]);
            $tipoCita = $stmt->fetch();
            if (!$tipoCita) {
                $pdo->rollBack();
                http_response_code(400);
                echo json_encode(['error' => 'Tipo de cita inválido']);
                exit;
            }

            $stmt = $pdo->prepare("SELECT id, nombre FROM veterinarios WHERE id = ?");
            $stmt->execute([$data['veterinario_id']]);
            $veterinario = $stmt->fetch();
            if (!$veterinario) {
                $pdo->rollBack();
                http_response_code(400);
                echo json_encode(['error' => 'Veterinario inválido']);
                exit;
            }

            // Validar que el veterinario efectivamente preste este tipo de servicio
            $stmt = $pdo->prepare("SELECT 1 FROM veterinario_tipo_cita WHERE veterinario_id = ? AND tipo_cita_id = ?");
            $stmt->execute([$data['veterinario_id'], $data['tipo_cita_id']]);
            if (!$stmt->fetch()) {
                $pdo->rollBack();
                http_response_code(400);
                echo json_encode(['error' => 'El veterinario seleccionado no realiza este tipo de atención.']);
                exit;
            }

            // 3. Validar que la fecha sea futura y que la hora esté en intervalos de 30 minutos
            $fechaHora = trim((string)$data['fecha_hora']);
            if (!preg_match('/^\d{4}-\d{2}-\d{2} (\d{2}):(00|30):00$/', $fechaHora, $matchHora)) {
                $pdo->rollBack();
                http_response_code(400);
                echo json_encode(['error' => 'La hora debe estar en intervalos de 30 minutos.']);
                exit;
            }

            $hora = $matchHora[1] . ':' . $matchHora[2];
            if ($hora < '08:00' || $hora > '16:30') {
                $pdo->rollBack();
                http_response_code(400);
                echo json_encode(['error' => 'La hora debe estar entre 08:00 y 16:30.']);
                exit;
            }

            $fechaHoraCita = DateTime::createFromFormat('!Y-m-d H:i:s', $fechaHora, new DateTimeZone('America/Guayaquil'));
            $ahora = new DateTime('now', new DateTimeZone('America/Guayaquil'));
            if (!$fechaHoraCita || $fechaHoraCita <= $ahora) {
                $pdo->rollBack();
                http_response_code(400);
                echo json_encode(['error' => 'La fecha y hora deben ser futuras. No puedes agendar en un horario que ya pasó.']);
                exit;
            }

            // 4. Evitar doble reserva del mismo veterinario en el mismo horario
            $stmt = $pdo->prepare("SELECT id FROM turnos WHERE veterinario_id = ? AND fecha_hora = ? AND estado IN ('pendiente','confirmado')");
            $stmt->execute([$data['veterinario_id'], $fechaHora]);
            if ($stmt->fetch()) {
                $pdo->rollBack();
                http_response_code(409);
                echo json_encode(['error' => 'Ese horario ya está reservado. Elige otro.']);
                exit;
            }

            // 5. Insertar turno
            $observaciones = isset($data['observaciones']) ? trim($data['observaciones']) : '';
            $stmt = $pdo->prepare("INSERT INTO turnos (cliente_id, veterinario_id, tipo_cita_id, fecha_hora, observaciones) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$clienteId, $data['veterinario_id'], $data['tipo_cita_id'], $fechaHora, $observaciones]);
            $turnoId = $pdo->lastInsertId();

            $pdo->commit();

            enviarCorreoNotificacion(
                'Nueva cita agendada #' . $turnoId,
                emailPlantilla('Nueva solicitud recibida', 'Nueva cita agendada', 'Se ha registrado una nueva cita desde el sitio web.', [
                    'Cliente' => $nombre,
                    'Teléfono' => $telefono,
                    'Correo' => $email ?: 'No indicado',
                    'Mascota' => $mascota ?: 'No indicada',
                    'Servicio' => $tipoCita['nombre'],
                    'Veterinario' => $veterinario['nombre'],
                    'Fecha y hora' => $fechaHora,
                    'Referencia' => '#' . $turnoId
                ], $observaciones ?: 'Sin observaciones')
            );

            echo json_encode([
                'success' => true,
                'mensaje' => '¡Cita agendada con éxito!',
                'turno_id' => $turnoId
            ]);
            break;

        default:
            http_response_code(404);
            echo json_encode(['error' => 'Acción no reconocida']);
            break;
    }
} catch (PDOException $e) {
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    http_response_code(500);
    echo json_encode(['error' => 'Error del servidor: ' . $e->getMessage()]);
}