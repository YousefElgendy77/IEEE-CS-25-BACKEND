<?php

function sum_all(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    echo "$sum <br>";
}

// Write Function Content Here

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 49
echo sum_all(5, 10, 5, 10); // 30