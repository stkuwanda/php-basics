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

class User
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
    echo "User $name created.<br>";
  }

  // Destructor
  public function __destruct()
  {
    echo "User $this->name is being destroyed.<br>";
  }
}

$user = new User("Alice");

// Inheritance and Polymorphism

class BaseClassVehicle
{
  public static $type = 'aircraft';

  // Factory method
  public static function fromMakeModel($make, $model)
  {
    echo "Creating a new vehicle of type " . self::$type . "<br>";
    return new self($make, $model);
  }

  public $make;
  public $model;

  public function __construct($make, $model)
  {
    $this->make = $make;
    $this->model = $model;
  }

  public function getInfo()
  {
    return 'Vehicle info: ' . $this->make . ' ' . $this->model;
  }
}

class SubClassTruck extends BaseClassVehicle
{
  public $payloadCapacity;

  public function __construct($make, $model, $payloadCapacity)
  {
    parent::__construct($make, $model);
    $this->payloadCapacity = $payloadCapacity;
  }

  // Overriding the getInfo method
  public function getInfo()
  {
    return parent::getInfo() . ' with payload capacity of ' . $this->payloadCapacity . ' tons.';
  }
}

class SubClassCar extends BaseClassVehicle
{
  public $seatingCapacity;

  public function __construct($make, $model, $seatingCapacity)
  {
    parent::__construct($make, $model);
    $this->seatingCapacity = $seatingCapacity;
  }

  // Overriding the getInfo method
  public function getInfo()
  {
    return parent::getInfo() . ' with seating capacity of ' . $this->seatingCapacity . ' persons.';
  }
}

$truck = new SubClassTruck('Ford', 'F-150', 3);
$car = new SubClassCar('Toyota', 'Camry', 5);
$aircraft = BaseClassVehicle::fromMakeModel('Boeing', '747'); // Using factory method
$aircraft1 = $aircraft::fromMakeModel('Airbus', 'A320'); // Using late static binding
$car1 = $car::fromMakeModel('Benz', 'GLE'); // Using late static binding

echo $truck->getInfo() . "<br>";
echo $car->getInfo() . "<br>";
echo $aircraft->getInfo() . "<br>";
echo $aircraft1->getInfo() . "<br>";
echo $car1->getInfo() . "<br>";


// Interfaces and Traits

// Interfaces
// Interfaces define a contract that implementing classes must follow. They can contain method signatures but no implementations.
// A class can implement multiple interfaces, allowing for a form of multiple inheritance.
interface Auditable
{
  public function recordAction(string $action): void;
  public function getAuditTrail(): array;
}

// Traits
// Traits are a mechanism for code reuse in single inheritance languages like PHP. They allow you to include methods and properties in multiple classes without using inheritance.
// Traits can contain method implementations and properties, and they can be used to share functionality across different classes.
trait LoggerTrait
{
  private array $auditTrail = [];

  public function recordAction(string $action): void
  {
    $this->auditTrail[] = $action;
  }

  public function getAuditTrail(): array
  {
    return $this->auditTrail;
  }
} 

// Any class that implements the Auditable interface must provide concrete implementations for the recordAction and getAuditTrail methods.
// By using the LoggerTrait, the UserSession class can reuse the logging functionality without needing to implement it from scratch and still adhere to the Auditable interface contract.
class UserSession implements Auditable
{
  use LoggerTrait;
}

$session = new UserSession();
$session->recordAction("User logged in");
$session->recordAction("User updated profile");
echo "<pre>";
var_dump($session->getAuditTrail());
echo "</pre>";


