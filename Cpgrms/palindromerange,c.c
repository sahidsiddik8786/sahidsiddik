//to find the palindrome numbers within a range
#include<stdio.h>
void main()
{
    int n,max,min,rev,rem,i,temp;
    printf("enter the min");
    scanf("%d",&min);
    printf("enter the max");
    scanf("%d",&max);
    for(i=11;i<=max;i++)
    {

        n=i;
        rev=0;
    while(n!=0)
    {
        rem=n%10;
        rev=rev*10+rem;
        n=n/10;
    }
    if(rev==i)
    {
    printf("%d \t",i);
    }
    }
}
