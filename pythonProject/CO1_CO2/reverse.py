n=int(input("enter a number to reverse"))
rev=0
while(n!=0):
    rem=n%10
    rev=rev*10+rem
    n//=10
print("reverse of a number is ",rev)
