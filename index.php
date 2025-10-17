<?php
define("ROOT", __DIR__);

// --- Configuración de depuración ---
$debug = false;
if ($debug) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

// --- Zona horaria ---
date_default_timezone_set('America/Lima');

// --- Carga automática de clases ---
require_once "core/autoload.php";

// --- Sesión y buffer ---
ob_start();
session_start();

// --- Inicialización del Core ---
if (class_exists('Core')) {
    Core::$root = "";
    // Core::$debug_sql = true; // descomenta para ver las consultas SQL
}

// --- Inicia la aplicación ---
if (class_exists('Lb')) {
    $lb = new Lb();
    $lb->start();
} else {
    die("Error: La clase 'Lb' no se encontró. Verifica tu autoload.");
}


?>