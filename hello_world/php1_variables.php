<?php
// This is a single-line comment in PHP
# This is another single-line comment in PHP
/*
  This is a multi-line comment in PHP
  It can span multiple lines
*/

/* Declaring variables in PHP. PHP variables are dynamic. */
$name = "Alice"; // string
$greeting = "Hello, World!";
$greeting .= " How are you today?"; // Concatenation assignment
$age = 25; // integer
$height = 5.9; // float
$is_student = true; // boolean
$fruits = array("Apple", "Banana", "Orange"); // array
$person = (object) ['name' => 'John', 'age' => 30]; // object
$nothing = null; // null
// $resource = fopen("php://memory", "r"); // resource

/* Displaying variables */
echo $greeting . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($is_student ? 'Yes' : 'No') . "<br>";
echo "Fruits: " . implode(", ", $fruits) . "<br>";
echo "Person Name: " . $person->name . ", Age: " . $person->age . "<br>";
echo "Nothing: " . var_export($nothing, true) . "<br>";

print "Using print to display a string<br>";
printf("Using printf to format a string: %s is %d years old.<br>", $person->name, $person->age);
print_r($fruits); // print_r to display arrays and objects
echo "<br>";
print_r($name); // print_r can also display strings
echo "<br>";
echo "var_dump(\$name'): ";
var_dump($name); // var_dump to display detailed information about an array
echo "<br>";
echo "var_dump(\$person'): ";
var_dump($person); // var_dump to display detailed information about a variable
echo "<br>";
echo "var_dump(\$age'): ";
var_dump($age); // var_dump can also display integers
echo "<br>";
echo "var_dump(\$nothing'): ";
var_dump($nothing); // var_dump can also display null
echo "<br>";
echo "var_dump(\$fruits'): ";
var_dump($fruits); // var_export to display a parsable string representation of a variable
echo "<br>";
echo "var_export(\$fruits'): ";
var_export($fruits); // var_export to display a parsable string representation of a variable
echo "<br>";
var_export($name); // var_export can also display strings
echo "<br>";

/* Types of variables in PHP */
// string
// snteger
// float (or double)
// boolean
// array
// object
// null
// resource
echo "Type of \$greeting: " . gettype($greeting) . "<br>";
echo "Type of \$age: " . gettype($age) . "<br>";
echo "Type of \$height: " . gettype($height) . "<br>";
echo "Type of \$is_student: " . gettype($is_student) . "<br>";
echo "Type of \$fruits: " . gettype($fruits) . "<br>";
echo "Type of \$person: " . gettype($person) . "<br>";
echo "Type of \$nothing: " . gettype($nothing) . "<br>";
echo "is \$name string? " . (is_string($name) ? 'Yes' : 'No') . "<br>";
echo "is \$age integer? " . (is_int($age) ? 'Yes' : 'No') . "<br>";
echo "is \$height float? " . (is_float($height) ? 'Yes' : 'No') . "<br>";
echo "is \$is_student boolean? " . (is_bool($is_student) ? 'Yes' : 'No') . "<br>";
echo "is \$fruits array? " . (is_array($fruits) ? 'Yes' : 'No') . "<br>";
echo "is \$person object? " . (is_object($person) ? 'Yes' : 'No') . "<br>";
echo "is \$nothing null? " . (is_null($nothing) ? 'Yes' : 'No') . "<br>";
// echo "is \$resource resource? " . (is_resource($resource) ? 'Yes' : 'No') . "<br>";
// echo "Type of \$resource: " . gettype($resource) . "<br>";

/*check if variable is set or not */
echo "Is \$name set? " . (isset($name) ? 'Yes' : 'No') . "<br>";
echo "Is \$undefined_var set? " . (isset($undefined_var) ? 'Yes' : 'No') . "<br>";
echo "Is \$nothing set? " . (isset($nothing) ? 'Yes' : 'No') . "<br>";
// echo "Is \$resource set? " . (isset($resource) ? 'Yes' : 'No') . "<br>";
// unset($name); // Unsetting a variable

/* Variable scope */
function testScope()
{
  global $greeting; // Accessing global variable
  echo "Inside function: " . $greeting . "<br>";
  echo "Interpolation: {$greeting} <br>"; // Variable interpolation in double quotes. Works only with double quotes.
  $local_var = "I am local"; // Local variable
  echo $local_var . "<br>";
}

testScope();
// echo $local_var; // This will cause an error as $local_var is not accessible here