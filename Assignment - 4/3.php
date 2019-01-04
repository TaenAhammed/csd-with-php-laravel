<?php
// *********** Number of words appearers in an array ***********//

$str = "I love Bangladesh, I love tiger";
$arr = explode(' ', $str);

for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] = trim($arr[$i]);
}

$trimmedArr = preg_replace('/[^a-zA-Z0-9_-]/', '', $arr);

$countedItem = array_count_values($trimmedArr);

foreach ($countedItem as $key => $value) {
    echo ("${key} = ${value} \n");
}
