#include<stdio.h>
void main()
{
    int a[100],j,n,i,val,pos,size,num;
    printf("enter the size of 1st array");
    scanf("%d",&n);
    printf("enter the elements in 1st array");
    for(i=0;i<n;i++){
        scanf("%d",&a[i]);
    }
    printf("enter the location to insert");
    scanf("%d",&pos);
    printf("enter the value to insert");
    scanf("%d",&val);
    for(j=n-1;j>=pos-1;j--)
    {
        a[j+1]=a[j];
    }
    a[pos-1]=n;
    size++;
    printf("inserted array is");
    for(i=0;i<n;i++)
        printf("%d\t",&a[i]);
}
