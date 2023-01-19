#program to generate a simple calculator
operation = input('''
Select the option:
1. addition
2.subtraction
3.multiplication
4.division
''')

a = int(input('Enter your first number: '))
b = int(input('Enter your second number: '))

if operation == '1':
    print('{} + {} = '.format(a, b))
    print(a + b)

elif operation == '2':
    print('{} - {} = '.format(a, b))
    print(a - b)

elif operation == '3':
    print('{} * {} = '.format(a, b))
    print(a * b)

elif operation == '4':
    print('{} / {} = '.format(a, b))
    print(a / b)

else:
    print('Invalid, please run the program again.')