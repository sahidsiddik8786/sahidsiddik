#Create a Bank account with members account number, name, type of account
#and balance. Write constructor and methods to deposit at the bank
#and withdraw an 	amount from the bank
class Bank_Account():
    def __init__(self):
        self.balance= 0
        print("hello!! welcome to depsit and withdrawal section")
    def deposit(self):
        amount=float(input("enter the amount to deposit:"))
        self.balance+=amount
        print("\n amount deposited:",amount)
    def withdraw(self):
        amount = float(input("enter the amount to withdraw:"))
        if self.balance>=amount:
            self.balance-=amount
            print("\n withdrawed:", amount)
        else:
            print("\n insufficent balance!!")
    def display(self):
        print("\n net available balance=",self.balance)
a=Bank_Account()
a.deposit()
a.withdraw()
a.display()