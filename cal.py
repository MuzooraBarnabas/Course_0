from tkinter import*
from tkinter import ttk

app = Tk()
app.title('MjB CALC')
app.geometry('400x200')


Label(app, text="Enter number to calculate", font=('arial', 15, 'bold')).pack()

def calcl(*args):
	answ = eval(e.get())
	ans.config(text="Answer = "+str(answ))

	

e = ttk.Entry(app, justify=RIGHT)
e.pack()
e.config(font=('arial',15,'bold'))

bn = ttk.Button(app, text="Calculate", command=calcl)
bn.pack(pady=10)
e.bind("<Return>",calcl)

ans = Label(app, text="Answer = ", font=('arial', 15, 'bold'))
ans.pack()



app.mainloop()