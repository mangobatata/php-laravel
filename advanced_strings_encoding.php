<?php

// ===============================
// 1. BASE64 ENCODING
// ===============================

// Texto original
$text = "Hola PHP moderno";

// Codificar en Base64
$encoded = base64_encode($text);
echo "Base64=$encoded\n";

// Decodificar de Base64
$decoded = base64_decode($encoded);
echo "Decodificado=$decoded\n";

// ===============================
// USO REAL DE BASE64
// ===============================

// Se usa para:
// - tokens simples
// - APIs
// - transmitir datos binarios

$userId = 123;
$token = base64_encode("user:$userId");
echo "Token=$token\n" . "\n";

// ===============================
// 2. URL ENCODING
// ===============================

$url = "https://example.com/search?q=hola php avanzado";

// Codificar URL
$encodedUrl = urlencode($url);
echo "URL encoded: $encodedUrl\n";

// Decodificar URL
$decodedUrl = urldecode($encodedUrl);
echo "URL decoded: $decodedUrl\n";

// ===============================
// USO REAL DE URL ENCODING
// ===============================

// Evita romper URLs con espacios o símbolos

$query = "php & laravel saas";
$finalUrl = "https://site.com/search?q=" . urlencode($query);
echo $finalUrl . "\n";

// ===============================
// 3. HTML ESCAPING
// ===============================

// Texto con HTML peligroso
$userInput = "<script>alert('hack')</script>";

// Escapar HTML (seguridad)
$safe = htmlspecialchars($userInput);
echo $safe . "\n";

// ===============================
// USO REAL (SEGURIDAD WEB)
// ===============================

// Evita XSS (ataques en frontend)

$name = "<b>Ana</b>";
echo "Usuario: " . htmlspecialchars($name);

// ===============================
// 4. RAW OUTPUT vs ESCAPED OUTPUT
// ===============================

$html = "<h1>Hola Mundo</h1>";

// Output normal (interpreta HTML)
echo $html . "\n";

// Output seguro (lo muestra como texto)
echo htmlspecialchars($html) . "\n";

// ===============================
// 5. COMBINACIÓN REAL (API STYLE)
// ===============================

$data = [
    "name" => "Ana & Co",
    "message" => "<b>Hello</b>"
];

// JSON encode (API)
echo json_encode($data);


