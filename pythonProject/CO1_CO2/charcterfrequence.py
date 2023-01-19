count=0
name=input(print("enter the list of first names:"))
list=[]
for i in name:
    list.append(i)
for i in list:
    if(i=="s"):
        count=count+1
print(count)
