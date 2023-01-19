#write a program to read each from a given csv file and a list of strings.
import csv
columns_to_read=[0, 1]
#open the csv file
with open('classmates.csv', 'r') as file:
    clmn_reader = csv.reader(file)


    # iterate over the rows
    for row in clmn_reader:

        print([row[i] for i in columns_to_read])
