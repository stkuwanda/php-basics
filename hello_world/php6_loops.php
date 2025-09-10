<?php
// Loops in PHP
// There are several types of loops in PHP:
// 1. while loop
// 2. do-while loop
// 3. for loop
// 4. foreach loop

// for loop example
// useful if you know in advance how many times you want to iterate
for ($i = 1; $i <= 5; $i++) {
  echo "Iteration: $i<br>";
}

// while loop example
// useful if you want to loop until a certain condition is met
$j = 1;
while ($j <= 5) {
  echo "Count: $j<br>";
  $j++;
}

// do-while loop example
// similar to while loop, but guarantees at least one execution
$k = 1;
do {
  echo "Number: $k<br>";
  $k++;
} while ($k <= 5);

// foreach loop example
// useful for iterating over arrays
$colors = array("Red", "Green", "Blue", "Yellow", "Purple");
foreach ($colors as $color) {
  echo "Color: $color<br>";
}