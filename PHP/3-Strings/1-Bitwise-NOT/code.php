<?php

function not($str) {
   for ($i = 0; $i < strlen($str); $i++) {
      if ($str[$i] === '0') {
         $str[$i] = '1';
      }
      else {
         $str[$i] = '0';
      }
   }
   return $str;
}


// Test the function above.
var_dump(not('1010'));
var_dump(not('1111'));
var_dump(not('00001'));
var_dump(not('1'));
var_dump(not(''));