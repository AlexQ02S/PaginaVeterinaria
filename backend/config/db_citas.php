<?php
// db.php - Configuración de la conexión a MySQL

date_default_timezone_set('America/Guayaquil');

$host     = 'localhost';
$db       = 'veterinaria_citas';
$user     = 'root';          // Tu usuario de MySQL Workbench (por defecto: root)
$pass     = 'Patoboris123';  // Tu contraseña de MySQL (déjalo vacío "" si no tienes)
$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Muestra errores de SQL detallados
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,      // Retorna arrays asociativos
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Utiliza consultas preparadas reales (Seguridad)
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $pdo->exec("SET time_zone = '-05:00'");
    // echo "Conexión exitosa a la base de datos"; // Descomenta solo para probar
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}