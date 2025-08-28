<?php
  // Numbers in PHP
  $int_num = 42; // Integer
  $float_num = 3.14; // Float (or double)
  $oct_num = 052; // Octal (base 8)
  $hex_num = 0x2A; 
  $int_num = decbin($int_num);
  $int_num = decbin($oct_num);
  $int_num = decbin($hex_num);

  /* Displaying numbers */
  $int_num = decbin($oct_num);
  echo "Integer: " . $int_num . "<br>";
  echo "Float: " . $float_num . "<br>";
  echo "Octal (052): " . $oct_num . "<br>";
  echo "Hexadecimal (0x2A): " . $hex_num . "<br>";
  echo "Binary of 42: " . decbin(42) . "<br>";
  printf("Formatted Float: %.2f<br>", $float_num);
  var_dump($int_num); // var_dump to display detailed information about a variable
  echo "<br>";
  echo decbin(0) . decbin(0) ."<br>";

  // Arithmetic operations
  $a = 10;
  $b = 3;
  echo "Addition: " . ($a + $b) . "<br>";
  echo "Subtraction: " . ($a - $b) . "<br>";
  echo "Multiplication: " . ($a * $b) . "<br>";
  echo "Division: " . ($a / $b) . "<br>";
  echo "Modulus: " . ($a % $b) . "<br>";
  echo "Exponentiation: " . ($a ** $b) . "<br>";
  echo "Increment: " . (++$a) . "<br>";
  echo "Decrement: " . (--$b) . "<br>";
  echo "Type of \$int_num: " . gettype($int_num) . "<br>";
  echo "is \$int_num integer? " . (is_int($int_num) ? 'Yes' : 'No') . "<br>";
  echo "is \$float_num float? " . (is_float($float_num) ? 'Yes' : 'No') . "<br>";
  echo "is \$oct_num integer? " . (is_int($oct_num) ? 'Yes' : 'No') . "<br>";
  echo "is \$hex_num integer? " . (is_int($hex_num) ? 'Yes' : 'No') . "<br>";
  echo "is \$a integer? " . (is_int($a) ? 'Yes' : 'No') . "<br>";
  echo "is \$b integer? " . (is_int($b) ? 'Yes' : 'No') . "<br>";
  echo "Type of \$float_num: " . gettype($float_num) . "<br>";
  