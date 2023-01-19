//find sum of squares of n natural numbers
#include<stdio.h>
void main()
{
    int n,i,sum=0;
    printf("enter a natural number \n");
    scanf("%d",&n);
    for(i=1;i<=n;i++)
    {
        sum=sum+(i*i);
    }
    printf("sum of squares of n natural numbers is: %d \n",sum);
}
