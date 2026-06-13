<?php

// =========================
// String (cadena de texto)
// =========================
$name = "Alice";

echo $name . "\n";

// =========================
// Integer (número entero)
// =========================
$age = 30;

echo $age . "\n";

// =========================
// Float (número decimal)
// =========================
$price = 19.99;

echo $price . "\n";

// =========================
// Boolean (verdadero/falso)
// =========================
$isStudent = true;

var_dump($isStudent);

// =========================
// Array (colección de valores)
// =========================
$fruits = ["Apple", "Banana", "Orange"];

print_r($fruits);

// =========================
// Null (sin valor)
// =========================
$middleName = null;

var_dump($middleName);

// =========================
// Object (objeto)
// =========================
class User
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$user = new User("Alice");

var_dump($user);