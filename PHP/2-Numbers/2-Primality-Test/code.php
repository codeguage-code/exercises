<?php

function is_prime($n) {
   if (!is_int($n) || $n <= 1) {
      return NULL;
   }

   for ($i = 2; $i < $n - 1; $i++) {
      if ($n % $i === 0) {
         return false;
      }
   }

   return true;
}