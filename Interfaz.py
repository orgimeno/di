#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
#Clase que carga la interfaz
class MainGui:
        num1=0
        num2=0
        operador=""
        primero=True
        def __init__(self):
                #Variable que deja el nombre del glade
                self.gladefile = "oscarRodriguez.glade"
                self.glade = Gtk.Builder()
                #Variable que añade el glade con la variable gladefile
                self.glade.add_from_file(self.gladefile)
                #Variable que carga el window principal
                self.glade.get_object("window1").show_all()
                #Ejemplo de signal
                signals = { "button0_clicked_cb" : self.button0_clicked_cb,
                "button1_clicked_cb" : self.button1_clicked_cb,
                "button2_clicked_cb" : self.button2_clicked_cb,
                "button3_clicked_cb" : self.button3_clicked_cb,
                "button4_clicked_cb" : self.button4_clicked_cb,
                "button5_clicked_cb" : self.button5_clicked_cb,
                "button6_clicked_cb" : self.button6_clicked_cb,
                "button7_clicked_cb" : self.button7_clicked_cb,
                "button8_clicked_cb" : self.button8_clicked_cb,
                "button9_clicked_cb" : self.button9_clicked_cb,
                "buttonResultado_clicked_cb" : self.buttonResultado_clicked_cb,
                "buttonComa_clicked_cb" : self.buttonComa_clicked_cb,
                "buttonPor_clicked_cb" : self.buttonPor_clicked_cb,
                "buttonMas_clicked_cb" : self.buttonMas_clicked_cb,
                "buttonMenos_clicked_cb" : self.buttonMenos_clicked_cb,
                "buttonDiv_clicked_cb" : self.buttonDiv_clicked_cb,
                "buttonClear_clicked_cb" : self.buttonClear_clicked_cb,
                "gtk_main_quit" : Gtk.main_quit
                }
                self.resultado= self.glade.get_object('entry1')
                #Linea que añade las señales de los botones(click,active, etc...)
                self.glade.connect_signals(signals)
                #Ejemplo para conseguir widget, se asigna a la variable entryVisor
                self.entryVisor = self.glade.get_object("entryVisor")
                #Para cargar la interfaz grafica llamando a MainGui y Gtk
        def button0_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(0)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(0)
                        self.resultado.set_text(self.num2)


        def button1_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(1)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(1)
                        self.resultado.set_text(self.num2)


        def button2_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(2)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(2)
                        self.resultado.set_text(self.num2)


        def button3_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(3)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(3)
                        self.resultado.set_text(self.num2)


        def button4_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(4)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(4)
                        self.resultado.set_text(self.num2)


        def button5_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(5)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(5)
                        self.resultado.set_text(self.num2)


        def button6_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(6)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(6)
                        self.resultado.set_text(self.num2)


        def button7_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(7)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(7)
                        self.resultado.set_text(self.num2)


        def button8_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(8)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(8)
                        self.resultado.set_text(self.num2)


        def button9_clicked_cb(self,widgets):
                if self.primero:
                        self.num1=self.resultado.get_text()+str(9)
                        self.resultado.set_text(self.num1)
                else:
                        self.num2=self.resultado.get_text()+str(9)
                        self.resultado.set_text(self.num2)


        def buttonComa_clicked_cb(self,widgets):
                if self.primero:
                        if "." not in self.resultado.get_text():
                                self.resultado.set_text(str(self.num1)+".")
                else:
                        if "." not in self.resultado.get_text():
                                self.resultado.set_text(str(self.num2)+".")

        def buttonPor_clicked_cb(self,widgets):
                self.resultado.set_text(str(""))
                self.primero=False
                self.operador="*"
        def buttonMas_clicked_cb(self,widgets):
                self.resultado.set_text(str(""))
                self.primero=False
                self.operador="+"
        def buttonMenos_clicked_cb(self,widgets):
                self.resultado.set_text(str(""))
                self.primero=False
                self.operador="-"
        def buttonDiv_clicked_cb(self,widgets):
                self.resultado.set_text(str(""))
                self.primero=False
                self.operador="/"
        def buttonResultado_clicked_cb(self,widgets):
                
                if self.operador == "+":
                        total=float(self.num1)+float(self.num2)
                        self.num2=0
                        self.num1=total
                        self.resultado.set_text(str(total))
                if self.operador == "-":
                        total=float(self.num1)-float(self.num2)
                        self.num2=0
                        self.num1=total
                        self.resultado.set_text(str(total))
                if self.operador == "*":
                        total=float(self.num1)*float(self.num2)
                        self.num2=0
                        self.num1=total
                        self.resultado.set_text(str(total))
                if self.operador == "/":
                        total=float(self.num1)/float(self.num2)
                        self.num2=0
                        self.num1=total
                        self.resultado.set_text(str(total))
        def buttonClear_clicked_cb(self, widgets):
                self.resultado.set_text(str(""))
                self.num2=0
                self.num1=0

if __name__== "__main__":
        MainGui()
        Gtk.main()
