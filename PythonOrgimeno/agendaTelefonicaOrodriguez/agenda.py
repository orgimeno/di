#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
import sqlite3
#Clase que carga la interfaz
class MainGui:
        conex=sqlite3.connect('agendas')
        c=conex.cursor()

        def __init__(self):
                #Variable que deja el nombre del glade
                self.gladefile = "agenda.glade"
                self.glade = Gtk.Builder()
                #Variable que añade el glade con la variable gladefile
                self.glade.add_from_file(self.gladefile)
                #Variable que carga el window principal
                self.glade.get_object("main").show_all()
                #Ejemplo de signal
                signals = { "aceptar_clicked_cb" : self.aceptar_clicked_cb,
                "aceptar2_clicked_cb" : self.confirm,
                "noAceptar_clicked_cb" : self.noConfirm,
                "button1_clicked_cb" : self.listar,
                "listado_destroy_cb" : self.cerrarListar,
                "gtk_main_quit" : Gtk.main_quit
                }
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
                

        def aceptar_clicked_cb(self, widgets):
                self.user= self.user1.get_text()
                self.password= self.password1.get_text()
                self.email= self.email1.get_text()
                self.name= self.name1.get_text()
                self.ape= self.ape1.get_text()
                self.address= self.address1.get_text()
                self.glade.get_object("confirm").show_all()

        def confirm(self, widgets):
                try:
                        registro=(self.user, self.password, self.email, self.name, self.ape, self.address)
                        self.c.execute('insert into tusuario (usuario, password, email, nombre, apellido, direccion) values (?,?,?,?,?,?)',(registro))
                        self.conex.commit()                        
                        self.noConfirm(self)
                except sqlite3.Error, e:
                        print str(e)

        def noConfirm(self, widgets):
                self.glade.get_object("confirm").hide()

        def listar(self, widgets):
                self.store = Gtk.ListStore(int, str, str, str, str, str, str)
                
                try:
                        for row in self.c.execute('SELECT * FROM tusuario'):
                                tree_iter = self.store.append(row)
                except sqlite3.Error as e:
                        print e
                        self.glade.get_object("error").show_all()
                self.treeView.set_model(self.store)
                renderer = Gtk.CellRendererText()
                columnId = Gtk.TreeViewColumn("Id", renderer, text=0)
                columnUsuario = Gtk.TreeViewColumn("Usuario", renderer, text=1)
                columnContrasena = Gtk.TreeViewColumn("Contrasena", renderer, text=2)
                columnEmail = Gtk.TreeViewColumn("Email", renderer, text=3)
                columnNombre = Gtk.TreeViewColumn("Nombre", renderer, text=4)
                columnApellidos = Gtk.TreeViewColumn("Apellidos", renderer, text=5)
                columnDireccion = Gtk.TreeViewColumn("Direccion", renderer, text=6)
                self.treeView.append_column(columnId)
                self.treeView.append_column(columnUsuario)
                self.treeView.append_column(columnContrasena)
                self.treeView.append_column(columnEmail)
                self.treeView.append_column(columnNombre)
                self.treeView.append_column(columnApellidos)
                self.treeView.append_column(columnDireccion)
                self.glade.get_object("listado").show_all()

        def cerrarListar(self, widgets):
                self.glade.get_object("listado").hide()
                        


if __name__== "__main__":
        #Para cargar la interfaz grafica llamando a MainGui y Gtk
        MainGui()
        Gtk.main()
