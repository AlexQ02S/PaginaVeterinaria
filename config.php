<?php
// Configurar zona horaria oficial del negocio (Ecuador continental: UTC-5)
date_default_timezone_set('America/Guayaquil');

// URL base compatible con /public como carpeta pública o document root.
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$publicPosition = strrpos($scriptName, '/public');

if (false !== $publicPosition) {
	define('BASE_URL', substr($scriptName, 0, $publicPosition + 7));
} else {
	$docRoot = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'] ?? ''));
	$projDir = str_replace('\\', '/', realpath(__DIR__));
	$relPath = str_replace($docRoot, '', $projDir);
	define('BASE_URL', rtrim($relPath, '/'));
}
