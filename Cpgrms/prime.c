#include<stdio.h>
void main()
{
    int n,i;
    int count=0;
    printf("enter a number");
    scanf("%d",&n);
    for(i=2;i<n;i++)
    {
        if(n%i==0)

        count++;
    }
    if(count==0)
    {
        printf("is prime");
    }
    else{
        printf("is not prime");
    }
}
