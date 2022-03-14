<?php

function is_prime($n) {
   if (!is_int($n) || $n <= 1) {
      return NULL;
   }

   $limit = (int) ($n ** 0.5);

   for ($i = 2; $i <= $limit; $i++) {
      if ($n % $i === 0) {
         // $n has a divisor other than 1 and itself.
         // Hence, return false.
         return false;
      }
   }

   // $n is prime, hence return true.
   return true;
}