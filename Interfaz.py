#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
#Clase que carga la interfaz
class MainGui:
        def __init__(self):
                #Variable que deja el nombre del glade
                self.gladefile = "calculadora.glade"
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
                "button10_clicked_cb" : self.button10_clicked_cb,
                "buttonComa_clicked_cb" : self.buttonComa_clicked_cb,
                "buttonPor_clicked_cb" : self.buttonPor_clicked_cb,
                "buttonMas_clicked_cb" : self.buttonMas_clicked_cb,
                "buttonMenos_clicked_cb" : self.buttonMenos_clicked_cb,
                "buttonDiv_clicked_cb" : self.buttonDiv_clicked_cb,
                "gtk_main_quit" : Gtk.main_quit
                }
                self.resultado= self.glade.get_object('entry1')
                #Linea que añade las señales de los botones(click,active, etc...)
                self.glade.connect_signals(signals)
                #Ejemplo para conseguir widget, se asigna a la variable entryVisor
                self.entryVisor = self.glade.get_object("entryVisor")
                #Para cargar la interfaz grafica llamando a MainGui y Gtk
        def button0_clicked_cb(self,widgets):
                print("hola mundo")

        def button1_clicked_cb(self,widgets):
                self.resultado.set_text(str(1))
        def button2_clicked_cb(self,widgets):
                print("1")
        def button3_clicked_cb(self,widgets):
                print("1")
        def button4_clicked_cb(self,widgets):
                print("1")
        def button5_clicked_cb(self,widgets):
                print("1")
        def button6_clicked_cb(self,widgets):
                print("1")
        def button7_clicked_cb(self,widgets):
                print("1")
        def button8_clicked_cb(self,widgets):
                print("1")
        def button9_clicked_cb(self,widgets):
                print("1")
        def button10_clicked_cb(self,widgets):
                print("1")        
        def buttonComa_clicked_cb(self,widgets):
                print("1")
        def buttonPor_clicked_cb(self,widgets):
                print("1")
        def buttonMas_clicked_cb(self,widgets):
                print("1")
        def buttonMenos_clicked_cb(self,widgets):
                print("1")
        def buttonDiv_clicked_cb(self,widgets):
                print("1")
        def window1_destroy_cb(self,widgets):
                print("5")




if __name__== "__main__":
        MainGui()
        Gtk.main()
