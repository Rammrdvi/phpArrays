<?php

$array = [1, 2, 3, 4, 5, 6, 7];
$chunks = array_chunk($array, 3);
print_r($chunks);

echo "<br>================";
function chunkArray($array, $chunkSize) {
    $chunks = []; // Initialize an empty array to store the chunks
    $chunk = []; // Temporary array to store individual chunks
    $count = 0; // Counter to track the current size of the chunk

    // Loop through each element in the array
    foreach ($array as $element) {
        $chunk[] = $element; // Add the element to the current chunk
        $count++; // Increment the counter

        // If the chunk reaches the desired size, add it to the chunks array
        if ($count == $chunkSize) {
            $chunks[] = $chunk; // Add the current chunk to the chunks array
            $chunk = []; // Reset the chunk array
            $count = 0; // Reset the counter
        }
    }

    // Add any remaining elements as the last chunk
    if (!empty($chunk)) {
        $chunks[] = $chunk;
    }

    return $chunks; // Return the array of chunks
}

// Example usage
$array = [1, 2, 3, 4, 5, 6, 7];
$chunkSize = 3;
$chunks = chunkArray($array, $chunkSize);
print_r($chunks);

?>