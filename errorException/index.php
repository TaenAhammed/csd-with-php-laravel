<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d", $n);

try {
    if ($n < 1)
        throw new Exception("Number must be greater than Zero.");

    $sum = 0;    

    for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    }

    fprintf(STDOUT, "%d", $sum);

} catch(Exception $e) {
    echo($e->getmessage());
}