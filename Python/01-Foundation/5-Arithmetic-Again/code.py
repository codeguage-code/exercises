while True:
   x = int(input('x: '))
   y = int(input('y: '))
   op = input('Operation: ')

   if op == 'a':
      print('x + y =', x + y)
   elif op == 's':
      print('x - y =', x - y)
   elif op == 'm':
      print('x * y =', x * y)
   elif op == 'd':
      print('x / y =', x / y)
   elif op == 'e':
      print('x ** y =', x ** y)
   else:
      print('x % y =', x % y)
   
   print() # blank line
   again = input('Restart? y for Yes, n for No.\n')

   if again == 'n':
      break
   
   print() # another blank line