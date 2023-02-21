x = input('x: ')
y = input('y: ')

x = float(x)
y = float(y)

if (x + y).is_integer():
   print('The sum is:', int(x + y))
else:
   print('The sum is:', x + y)