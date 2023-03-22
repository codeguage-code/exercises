point = input('Enter the co-ordinate: ')

index = point.find(',')
abscissa = point[1:index]
ordinate = point[index + 1:-1]

print()
print('Abscissa:', abscissa);
print('Ordinate:', ordinate);