
<?php
// Define an array with numbers 1 to 10
$numbers = range(1, 10);

// Shuffle the array
shuffle($numbers);

// Get a random number from the array
$random_number = $numbers[array_rand($numbers)];

// Print the result
echo $random_number;
?>