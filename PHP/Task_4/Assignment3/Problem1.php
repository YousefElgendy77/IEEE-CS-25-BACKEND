<?php
$days = 60 * 60 * 24 * 5;
$months = 60 * 60 * 24 * 30 * 2;
$expire_date = time() + $months + $days;
setcookie("layout", "boxed", $expire_date);
setcookie("font", "Swat", $expire_date);
setcookie("color", "blue", $expire_date);
