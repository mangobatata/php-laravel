<?php

// ===============================
// PASSING BY REFERENCE
// ===============================

// El & permite modificar la variable original
function changeValue(&$num) {
    $num = 100;
}

$x = 10;

changeValue($x);

// El valor original SÍ cambia
echo $x; // 100