#print out all color from colorlist1 not contained in colorlist2
li1 = ["Green","Orange","Blue","Yellow"]
li2 = ["Blue","Yellow"]

difference = list(set(li1) - set(li2))

print(difference)