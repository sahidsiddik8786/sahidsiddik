class Rectangle:
    def __init__(self,length,breadth):
        self.__length=length
        self.__breadth=breadth
        self.area=length*breadth

    def __lt__(self,other):
        if self.area < other.area:
            return "rectangle 1 is smaller "
        else:
            return "rectangle 2 is smaller"
a=Rectangle(80,40)
b=Rectangle(10,20)
print(a<b)