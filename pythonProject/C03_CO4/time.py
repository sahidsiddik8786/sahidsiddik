class Time:
    '''def __lt__(self,other):
        if (self.hour<other.__hour):
            return "t1 is greater"
        else:
            return "t2 is smaller"'''
    def __init__(self,hour,minute,second):
        self.__hour= hour
        self.__minute = minute
        self.__second = second
    #def __add__(self,other):

    def __add__(self,other):
        t3=Time
        t3.__hour =t1.__hour+t2.__hour
        t3.__minute =t1.__minute+t2.__minute
        t3.__second =t1.__second+t2.__second
        print('time is:' + str(self.__hour + other.__hour) + ':' + str(self.__minute + other.__minute) + ':' + str(
            self.__second + other.__minute))
        if t3.__second > 59 :
            t3.__second-=60
            t3.__minute+=1
        if t3.__minute > 59:
            t3.__minute-=60
            t3.__hour+=1
        return 'exact time:' + str(t3.__hour) + ":" + str(t3.__minute) + ":" + str(t3.__second)
h=int(input("enter the hour:"))
m=int(input("enter the minute:"))
s=int(input("enter the second:"))
print("\t")
h1=int(input("enter the hour:"))
m1=int(input("enter the minute:"))
s1=int(input("enter the second:"))
t1=Time(h,m,s)
t2=Time(h1,m1,s1)
print(t1+t2)