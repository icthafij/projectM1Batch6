<?php
// Taking input from terminal
echo "Enter a number: ";
$number = (int) fgets(STDIN);  // Read input from the terminal and cast to integer


if ($number > 0) {
    echo "The number $number is positive.";
} elseif ($number < 0) {
    echo "The number $number is negative.";
} else {
    echo "The number $number is zero.";
}
?>
