#To check whether the armstrong number is in range
v=int(input("Enter the lower range:"))
u=int(input("Enter the upper range:"))

for n in range(v,u+1):
    sum=0
    temp=n
    while temp>0:
        d=temp%10
        sum=sum+d*d*d
        temp=temp//10
        if n==sum:
            print(n)