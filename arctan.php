<?php

$a = [
    1,
    2,
    4,
    6,
    8,
    10,
];

function pl($m) {
    echo $m . "\n";
}

function f(&$i, $key, $a) { 
    $d = 0;
    for($k=0; $k<count($a); $k++) {
        if($i > $a[$k]) {
            $d++;
        }
    }
    $i = $d;
}

array_walk($a, 'f', $a);

var_dump($a);

