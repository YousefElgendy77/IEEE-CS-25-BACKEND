<?php

$date = "1990-10-01";
$date = date_create($date);

$now = date_create("now");
$diff = date_diff($date, $now);

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->d . " Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y . " Years<br>";
// Output Needed
// From Epoch Time Till 1990-10-01 Is Approximately 12575 Days
// From Epoch Time Till 1990-10-01 Is Approximately 34 Years
