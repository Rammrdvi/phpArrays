<?php

$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];
$difference = array_diff($array1, $array2);
print_r($difference);

echo ' ================== ';

function arrayDifference($array1, $array2) {
    $difference = []; // Initialize an empty array to store the difference

    // Loop through each element in the first array
    foreach ($array1 as $element) {
        $found = false;

        // Loop through each element in the second array
        foreach ($array2 as $element2) {
            // If the element is found in the second array, set the flag to true
            if ($element === $element2) {
                $found = true;
                break; // Exit the inner loop as we found the element
            }
        }

        // If the element was not found in the second array, add it to the difference array
        if (!$found) {
            $difference[] = $element;
        }
    }

    return $difference; // Return the array containing the difference
}

function arrayDifferencee($array1,$array2){
    $diff=[];
    foreach($array2 as $element){
        $found = false;
        foreach($array1 as $element2){
            if($element ==$element2){
                $found = true;
                break;
            }
        }

        if(!$found){
            $diff[]=$element; 
        }
    }
    return $diff;
}
// Example usage
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];
$difference = arrayDifference($array1, $array2);
print_r($difference);


$difference2 = arrayDifferencee($array1, $array2);
print_r($difference2);

?>