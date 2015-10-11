#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Cuantas palabras tendra la lista")
numero=int(raw_input())
lista=[]
if(int(numero)>0):
    for i in range(int(numero)):
        lista += [raw_input("palabra "+str(i+1) +" de la lista: ")]
    print ("La lista creada es: "+str(lista))
else:
    print("¡Imposible!")
print("Escriba la palabra a eliminar")
eraseWord=raw_input("")
if eraseWord in lista:
    lista.remove(eraseWord)
print("La lista ahora es "+str(lista))
