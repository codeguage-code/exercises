<?php

function linear_search($arr, $target) {
   for ($i = 0; $i < count($arr); $i++) {

      // If a match is found, return true.
      if ($arr[$i] === $target) {
         return true;
      }
   }

   // No match was found, hence return false.
   return false;
}