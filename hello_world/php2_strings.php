<?php
$str = "Hello from PHP Strings!";
echo $str . "<br>";

// To lowercase;
echo strtolower($str) . "<br>";

// To uppercase;
echo strtoupper($str) . "<br>";

// Uppercase first letter of each word
echo ucwords($str) . "<br>";

// Length of string
echo "Length of string: " . strlen($str) . "<br>";

// Word count
echo "Word count: " . str_word_count($str) . "<br>";

// Replace substring
echo str_replace("PHP", "Hypertext Preprocessor", $str) . "<br>";

// Find position of substring
echo "Position of 'from': " . strpos($str, "from") . "<br>";

// Substring
echo "Substring (7, 4): " . substr($str, 7, 4) . "<br>";





