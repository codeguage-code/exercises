x = int(input('x: '))
y = int(input('y: '))
op = input('Operation: ')

# Blank line before output.
print()

if op == 'a':
   print(x, '+', y, '=', x + y)
elif op == 's':
   print(x, '-', y, '=', x - y)
elif op == 'm':
   print(x, '*', y, '=', x * y)
elif op == 'd':
   print(x, '/', y, '=', x / y)
elif op == 'e':
   print(x, '**', y, '=', x ** y)
elif op == 'r':
   print(x, '%', y, '=', x % y)
else:
   print('Unknown operation.');