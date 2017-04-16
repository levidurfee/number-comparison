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
    if($m >= count($a)) {
        return $m;
    }
    $counter = 0;
    for($j=$i + 1; $j<count($a); $j++) {
        $difference = abs($a[$i] - $a[$i + 1]);
        if($difference <= 45) {
            $counter++;
        }
    }

    if($counter > $m) {
        $m = $counter;
    }

    f($a, $i + 1, $m); 
}

echo f($sampleArray);

echo "\n\nfinished\n";
