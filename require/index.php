<?php

// ===============================
// REQUIRE CONFIG FILES
// ===============================

// require_once asegura que el archivo se cargue solo una vez
$config = require_once __DIR__ . "/config.php";
$db     = require_once __DIR__ . "/database.php";


// ===============================
// USO DE LA CONFIGURACIÓN
// ===============================

echo "App: " . $config["app_name"] . "\n";
echo "Versión: " . $config["version"] . "\n";


// ===============================
// USO DE LA DB CONFIG
// ===============================

echo "Conectando a DB...\n";
echo "Host: " . $db["host"] . "\n";
