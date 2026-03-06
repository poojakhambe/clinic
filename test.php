<?php

// Simple two-digit addition and division operations

// Define two-digit numbers
$num1 = 45;
$num2 = 23;

// Addition operation
$addition_result = $num1 + $num2;

// Division operation
$division_result = $num1 / $num2;

// Display results
echo "Two-Digit Arithmetic Operations\n";
echo "================================\n\n";
echo "Number 1: " . $num1 . "\n";
echo "Number 2: " . $num2 . "\n\n";

echo "Addition: " . $num1 . " + " . $num2 . " = " . $addition_result . "\n";
echo "Division: " . $num1 . " / " . $num2 . " = " . number_format($division_result, 2) . "\n";

?>
