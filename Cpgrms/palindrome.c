#include <stdio.h>
void main()
{

    int n,rem,rev=0,temp;
    printf("enter a number \n");
    scanf("%d",&n);

    while(n!=0)
    {
        rem=n%10;
        rev=rev*10+rem;
        n=n/10;
    }
    if(n==rev)
    {
        printf("is palindrome");

    }
    else
    {
        printf("is not palindrome");
    }
}

