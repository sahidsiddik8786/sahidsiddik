n=int(input("enter a range"))
r=0
temp=n
while(temp>0):
    rem=temp%10
    r+=rem**3
    temp//=10
if(n==r):
    print("amstrong numbers are::")
