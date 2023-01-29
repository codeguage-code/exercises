<?php

echo 'x: ';
$x = (int) fgets(STDIN);

echo 'y: ';
$y = (int) fgets(STDIN);

echo 'Operation: ';
$op = rtrim(fgets(STDIN));

// Blank line.
echo "\n";

if ($op == 'a')
   echo $x, ' + ',  $y, ' = ', $x + $y;

elseif ($op == 's')
   echo $x, ' - ',  $y, ' = ', $x - $y;

elseif ($op == 'm')
   echo $x, ' * ',  $y, ' = ', $x * $y;

elseif ($op == 'd')
   echo $x, ' / ',  $y, ' = ', $x / $y;

elseif ($op == 'r')
   echo $x, ' % ',  $y, ' = ', $x % $y;

elseif ($op == 'e')
   echo $x, ' ** ', $y, ' = ', $x ** $y;

else
   echo 'Unknown operation.';