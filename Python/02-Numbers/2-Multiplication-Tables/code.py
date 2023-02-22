import random

n = random.randint(1, 10)
print('The integer is:', n)

print()

for i in range(12):
   print(n, 'x', i + 1, '=', n * (i + 1))