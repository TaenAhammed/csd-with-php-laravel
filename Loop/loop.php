<?php
// Loop one
for ($i = 0; $i <= 20; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i . "<br/>";
}
echo "Loop one ended. <br/> <br/> <br/>";

// Loop two
for ($j = 0; $j <= 20; $j++) {
    if ($j % 2 === 0) {
        continue;
    }
    echo $j . "<br/>";
}
echo "Loop two ended. <br/>";
