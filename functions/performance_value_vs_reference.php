<?php

// ===============================
// PERFORMANCE TEST
// VALUE vs REFERENCE
// ===============================

// Array grande simulado
$bigArray = range(1, 100000);

// -------------------------------
// VALUE (por defecto)
// -------------------------------
function processByValue($data)
{
    foreach ($data as $item) {
        // solo lectura
    }
}

processByValue($bigArray);


// -------------------------------
// REFERENCE
// -------------------------------
function processByReference(&$data)
{
    foreach ($data as $item) {
        // sin copiar estructura
    }
}

processByReference($bigArray);