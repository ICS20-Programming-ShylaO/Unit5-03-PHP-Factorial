<?php

// initializing user's integer, including the counter, factorial as 1, and response as an empty string
$integer = $_POST['f-int'];
$counter = $integer;
$factorial = 1;
$response = "";

// response for when user does not enter an integer
if (!is_numeric($integer)) {
    echo "Please enter a valid integer.";
} 

elseif ($integer == 0) {
    echo "0! --> 1 = 1";
}

// else for when user enters valid input
else {
    // do...while loop to calculate the factorial using repeated multiplication
    do {
      // setting factorial to itself times the counter to create a loop of repeated multiplication
        $factorial = $factorial * $counter;
      // build the response by using the empty string and adding the factorial with the original integer
        if ($counter == $integer) {
            $response = $response . $counter;
        }
        else {
            $response = $response . " x " . $counter;
        }
        // decrement the counter by one
        $counter--;
    } while ($counter >= 1);
  
    // display answer to user
    echo "!" . $integer . " --> " . $response . " = " . $factorial;
}
