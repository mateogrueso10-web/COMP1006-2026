<?php
require_once "connect.php";
//1. Code commenting

// Inline comment

/*
   Multi-line comment
   explaining the code below
*/

//2. Variable declaration and data types
$firstName = "Mateo"; // String
$lastName = "Grueso"; // String
$age = 18; // Integer
$isStudent = true; // Boolean

echo "<p> Hello there, my name is " . $firstName . " " . $lastName . "</p>";

if ($isStudent) {
    echo "<p>I am " . $age . " years old and I am a student.</p>";
} else {
    echo "<p>I am " . $age . " years old and I am not a student.</p>";
}

//3. php is loosely typed

//create two variables, num1, num2
$num1 = 10; // Integer
$num2 = "5"; // String

function add($num1, $num2) {
    return $num1 + $num2; // PHP will convert string to integer
}

echo "<p>The sum of " . $num1 . " and " . $num2 . " is: " . add($num1, $num2) . "</p>";


// OOP with PHP

class Person {
    // Properties
    public string $name;
    public int $age;
    public bool $isStudent;

    // Constructor
    public function __construct(string $name, int $age, bool $isStudent) {
        $this->name = $name;
        $this->age = $age;
        $this->isStudent = $isStudent;
    }

    // Method
    public function getBadge(): string {
        $role = $this->isStudent ? "Student" : "Non-Student";
        return "Name: " . $this->name . ", Age: " . $this->age . ", Role: " . $role;
    }
}
// Create an instance of Person
$person = new Person("Mateo Grueso", 18, true);
echo "<p>" . $person->getBadge() . "</p>";
?>