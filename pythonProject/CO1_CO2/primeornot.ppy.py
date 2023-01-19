n=int(input("enter the number::"))

if n>1:
 for i in range(2,n):
    if(n % i)==0:
        print("is not a prime number", n)
        break
    else:
        print("is prime number",n)
        break
else:
    print("is not a prime number",n)
