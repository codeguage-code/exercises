<?php

function is_palindrome($word) {
   for ($i = 0; $i < strlen($word) / 2; $i++) {
      if ($word[$i] !== $word[strlen($word) - $i - 1]) {
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