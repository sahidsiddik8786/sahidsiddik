//find largest among three numbers
#include<stdio.h>
void main()
{

    int a,b,c;
    printf("enter the 3 numbers:");
    scanf("%d %d %d",&a,&b,&c);
    if(a>b&&a>c)
    {
        printf("a is greater %d",a);
    }else if(b>a&&b>c)
        {
            printf("b is greater %d",b);
        }
        else
            {
            printf("c is greater %d",c);
        }
    }

