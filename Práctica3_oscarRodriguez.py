#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
import sqlite3
#Clase que carga la interfaz
class MainGui:
        conex=sqlite3.connect('tEjercicio1')
        c=conex.cursor()
        user= ""
        password= ""
        email= ""
        name= ""
        ape= ""
        address= ""

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

                #Entradas
                self.user= self.glade.get_object('entryUsuario')
                self.password= self.glade.get_object('entryPass')
                self.email= self.glade.get_object('entryEmail')
                self.name= self.glade.get_object('entryNombre')
                self.ape= self.glade.get_object('entryApellidos')
                self.address= self.glade.get_object('entryDireccion')

        def aceptar_clicked_cb(self, widgets):
                self.user= self.user.get_text()
                self.password= self.password.get_text()
                self.email= self.email.get_text()
                self.name= self.name.get_text()
                self.ape= self.ape.get_text()
                self.address= self.address.get_text()
                registro=(self.user, self.password, self.email, self.name, self.ape, self.address)
                try:
                        self.c.execute('insert into tusuario (usuario, password, email, nombre, apellido, direccion) values (?,?,?,?,?,?)',(registro))
                        print str(registro)
                        self.conex.commit()                        
                except sqlite3.Error, e:
                        mensaje="Error en la insercción "
                        print str(e)
                        


if __name__== "__main__":
        #Para cargar la interfaz grafica llamando a MainGui y Gtk
        MainGui()
        Gtk.main()
