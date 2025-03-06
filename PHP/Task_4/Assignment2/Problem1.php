<?php

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";
$d = date_create();

echo date_format($d, "D, d M y - s:i:H A") . '<br>';
echo date_format($d, "l, d F Y - s:i:H A"), '<br>';

/*
Asia/Riyadh
Thu, 06 Mar 25 - 50:34:23 PM
Thursday, 06 March 2025 - 50:34:23 PM
*/
