class Publisher:
        def __init__(self,pubname):
            self.pubname=pubname
        def display(self):
            print("publisher name is:",self.pubname)
class Book(Publisher):
        def __init__(self,title,pubname,author):
            Publisher.__init__(self,pubname)
            self.title=title
            self.author=author
        def display(self):
            print("title:",self.title)
            print("publisher:", self.pubname)
            print("Author:",self.author)

class python(Book):
        def __init__(self ,title, pubname, author,price,no_of_pages):
            Book.__init__(self ,title,pubname,author)
            self.price=price
            self.no_of_pages=no_of_pages
        def display(self):
            print("Title:",self.title)
            print("publisher:",self.pubname)
            print("author:",self.author)
            print("price:",self.price)
            print("no of pages:",self.no_of_pages)
b1=python("Wings Of Fire","SDK PUBLISHERS","A.P.J Abdul Kalaam","2000","1800")
b1.display()






