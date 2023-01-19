#include<stdio.h>
void main()
{
    int a,b;
    printf("enter the two numbers a and b \n");
    scanf("%d %d",&a,&b);
    a=a*b;
    b=a/b;
    a=a/b;
    printf("print the a= %d and b= %d ",a,b);
}
