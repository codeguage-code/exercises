<?php

$n = rand(1, 100);

echo 'Multiplication table for ', $n, ":\n";

// Blank line.
echo "\n";

for ($i = 1; $i <= 12; $i++) {
   echo $n, ' x ', $i, ' = ', $n * $i, "\n";
}