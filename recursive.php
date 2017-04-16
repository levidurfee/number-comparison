<?php

echo "starting...\n\n";

$sampleArray = [
      2,   8,  30,  35,  40,  46,
     49,  56,  90,  99, 105, 118,
    119, 145, 190, 200, 205, 250,
];

function pl($m) {
    echo $m . "\n";
}

function f($a, $i = 0, $m = 0) {
    // maybe remove - $i
    if($m >= count($a) - $i) {
        return $m;
    }
    if($i >= count($a)) {
        return $m;
    }

    // set the temp counter to 0
    $counter = 0;

    // loop through the numbers starting after $a[$i]
    for($j=$i + 1; $j<count($a); $j++) {
        // calc the difference outside the conditional to keep it pretty
        $difference = abs($a[$i] - $a[$j]);
        // check if the difference is 45 or less
        if($difference <= 45) {
            // increment our counter
            $counter++;
            // we want to find the max.
            if($counter > $m) {
                $m = $counter;
            }
        } else {
            // if it is greater than 45, and they're sorted, there is no reason
            // to continue looking at the other numbers.
            break;
        }
    }

    //pl($m);

    // moved this into the loop
    //if($counter > $m) {
    //    $m = $counter;
    //}

    // am i making it here?
    //pl("recursive");
    f($a, $i + 1, $m);
}

// output should start with 6
echo f($sampleArray);

echo "\n\nfinished\n";
