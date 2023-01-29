<?php

function factorial($n) {
   if (!is_int($n)) {
      return 'Undefined';
   }

   if ($n == 0) {
      return 1;
   }

   $result = 1;
   for ($a = 2; $a <= $n; $a++) {
      $result *= $a;
   }

   return $result;
}