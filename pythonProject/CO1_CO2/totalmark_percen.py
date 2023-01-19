#find the mark of 5 subjects and calculate total and percentage marks
max=int(input("enter the maximum mark of a subject"))
mark1=int(input("enter the mark of 1st subject"))
mark2=int(input("enter the mark of 2nd subject"))
mark3=int(input("enter the mark of 3rd subject"))
mark4=int(input("enter the mark of 4th subject"))
mark5=int(input("enter the mark of 5th subject"))
total=mark1+mark2+mark3+mark4+mark5
per=(total/5*max)*100
print("total mark is",total)
print("percentage is",per)
