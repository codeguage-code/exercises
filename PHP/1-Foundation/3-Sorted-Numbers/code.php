<?php

$nums = [];

echo 'x: ';
array_push($nums, (int) fgets(STDIN));

echo 'y: ';
array_push($nums, (int) fgets(STDIN));

echo 'z: ';
array_push($nums, (int) fgets(STDIN));

// Sort the numbers.
sort($nums);

echo 'Sorted numbers: ', $nums[0], ' ', $nums[1], ' ', $nums[2];