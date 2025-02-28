<?php

function check_status($a, $b, $c)
{
    if (is_string($a) && is_integer($b)) {
        echo "Hello $a, Your Age Is $b, You Are " . (($c == false) ? "Not " : " ") . "Available For Hire <br>";
    } elseif (is_string($b) && is_integer($a)) {
        echo "Hello $b, Your Age Is $a, You Are " . (($c == false) ? "Not " : " ") . "Available For Hire <br>";
    } elseif (is_string($a) && is_integer($c)) {
        echo "Hello $a, Your Age Is $c, You Are " . (($b == false) ? "Not " : " ") . "Available For Hire <br>";
    } elseif (is_string($c) && is_integer($a)) {
        echo "Hello $c, Your Age Is $a, You Are " . (($b == false) ? "Not " : " ") . "Available For Hire <br>";
    } elseif (is_string($c) && is_integer($b)) {
        echo "Hello $c, Your Age Is $b, You Are " . (($a == false) ? "Not " : " ") . "Available For Hire <br>";
    } elseif (is_string($b) && is_integer($c)) {
        echo "Hello $b, Your Age Is $c, You Are " . (($a == false) ? "Not " : " ") . "Available For Hire <br>";
    }
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"