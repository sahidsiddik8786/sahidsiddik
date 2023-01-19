#accept a file name from a user and print the extenasion:
fn= input("Enter Filename: ")

f = fn.split(".")

print ("Extension of the file is : " + f[-1])