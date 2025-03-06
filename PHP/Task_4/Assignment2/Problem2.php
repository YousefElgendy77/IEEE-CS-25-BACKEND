<?php

$date = "2005-10-02";
$date = date_create();
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . '<br>';

date_add($date, date_interval_create_from_date_string("15 hours 15 minutes 15 seconds"));
echo date_format($date, "Y, F, l 'dS' s:i:H");
// Output Needed
/*
Africa/Cairo
2025, March, Friday '07th' 23:05:13
*/
