<?php
//car.php
// This file defines a Car class that represents a car object

class car {
    //properties
    public string $make;
    public string $model;
    public int $year;

    //constructors
    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    // Method to return car information as a string
    public function getCarInfo(): string {
        return $this->year . " " . $this->make . " " . $this->model;
    }
}

?>