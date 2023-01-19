#include<stdio.h>
void main()
{
    int n,r=0,temp,sum,i;
    printf("enter a number");
    scanf("%d",&n);
    sum=0;
    temp=n;
    while(n>0)
    {
        r=n%10;
        sum=sum+(r*r*r);
        n=n/10;
    }
    if(temp==sum)
    {
        printf(" is amstrong num");

    }
    else{
        printf("is not an amstrong num");
    }
    }

