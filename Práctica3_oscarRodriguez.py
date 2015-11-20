#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
#Clase que carga la interfaz
class MainGui:

        def __init__(self):
                #Variable que deja el nombre del glade
                self.gladefile = "Práctica3_oscarRodriguez.glade"
                self.glade = Gtk.Builder()
                #Variable que añade el glade con la variable gladefile
                self.glade.add_from_file(self.gladefile)
                #Variable que carga el window principal
                self.glade.get_object("window1").show_all()
                #Ejemplo de signal
                signals = { "aceptar_clicked_cb" : self.aceptar_clicked_cb,
                "gtk_main_quit" : Gtk.main_quit
                }
                #self.resultado= self.glade.get_object('entry1')
                #Linea que añade las señales de los botones(click,active, etc...)
                self.glade.connect_signals(signals)
                #Ejemplo para conseguir widget, se asigna a la variable entryVisor
                self.entryVisor = self.glade.get_object("entryVisor")
                #Para cargar la interfaz grafica llamando a MainGui y Gtk

        def aceptar_clicked_cb(self, widgets):
        	print "hosadfas"

if __name__== "__main__":
        MainGui()
        Gtk.main()
