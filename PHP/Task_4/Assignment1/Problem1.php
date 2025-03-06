<?php

echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . '<br>';  // 0.15
echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2) . '<br>';  // 0.32
