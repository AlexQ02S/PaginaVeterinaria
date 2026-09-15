<?php
// Configurar zona horaria oficial del negocio (Ecuador continental: UTC-5)
date_default_timezone_set('America/Guayaquil');

// URL base dinámica: funciona sin importar si el proyecto está en la
// raíz de htdocs o en una subcarpeta.
$docRoot = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
$projDir = str_replace('\\', '/', realpath(__DIR__));
$relPath = str_replace($docRoot, '', $projDir);
define('BASE_URL', rtrim($relPath, '/'));
