<?php

namespace App;

class Employee extends User
{
    public string $position;

    public function __construct(string $name, int $age, string $position)
    {
        parent::__construct($name, $age);
        $this->position = $position;
    }

    public function introduce(): string
    {
        return parent::introduce() . " I work as a {$this->position}";
    }
}