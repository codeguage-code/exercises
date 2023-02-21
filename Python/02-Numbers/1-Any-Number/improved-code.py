x = input('x: ')
y = input('y: ')

x = float(x)
y = float(y)

result = x + y

if result.is_integer():
   result = int(result)

print('The sum is:', result)