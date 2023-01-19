#include <stdio.h>
void  main(){
    int array[500],n, i,min;
    int max, secondMax;
    printf("Enter number of elements in array\n");
    scanf("%d", &n);
    printf("Enter %d numbers \n",n);
    for(i=0;i<n;i++){
        scanf("%d", &array[i]);
    }
    max=secondMax=min;
    for(i=0;i<n;i++){
        if(array[i] > max){
            secondMax = max;
            max = array[i];
        } else if (array[i] > secondMax&& array[i] < max){
            secondMax = array[i];
        }
    }
    printf("Maximum Element : %d \nSecond Maximum Element: %d", max, secondMax);

}
