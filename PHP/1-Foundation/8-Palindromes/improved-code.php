<?php

function is_palindrome($word) {
   $len = strlen($word);

   for ($i = 0; $i < $len / 2; $i++) {
      if ($word[$i] !== $word[$len - $i - 1]) {
         return false;
      }
   }
   return true;
}


echo 'Enter a word: ';
$word = rtrim(fgets(STDIN));

if (is_palindrome($word)) {
   echo 'Yes';
}
else {
   echo 'No';
}