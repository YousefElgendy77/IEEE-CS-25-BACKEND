<?php


setcookie("site[color]", "blue");
setcookie("site[font]", "Swat");
setcookie("site[layout]", "boxed");

setcookie("site[layout]", "");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
