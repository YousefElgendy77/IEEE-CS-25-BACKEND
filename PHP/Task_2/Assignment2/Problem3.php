<?php

$num = 2;
$x = 3;
while ($num < 520) {
    if ($num == 2) {
        echo 1 . '<br>';
        $num--;
    } else {
        echo $num . '<br>';
    }
    $num += $x;
    $x *= 2;
}
