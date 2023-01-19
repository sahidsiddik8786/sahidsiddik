#write a program to read each from a given csv file and a list of strings.
import csv

#open the csv file
with open('classmates.csv','r') as file:
    reader=csv.reader(file)


    # iterate over the rows
    for row in reader:
        #printing each rows
        print(row)
