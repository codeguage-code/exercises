import random

n = random.randint(1, 10)
print('The integer is:', n)

print()

for i in range(1, 13):
   print(n, 'x', i, '=', n * i)