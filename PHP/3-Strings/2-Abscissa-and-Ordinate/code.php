<?php

echo 'Enter the co-ordinate: ';
$point = rtrim(fgets(STDIN));

$index = strpos($point, ',');
$abscissa = substr($point, 1, $index - 1);
$ordinate = substr($point, $index + 1, -1);

echo "\n";
echo 'Abscissa: ', $abscissa, "\n";
echo 'Ordinate: ', $ordinate;