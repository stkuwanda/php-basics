<?php
// Indexed array
$colors = array("Red", "Green", "Blue");

// Adding elements to the array
// by defining the index key.
// note you can set any index key you want.
// order does not matter.
$colors[4] = "Yellow";
$colors[3] = "Black";

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



