<?php

setcookie("site[color]", "blue");
setcookie("site[font]", "Swat");
setcookie("site[layout]", "boxed");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "Your Color Is " . $_COOKIE["site"]["color"] . " And Your Font Is " . $_COOKIE["site"]["font"];

//Your Color Is blue And Your Font Is Swat