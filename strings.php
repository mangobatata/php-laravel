<?php

// ===============================
// 1. SINGLE QUOTES (' ')
// ===============================
// No interpreta variables dentro

$name = "Ana";

echo 'Hola $name'; 
// salida: Hola $name (literal)

echo "Hola $name!\n";
// salida: Hola Ana (interpreta la variable)

$heredoc = <<<EOD
Multi-line string 
with variable: $name
EOD;

$text = <<<'TEXT'
Hola $name
Esto es texto literal
TEXT;

$nowdoc = <<<EOD
Multi-line string 
with variable: $name
EOD;

echo $heredoc . "\n"; // Interpreta variables
echo $text . "\n"; // No interpreta variables (literal)
echo $nowdoc . "\n"; // No interpreta variables (literal)