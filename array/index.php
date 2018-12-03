<?php
$arr = [
    "names" => ["Taen", "Sumon", "Munna"], 
    "ages" => [19, 20, 21],
    "Job" => ["CTO", "SE", "SE"]
];

unset($arr['Job']);
var_dump($arr);

// $arr2 = SplFixedArray(5);
$arr3;
$arr4;
for($i = 0; $i < 10; $i++)
    $arr3[$i] = 0;
    $arr4[$i] = array();
var_dump($arr3);
var_dump($arr4);

$arr5 = array_fill(0, 10, 'Taen');
var_dump($arr5);

$arr6 = array_fill(0, 5, []);
var_dump($arr6);