<?php 
$array = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($array, function($value) {
    return $value % 2 === 0;
});
print_r($evenNumbers);

 
function filterEvenNumbers($array) {
    $evenNumbers = []; // Initialize an empty array to store even numbers

    // Loop through each element in the array
    foreach ($array as $element) {
        // Check if the element is even
        if ($element % 2 === 0) {
            // If it's even, add it to the evenNumbers array
            $evenNumbers[] = $element;
        }
    }

    return $evenNumbers; // Return the array of even numbers
}

// Example usage
$array = [1, 2, 3, 4, 5];
$evenNumbers = filterEvenNumbers($array);
print_r($evenNumbers);


?>