<?php
// Indexed array
// access elements via numeric index
$colors = array("Red", "Green", "Blue");

// Adding elements to the array
// by defining the index key.
// note you can set any index key you want.
// order does not matter.
$colors[4] = "Yellow";
$colors[3] = "Black";
$colors[] = "Indigo";      // Appends at end

echo $colors[0] . ' ';
echo $colors[1] . ' ';
echo $colors[2] . ' ';
echo $colors[3] . ' ';
echo $colors[4] . ' ';
echo "<br>";
echo "<pre>";
var_dump($colors);
echo "</pre>";

// Indexed array 2
$fruits = ["Apple", "Mango", "Banana"];

// Adding elements to the array
// by defining the index key.
// note you can set any index key you want.
// order does not matter.
$fruits[4] = "Pear";
$fruits[3] = "Grapes";

echo $fruits[0] . ' ';
echo $fruits[1] . ' ';
echo $fruits[2] . ' ';
echo $fruits[3] . ' ';
echo $fruits[4] . ' ';
echo "<br>";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Mixed type array
$mixed = ["Hello", 10, 10.5, true];
echo "<pre>";
var_dump($mixed);
echo "</pre>";

// Associative array
// access elements via named keys
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo "<pre>";
var_dump($person);
echo "</pre>";

$user = ["username" => "johndoe", "email" => "user@email.com", "age" => 25, "is_admin" => false, 'hobbies' => ["reading", "gaming", "coding"]];
echo "<pre>";
var_dump($user);
echo "</pre>";

