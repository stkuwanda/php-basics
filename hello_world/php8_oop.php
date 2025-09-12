<?php
// PHP OOP (Object-Oriented Programming)

// Define a class
class Vehicle
{
  // Properties
  public $make;
  public $model;
  public $year;

  // Method
  public function getVehicleInfo()
  {
    return $this->year . ' ' . $this->make . ' ' . $this->model;
  }
}

class Car
{
  // Properties
  public $make;
  public $model;
  public $year;

  // Constructor
  public function __construct($make, $model, $year)
  {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
  }

  // Method
  public function getCarInfo()
  {
    return $this->year . ' ' . $this->make . ' ' . $this->model;
  }
}

// Create an object of the Vehicle class without constructor
$vehicle = new Vehicle();
$vehicle->make = "Toyota";
$vehicle->model = "Camry";
$vehicle->year = 2020;
echo "Vehicle Info: " . $vehicle->getVehicleInfo() . "<br>";
echo "<pre>";
var_dump($vehicle);
echo "</pre>";

// Create an object of the Car class with constructor
$car = new Car("Honda", "Civic", 2021);
echo "Car Info: " . $car->getCarInfo() . "<br>";
echo "<pre>";
var_dump($car);
echo "</pre><br>";

// Convert an associative array to an object
$obj1 = (object) ['a' => 1, 'b' => 2];
echo "<pre>"; 
var_dump($obj1);
echo "</pre>";

class User {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
    echo "User $name created.<br>";
  }

  // Destructor
  public function __destruct() {
    echo "User $this->name is being destroyed.<br>";
  }
}

$user = new User("Alice");
