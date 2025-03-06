<?php

$size = filesize("video_2024-04-22_14-00-31.mp4");
$size_in_MB = round($size / 1024);
echo "Size In Megabyte Is $size_in_MB <br>";
echo "Size In Kilobyte Is $size <br>";        
/*
Size In Megabyte Is 3700
Size In Kilobyte Is 3788401
*/