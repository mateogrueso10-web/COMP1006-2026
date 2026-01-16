<?php 
// Include the car class file
require_once "car.php";

// Include the database connection file
require_once "connect.php";

// Create a new Car object
$myCar = new Car("Toyota", "Corolla", 2022);


// Display the car information in the browser
echo "<h2>" . $myCar->getCarInfo() . "</h2>";

/* 
This lab was straightforward as it involved creating a simple class and connecting to a database, both of which were covered in previous lessons. The main task was to ensure proper syntax and structure in PHP.
*/
?>

