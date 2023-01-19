//find odd and even sum of first n natural numbers
#include<stdio.h>
void main()
{
    int n,i,even_sum=0,odd_sum=0;

 printf("enter the natural number limit to print:\n");
 scanf("%d",&n);
 for(i=1;i<=n;i++)
 {
     if(i%2==0)
        even_sum=even_sum+i;
     else
        odd_sum=odd_sum+i;
         }
                printf(" sum of even number is:%d \n",even_sum);
                printf("sum of odd number is:%d \n",odd_sum);

 }

