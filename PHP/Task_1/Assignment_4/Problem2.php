<?php
$a = "10";

echo (int)$a . '<br>';
echo gettype((int)$a) . '<br>';
echo +$a . '<br>';
echo gettype(+$a) . '<br>';
echo - (-$a) . '<br>';
echo gettype(- (-$a)) . '<br>';
