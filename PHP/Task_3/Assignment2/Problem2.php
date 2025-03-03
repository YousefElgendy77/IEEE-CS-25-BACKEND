<?php

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$result = array_change_key_case(array_combine($codes, $means), CASE_LOWER);

echo '<pre>';
print_r($result);
echo '</pre>';

/* Output
Array
(
  [h] => HTML
  [c] => CSS
  [j] => JavaScript
)
*/