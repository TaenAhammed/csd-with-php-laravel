<?php
// ********************* Factorial ************************* //

function getFactorial($n)
{

    try {
        if ($n < 0) {
            throw new Exception("You must be enter a positive number.");
        }

        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        
        echo ($factorial);

    } catch (Exception $e) {
        echo ($e->getmessage());
    }
}

getFactorial(12);   // 479001600