<?php
// Loops in PHP
// There are several types of loops in PHP:
// 1. while loop
// 2. do-while loop
// 3. for loop
// 4. foreach loop

// for loop example
for ($i = 1; $i <= 5; $i++) {
  echo "Iteration: $i<br>";
}

// while loop example
$j = 1;
while ($j <= 5) {
  echo "Count: $j<br>";
  $j++;
}

// do-while loop example
$k = 1;
do {
  echo "Number: $k<br>";
  $k++;
} while ($k <= 5);

// foreach loop example
$colors = array("Red", "Green", "Blue", "Yellow", "Purple");
foreach ($colors as $color) {
  echo "Color: $color<br>";
}