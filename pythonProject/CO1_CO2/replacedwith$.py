str1="onion"
l=str1[0]
str1=str1.replace(l, '$')
str1=l+str1[1:]
print(str1)