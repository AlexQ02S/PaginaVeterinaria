<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

function emailEnv($name, $default = '')
{
    $value = getenv($name);
    return $value === false ? $default : trim($value);
}

function emailEsc($valor)
{
    return htmlspecialchars((string)$valor, ENT_QUOTES, 'UTF-8');
}

function emailTelefonoWhatsApp($telefono)
{
    $digitos = preg_replace('/\D+/', '', (string)$telefono);
    if (strlen($digitos) === 10 && substr($digitos, 0, 1) === '0') {
        return '593' . substr($digitos, 1);
    }
    return $digitos;
}

function emailPlantilla($etiqueta, $titulo, $introduccion, array $datos, $mensaje = '')
{
    $filas = '';
    foreach ($datos as $nombre => $valor) {
        $valorHtml = emailEsc($valor);
        if ($nombre === 'Teléfono') {
            $whatsapp = emailTelefonoWhatsApp($valor);
            $valorHtml .= '<div style="margin-top:8px;"><a href="https://wa.me/' . emailEsc($whatsapp) . '" style="display:inline-block;padding:8px 12px;background:#7e22ce;color:#ffffff;text-decoration:none;border-radius:6px;font-size:12px;font-weight:700;">Abrir WhatsApp</a></div>';
        }
        $filas .= '<tr><td style="padding:10px 0;color:#64748b;font-size:13px;width:38%;">' . emailEsc($nombre) . '</td>' .
            '<td style="padding:10px 0;color:#312e81;font-size:14px;font-weight:700;">' . $valorHtml . '</td></tr>';
    }

    $bloqueMensaje = $mensaje === '' ? '' :
        '<div style="margin-top:22px;padding:18px;background:#fffbeb;border-left:4px solid #facc15;border-radius:8px;">' .
        '<div style="color:#854d0e;font-size:12px;font-weight:800;text-transform:uppercase;">Mensaje</div>' .
        '<div style="margin-top:8px;color:#334155;font-size:14px;line-height:1.6;white-space:pre-wrap;">' . emailEsc($mensaje) . '</div></div>';

    return '<!doctype html><html><body style="margin:0;background:#f5f3ff;font-family:Arial,sans-serif;color:#334155;">' .
        '<div style="max-width:620px;margin:24px auto;padding:0 14px;">' .
        '<div style="overflow:hidden;background:#ffffff;border:1px solid #e9d5ff;border-radius:14px;box-shadow:0 8px 24px rgba(76,29,149,.12);">' .
        '<div style="padding:24px 28px;background:#4c1d95;color:#ffffff;">' .
        '<div style="font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:#fde047;font-weight:800;">TuHuellaVet</div>' .
        '<div style="margin-top:8px;font-size:24px;font-weight:800;">' . emailEsc($titulo) . '</div>' .
        '<div style="margin-top:6px;color:#ede9fe;font-size:13px;">' . emailEsc($etiqueta) . '</div></div>' .
        '<div style="padding:28px;"><p style="margin:0 0 20px;font-size:15px;line-height:1.6;">' . emailEsc($introduccion) . '</p>' .
        '<table style="width:100%;border-collapse:collapse;border-top:1px solid #ede9fe;">' . $filas . '</table>' .
        $bloqueMensaje .
        '<div style="margin-top:26px;padding-top:18px;border-top:1px solid #ede9fe;color:#64748b;font-size:12px;line-height:1.5;">Notificación automática del sitio web de TuHuellaVet.</div>' .
        '</div></div></div></body></html>';
}

function enviarCorreoNotificacion($asunto, $contenido)
{
    $destino = emailEnv('EMAIL_DESTINO', 'tuhuellavet@gmail.com');
    $usuario = emailEnv('SMTP_USUARIO', $destino);
    $password = emailEnv('SMTP_PASSWORD');
    $host = emailEnv('SMTP_HOST', 'smtp.gmail.com');
    $port = (int)emailEnv('SMTP_PORT', '587');

    if ($password === '') {
        error_log('No se envió el correo: falta SMTP_PASSWORD.');
        return false;
    }

    $correo = new PHPMailer(true);

    try {
        $correo->isSMTP();
        $correo->Host = $host;
        $correo->SMTPAuth = true;
        $correo->Username = $usuario;
        $correo->Password = $password;
        $correo->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $correo->Port = $port;
        $correo->CharSet = 'UTF-8';
        $correo->setFrom($usuario, 'TuHuellaVet');
        $correo->addAddress($destino);
        $correo->isHTML(true);
        $correo->AltBody = strip_tags(str_replace(['</tr>', '</div>', '<br>'], ["\n", "\n", "\n"], $contenido));
        $correo->Subject = $asunto;
        $correo->Body = $contenido;
        $correo->send();
        return true;
    } catch (Exception $error) {
        error_log('No se pudo enviar el correo de notificación: ' . $correo->ErrorInfo);
        return false;
    }
}