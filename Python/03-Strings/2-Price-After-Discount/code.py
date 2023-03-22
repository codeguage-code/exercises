items = [(50, 30), (85, 10), (300, 15), (20, 5)]
col_len = 20

print('Price'.ljust(col_len) + 'Discount'.ljust(col_len) + 'Price after discount'.ljust(col_len))
print()

for item in items:
   price = item[0]
   discount = item[1]
   final_price = price - (price * discount / 100)

   price = '${:.2f}'.format(price)
   final_price = '${:.2f}'.format(final_price)
   discount = str(discount) + '%'

   print(price.ljust(col_len) + discount.ljust(col_len) + final_price.ljust(col_len))