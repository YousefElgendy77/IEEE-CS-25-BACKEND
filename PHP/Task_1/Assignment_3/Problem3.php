<?php

$a = 200;
$b = $a;
$a = 100;

echo $b; // 200
echo '<br>';

$b = $a;
echo $b; // 100
