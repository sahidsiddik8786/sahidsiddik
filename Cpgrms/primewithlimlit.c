#include<stdio.h>
void main()
{

int n,i,count,min,max;
printf("enter  min");
scanf("%d",&min);
printf("enter max");
scanf("%d",&max);
count=0;
for(i=min;i<max/2;i++)
{

    if(n%i==0)
    count++;
}
if(count==0)
{
printf("prime numbers are %d",i);
}
}

