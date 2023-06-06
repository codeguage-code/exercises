<?php

function get_status_code_class($statusCode) {
   switch ($statusCode[0]) {
      case '1':
         return 'Informational';
      case '2':
         return 'Successful';
      case '3':
         return 'Redirect';
      case '4':
         return 'Client Error';
      case '5':
         return 'Server Error';
   }
}

function is_digit($char) {
   return '0' <= $char && $char <= '9';
}

function is_first_digit_in_range($statusCode) {
   return '1' <= $statusCode[0] && $statusCode[0] <= '5';
}


echo 'Enter status code> ';
$statusCode = rtrim(fgets(STDIN));

if (strlen($statusCode) !== 3) {
   echo 'Invalid code length.';
}
elseif (!is_digit($statusCode[0]) || !is_digit($statusCode[1]) || !is_digit($statusCode[2])) {
   echo 'Each character must be a digit.';
}
elseif (!is_first_digit_in_range($statusCode)) {
   echo 'First digit not in range 1-5.';
}
else {
   // The input was valid, hence we must make the desired output.
   echo get_status_code_class($statusCode);
}