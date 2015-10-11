#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Cuantas palabras tendra la lista")
numero=raw_input("")
lista=[]
if(int(numero)>0):
    for i in range(int(numero)):
        lista += [raw_input("palabra "+str(i+1) +" de la lista: ")]
    print ("La lista creada es: "+str(lista))
else:
    print("¡Imposible!")
listaNoRepeat=[]
for j in lista:
    if j not in listaNoRepeat:
        listaNoRepeat.append(j)
print("La lista sin repeticiones es: "+str(listaNoRepeat))
