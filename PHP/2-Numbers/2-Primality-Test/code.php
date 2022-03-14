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
var_dump(is_prime(2));
var_dump(is_prime(3));
var_dump(is_prime(4));
var_dump(is_prime(5));

// Argument is <= 1, hence NULL is returned.
var_dump(is_prime(1));
var_dump(is_prime(0));
var_dump(is_prime(-10));

// Argument is not int, hence NULL is returned.
var_dump(is_prime(2.0));