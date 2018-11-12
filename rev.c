#include<stdio.h>
void main()
{
int n, i, sum=0,r;
    printf("enter a number");
    scanf("%d",&n);
    while(n!=0)
    {
    r=n%10;
    n=n/10;
    sum=(sum*10)+r;
    }
    printf("your reversed number is %d",sum);
}
