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

// array_pop
// removes the last element from an array
echo "<pre>";
array_pop($user['hobbies']);
var_dump($user);
echo "</pre>";

// array_push
// adds one or more elements to the end of an array
array_push($user['hobbies'], "traveling", "swimming");
echo "<pre>";
var_dump($user);
echo "</pre>";

// count
// counts all elements in an array or something in an object
echo "<pre>";
echo "Number of hobbies: " . count($user['hobbies']) . "\n";
echo "Number of properties in user: " . count($user) . "\n";
echo "</pre>";

// sort
// sorts an array in ascending order
$numbers = [5, 2, 9, 1, 5, 6];
sort($numbers);
echo "<pre>";
var_dump($numbers);
echo "</pre>";

// rsort
// sorts an array in descending order
rsort($numbers);
echo "<pre>";
var_dump($numbers);
echo "</pre>";

// asort
// sorts an associative array in ascending order, according to the values
asort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// ksort
// sorts an associative array in ascending order, according to the keys
ksort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// krsort
// sorts an associative array in descending order, according to the keys
krsort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// in_array
// checks if a value exists in an array
echo "<pre>";   
if (in_array("John", $person)) {
    echo "John is in the person array\n";
} else if (in_array("", $person)) {
    echo "Empty string is in the person array\n";
}

