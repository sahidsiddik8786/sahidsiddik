//program to find the sum and average of a number in array
#include <stdio.h>
int main()
{
    int Arr[50], n, i, sum = 0;

    printf("Enter the number of elements to insert : ");
    scanf("%d", &n);

    for (i = 0; i < n; i++)
    {
        printf("Enter element %d : ", i + 1);
        scanf("%d", &Arr[i]);
        sum += Arr[i];
    }

    printf("\nThe sum of the array is : %d", sum);
    printf("\nThe average of the array is : %f", (float)sum / n);
    return 0;
}
