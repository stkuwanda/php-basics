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
var_dump($colors);

