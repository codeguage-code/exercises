def linear_search(arr, target):
   for item in arr:
      if item == target:
         return True

   return False


# Test the function
print(linear_search([1, 2, 3], 2))
print(linear_search([1, 2, 3], '2'))
print(linear_search(['2', '4', '6'], '2'))
print(linear_search(['2, 6', '1, 4'], '2'))
print(linear_search([False, False, False, True], False))