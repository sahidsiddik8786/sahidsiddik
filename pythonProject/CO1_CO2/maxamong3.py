#find the biggest of three numbers using max function
def maximum(a, b, c):
    if (a >= b) and (a >= c):
        largest = a
    elif (b >= a) and (b >= c):
        largest = b
    else:
        largest = c

    return largest
a = int(input("Enter First number"))
b = int(input("Enter Second number"))
c = int(input("Enter Third number"))
print("Maximum Number is=",maximum(a, b, c))