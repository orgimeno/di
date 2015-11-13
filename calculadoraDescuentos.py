#! /usr/bin/env python
# -*- coding: UTF-8 -*-
#Linea para importar GTK
from gi.repository import Gtk
#Clase que carga la interfaz
class MainGui:
        def __init__(self):
                #Variable que deja el nombre del glade
                self.gladefile = "calculadoraDescuentos.glade"
                self.glade = Gtk.Builder()
                #Variable que añade el glade con la variable gladefile
                self.glade.add_from_file(self.gladefile)
                #Variable que carga el window principal
                self.glade.get_object("window1").show_all()
                #Ejemplo de signal
                signals = { "on_descuentoCombobox_changed" : self.on_descuentoCombobox_changed,
                "precio_changed_cb" : self.precio_changed_cb,
                "gtk_widget_destroy" : self.cerrarVentana,
                "imagemenuitem10_activate_cb" : self.imagemenuitem10_activate_cb,
                "gtk_main_quit" : Gtk.main_quit,

                }
                self.precio= self.glade.get_object('precio')
                self.descuentoComboBox= self.glade.get_object('descuentoCombobox')
                self.total= self.glade.get_object('precioText')
                self.descontado= self.glade.get_object('descuentoText')
                #Linea que añade las señales de los botones(click,active, etc...)
                self.glade.connect_signals(signals)
                #Ejemplo para conseguir widget, se asigna a la variable entryVisor
                self.entryVisor = self.glade.get_object("entryVisor")
                #Para cargar la interfaz grafica llamando a MainGui y Gtk

        def on_descuentoCombobox_changed(self,widgets):
                self.calcular(widgets)

        def precio_changed_cb(self,widgets):
                self.calcular(widgets)

        def calcular(self,widgets):
                try:
                        float(self.precio.get_text())
                        precio=self.precio.get_text()
                        descuento=self.descuentoComboBox.get_active_text()
                        descuentoCalculo=float(precio)*(float(descuento)/100)
                        total=float(precio)-float(descuentoCalculo)
                        self.descontado.set_text(str(descuentoCalculo)+" €")
                        self.total.set_text(str(total)+" €")
                except:
                        self.total.set_text(" Introduce números")
                        self.descontado.set_text(" válidos")
                        self.glade.get_object("window2").show_all()
        def cerrarVentana(self, widgets):
                self.glade.get_object("window2").hide()

        def imagemenuitem10_activate_cb(self, widgets):
                self.glade.get_object("about").show_all()
                print("personajee")

if __name__== "__main__":
        MainGui()
        Gtk.main()
