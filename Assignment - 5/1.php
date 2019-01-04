<?php

$ages_str = "23, 44, 70, 25, 90, 17";

$ages_arr = explode(', ', $ages_str);

for ($i = 0; $i < sizeof($ages_arr); $i++) {
    $ages_arr[$i] = (int) $ages_arr[$i];
}

echo (round((array_sum($ages_arr) / sizeof($ages_arr)), 2)); // 44.83
