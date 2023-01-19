n=int(input("enter a number"))
sum=0
while(n!=0):
    rem=n%10
    sum=sum+rem
    n//=10
print("sum of a number is ",sum)
