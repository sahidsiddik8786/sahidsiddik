n=int(input("enter a number to reverse"))
rev=0
temp=n
while(n!=0):
    rem=n%10
    rev=rev*10+rem
    n//=10
if(rev==temp):
    print("number is palindrome",rev)

else:
    print("number is not a palindrome",rev)

