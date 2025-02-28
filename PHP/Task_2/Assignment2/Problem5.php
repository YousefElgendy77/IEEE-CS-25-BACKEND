<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($index = $start + 1; $index < sizeof($mix); ++$index) {
    if (is_integer($mix[$index])) echo $mix[$index] . '<br>';
}

// Output
// 2
// 3
// 4