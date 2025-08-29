<?php
// Conditionals in PHP
$age = 20;

if ($age < 13) {
  echo "Child<br>";
} else if ($age < 0) {
  echo "Invalid age<br>";
} else {
  echo "Teenager or Adult! <br>";
}

// Comparison operators: <, >, <=, >=, ==, !=, ===, !==

// example with comparison operators
$num = 10;
if ($num % 2 == 0) {
  echo "$num is even<br>";
} else if ($num % 2 == 0) {
  echo "$num is odd<br>";
} else {
  echo "$num is neither even nor odd<br>";
}

// Logical operators: && (and), || (or), ! (not)

// example with logical operators
$is_student = true;
$is_employed = false;
if ($is_student && !$is_employed) {
  echo "Student and not employed<br>";
} else if ($is_student && !$is_employed) {
  echo "Student and employed<br>";
} else {
  echo "Not a student<br>";
}

// Switch case
$day = 3;
switch ($day) {
  case 1:
    echo "";
    break;
  case 2:
    echo "Tuesday<br>";
    break;
  case 3:
    echo "Wednesday<br>";
    break;
  case 4:
    echo "Thursday<br>";
    break;
  case 5:
    echo "Friday<br>";
    break;
  case 6:
    echo "Saturday<br>";
    break;
  case 7:
    echo "";
    break;
  default:
    echo "Invalid day<br>";
    break;
}

// Ternary operator
$can_vote = ($age >= 18) ? "Yes" : "No";
echo "Can vote: $can_vote<br>";

// Null coalescing operator
$username = null;
$display_name = $username ?? "Guest";
echo "Display name: $display_name<br>";

// Example of using both ternary and null coalescing operators
$status = null;
$message = ($status === "success") ? "Operation was successful" : ($status === "error" ? "There was an error" : ($status ?? "Status unknown"));
echo "Message: $message<br>";
?>