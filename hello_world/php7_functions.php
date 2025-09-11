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

// functiion with default parameter values
function greet($name = "Guest")
{
  echo "<br>Hello, $name!";
}

greet(); // call the function without argument
greet("Alice"); // call the function with argument

// function with return value
function multiply($x, $y)
{
  return $x * $y;
}

$result = multiply(4, 5); // call the function and store the return value
echo "<br>The product of 4 and 5 is: $result.";