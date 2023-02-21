def is_palindrome(s):
   n = len(s)
   for i in range(n // 2):
      if s[i] != s[n - i - 1]:
         return False
   return True


s = input('Enter a word: ')

if is_palindrome(s):
   print('Yes')
else:
   print('No')