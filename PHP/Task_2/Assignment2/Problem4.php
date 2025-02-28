<?php

$start = 10;
$end = 0;
$stop = 3;

for ($index = $start; $index >= $stop; --$index) {
    if ($index < 10) echo $end;
    echo $index . '<br>';
}
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03