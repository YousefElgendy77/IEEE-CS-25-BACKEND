<?php

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";


$str[-1] = $let_one;
$str[(int)$num_two] = $let_two;
// Write Your Code Here

echo $str; // Elzero