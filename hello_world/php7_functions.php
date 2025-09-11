<?php
// PHP functions

// simple function declaration
function writeMessage()
{
  echo "Hello World! This is my first PHP function!";
}

writeMessage(); // call the function

// function with parameters
function addNumbers($a, $b)
{
  $sum = $a + $b;
  echo "<br>The sum of $a and $b is: $sum.";
}

addNumbers(5, 10); // call the function with arguments