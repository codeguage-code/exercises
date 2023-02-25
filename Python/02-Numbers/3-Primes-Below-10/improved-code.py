import random

n = random.randint(1, 9)

if n == 2 or n == 3 or n == 5 or n == 7:
   print(n, 'is prime.')
else:
   print(n, 'is NOT prime.')