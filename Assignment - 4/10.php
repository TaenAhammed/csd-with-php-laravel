<?php

function searchOnArray($n) {
    $a = [
        [2, 9, 6, 8, 4],
        [4, 3, 8, 11, 38],
        [38, 0, -84, 4],
    ];
    
    $n = $n;
    
    for ($i = 0; $i < sizeof($a); $i++) {
        $row = $i + 1;
        for ($j = 0; $j < sizeof($a[$i]); $j++) {
            $column = $j + 1;
            if ($n === $a[$i][$j]) {
                echo ("Row: ${row} , Column: ${column} \n");
            }
        }
    }
}

searchOnArray(11);
