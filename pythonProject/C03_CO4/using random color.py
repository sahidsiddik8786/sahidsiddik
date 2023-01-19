import random
import string
print("generate a random color hex:")
print("#{:06x}".format(random.randint(0,0xFFFFFF)))
print("\n generate a random alphabetical string:")
Max_length=255
s=" "
for i in range(random.randint(1,Max_length)):
    s+=random.choice(string.ascii_letters)
print(s)
print("generate a random value between two integers,inclusive:")
print(random.randint(0, 10))
print(random.randint(-7 ,7))
print(random.randint(1, 1))
print("generate a random multiple of 7 between 0 and 70:")
print(random.randint(0, 10)*7)
