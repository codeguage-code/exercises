<?php

$items = [[50, 30], [85, 10], [300, 15], [20, 5]];
$col_len = 20;

printf(
   "%-{$col_len}s %-{$col_len}s %-{$col_len}s\n\n",
   'Price',
   'Discount',
   'Price after discount'
);

for ($i = 0; $i < count($items); $i++) {
   $price = $items[$i][0];
   $discount = $items[$i][1];
   $final_price = $price * (1 - $discount / 100);

   $price = sprintf('$%.2f', $price);
   $discount = sprintf('%d%%', $discount);
   $final_price = sprintf('$%.2f', $final_price);

   printf(
      "%-{$col_len}s %-{$col_len}s %-{$col_len}s\n\n",
      $price,
      $discount,
      $final_price
   );
}