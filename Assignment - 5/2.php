<?php

// ************ Prime Number *********** //

function primeNumber($range)
{
    try {
        if ($range < 2) {
            throw new Exception("Please enter a number which is greater than 1");
        }

        $n = $range;
        for ($i = 2; $i <= $n; $i++) {
            $counter = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j === 0) {
                    $counter++;
                }
            }
            if ($counter === 2) {
                echo ("$i, ");
            }
        }
    } catch (Exception $e) {
        echo ($e->getmessage());
    }

}
primeNumber(100);   // 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97,
