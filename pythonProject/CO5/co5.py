input_file=open('myinput.txt')
output_file=open('myoutput.txt','w')
copy_data=input_file.readlines()
print(copy_data, "\n") #printing the textfile

for i in range(0,len(copy_data)):
    if i % 2==0:
            output_file.write(copy_data[i])
    else:
        pass
output_file.close()
output_file=open('myoutput.txt','r')
print("odd are")
print(output_file.read())

input_file.close()
output_file.close()