<?php

if (!file_exists("Programming/PHP"))
    mkdir("Programming/PHP", 0711, true);


if (file_exists("Programming/PHP")) {
    rmdir("Programming/PHP");
    echo "Directory Programming/PHP Removed <br>";
}

if (file_exists("Programming")) {
    rmdir("Programming");
    echo "Directory Programming Removed <br>";
}

/*
"Directory Programming/PHP Removed"
"Directory Programming Removed"
*/
