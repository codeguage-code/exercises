<?php

echo 'Enter a hyphenated word: ';
$word = rtrim(fgets(STDIN));

while (!str_contains($word, '-')) {
   echo 'Invalid input', "\n\n";
   echo 'Enter a hyphenated word: ';
   $word = rtrim(fgets(STDIN));
}

// At this point, $word is valid. Likewise, we can proceed with the output

echo "\n";
$words = explode('-', $word);
for ($i = 0; $i < count($words); $i++) {
   echo $words[$i], "\n";
}