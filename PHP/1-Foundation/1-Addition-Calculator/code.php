<?php

echo 'x: ';
$x = fgets(STDIN);

echo 'y: ';
$y = fgets(STDIN);

// Convert to int.
$x = (int) $x;
$y = (int) $y;

echo 'The sum is: ', $x + $y;