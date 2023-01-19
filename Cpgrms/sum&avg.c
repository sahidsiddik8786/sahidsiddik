#include<stdio.h>
void main()
{
    int a,b,c,sum;
    float avg;
    printf("enter the three numbers \n");
    scanf("%d %d %d",&a,&b,&c);
    sum=a+b+c;
    printf("sum of three numbers are:%d \n",sum);
    avg=(a+b+c)/3;
    printf("average of three numbers are:%f",avg);
}
