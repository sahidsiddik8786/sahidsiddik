#create a string from given string where 1st and last character exchange.
def change_sring(str1):
    return str1[-1:] + str1[1:-1] + str1[:1]
print(change_sring('appple'))
print(change_sring('orange'))