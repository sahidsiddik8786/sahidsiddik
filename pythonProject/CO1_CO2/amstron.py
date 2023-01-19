n=int(input("Enter a number::"))
r=0
temp=n
while(n!=0):
    rem=n%10
    r=r+rem*rem*rem
    n//=10
if(temp==r):
    print("Number is amstrong")

else:
    print("Number is not a amstrong")

