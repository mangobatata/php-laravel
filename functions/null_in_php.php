<?php

// ===============================
// NULL IN PHP
// ===============================

// null significa "no tiene valor"
$value = null;

function checkValue($v) {
    if ($v === null) {
        return "No hay valor (NULL)";
    }

    return "Valor: $v";
}

echo checkValue($value);
