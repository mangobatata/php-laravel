<?php

namespace App;

// ===============================
// CLASE BÁSICA EN PHP
// ===============================

class User {

    // Propiedades (variables dentro de la clase)
    public string $name;
    public int $age;

    // Constructor (se ejecuta al crear el objeto)
    public function __construct(string $name, int $age) {
        $this->name = $name; // $this = el objeto actual
        $this->age = $age;
    }

    // Método (función dentro de la clase)
    public function introduce(): string {
        return "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

// ===============================
// CREAR OBJETO (INSTANCIA)
// ===============================

// $user1 = new User("Philipos", 25);
// echo $user1->greet();
// $user2 = new User("Brandon", 30);
// echo $user2->greet();