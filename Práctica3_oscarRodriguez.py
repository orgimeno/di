#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
import sqlite3
#Clase que carga la interfaz
class MainGui:
        conex=sqlite3.connect('tEjercicio')
        c=conex.cursor()

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
                "aceptar2_clicked_cb" : self.confirm,
                "noAceptar_clicked_cb" : self.noConfirm,
                "button1_clicked_cb" : self.listar,
                "gtk_main_quit" : Gtk.main_quit
                }
                #self.resultado= self.glade.get_object('entry1')
                #Linea que añade las señales de los botones(click,active, etc...)
                self.glade.connect_signals(signals)

                #Entradas
                self.user1= self.glade.get_object('entryUsuario')
                self.password1= self.glade.get_object('entryPass')
                self.email1= self.glade.get_object('entryEmail')
                self.name1= self.glade.get_object('entryNombre')
                self.ape1= self.glade.get_object('entryApellidos')
                self.address1= self.glade.get_object('entryDireccion')
                self.treeView = self.glade.get_object('treeview1')
                                self.store = Gtk.ListStore(str, str, str, str, str, str)
                
                try:
                        for row in c.execute('SELECT * FROM tusuario'):
                                tree_iter = self.store.append(row)
                                
                except sqlite3.Error as e:
                        print e

                self.treeView.set_model(self.store)
                renderer = Gtk.CellRendererText()
                columnUsuario = Gtk.TreeViewColumn("Usuario", renderer, text=0)
                columnContrasena = Gtk.TreeViewColumn("Contrasena", renderer, text=0)
                columnEmail = Gtk.TreeViewColumn("Email", renderer, text=0)
                columnNombre = Gtk.TreeViewColumn("Nombre", renderer, text=0)
                columnApellidos = Gtk.TreeViewColumn("Apellidos", renderer, text=0)
                columnDireccion = Gtk.TreeViewColumn("Direccion", renderer, text=0)
                self.treeViewListaUsuarios.append_column(columnUsuario)
                self.treeViewListaUsuarios.append_column(columnContrasena)
                self.treeViewListaUsuarios.append_column(columnEmail)
                self.treeViewListaUsuarios.append_column(columnNombre)
                self.treeViewListaUsuarios.append_column(columnApellidos)
                self.treeViewListaUsuarios.append_column(columnDireccion)

        def aceptar_clicked_cb(self, widgets):
                user= self.user1.get_text()
                password= self.password1.get_text()
                email= self.email1.get_text()
                name= self.name1.get_text()
                ape= self.ape1.get_text()
                address= self.address1.get_text()
                self.glade.get_object("window2").show_all()

        def confirm(self, widgets):
                try:
                        registro=(self.user, self.password, self.email, self.name, self.ape, self.address)
                        self.c.execute('insert into tusuario (usuario, password, email, nombre, apellido, direccion) values (?,?,?,?,?,?)',(registro))
                        self.conex.commit()                        
                        self.noConfirm(self)
                except sqlite3.Error, e:
                        print str(e)

        def noConfirm(self, widgets):
                self.glade.get_object("window2").hide()

        def listar(self, widgets):
                print ""
                        


if __name__== "__main__":
        #Para cargar la interfaz grafica llamando a MainGui y Gtk
        MainGui()
        Gtk.main()
