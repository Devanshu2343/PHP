<?php
// Parent class 
class Vehicle {
    public $brand;
    public $model;

    // Constructor for the vehicle 
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to describe the vehicle
    public function describe() {
        echo "This is a {$this->brand} {$this->model}.<br>";
    }
} 

// Child class (inherits from Vehicle) 
class Car extends Vehicle {
    public $doors;

    // Constructor for the car
    public function __construct($brand, $model, $doors) {
        // Call the parent class constructor
        parent::__construct($brand, $model);
        
        // Set the number of doors
        $this->doors = $doors;
    }

    // Overriding the describe() method
    public function describe() {
        echo "This is a {$this->model} with {$this->doors} doors.<br>";
    }
}

// Creating an object of the parent class (Vehicle)
$vehicle = new Vehicle("Toyota", "Corolla");
$vehicle->describe();  // Output: This is a Toyota Corolla.

// Creating an object of the child class (Car)
$car = new Car("Honda", "Civic", 4);
$car->describe();  // Output: This is a Civic with 4 doors.
?>
