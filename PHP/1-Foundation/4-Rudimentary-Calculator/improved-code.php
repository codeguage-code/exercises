<?php

echo 'x: ';
$x = (int) fgets(STDIN);

echo 'y: ';
$y = (int) fgets(STDIN);

echo 'Operation: ';
$op = rtrim(fgets(STDIN));

// Blank line.
echo "\n";

if ($op == 'a') {
   $op_sym = '+';
   $result = $x + $y;
}
elseif ($op == 's') {
   $op_sym = '-';
   $result = $x - $y;
}
elseif ($op == 'm') {
   $op_sym = '*';
   $result = $x * $y;
}
elseif ($op == 'd') {
   $op_sym = '/';
   $result = $x / $y;
}
elseif ($op == 'r') {
   $op_sym = '%';
   $result = $x % $y;
}
elseif ($op == 'e') {
   $op_sym = '**';
   $result = $x ** $y;
}

if (isset($op_sym))
   echo $x, ' ', $op_sym, ' ', $y, ' = ', $result;
else
   echo 'Unknown operation.';