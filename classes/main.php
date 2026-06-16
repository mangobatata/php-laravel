<?php

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Employee.php";

use App\User;
use App\Employee;

// USER
$user1 = new User("Philipos", 25);
echo $user1->introduce();

echo "\n";

// EMPLOYEE
$emp = new Employee("Brandon", 30, "Developer");

echo $emp->introduce();
echo "\n";


