#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Cuantas palabras tendra la lista")
numero=int(raw_input())
lista=[]
if(numero>0):
    for i in range(int(numero)):
        lista += [raw_input("palabra "+str(i+1) +" de la lista: ")]
    print ("La lista creada es: "+str(lista))
else:
    print("¡Imposible!")
print("Digame la palabra a buscar")
buscar=raw_input("")
veces=0
for i in lista:
    if buscar == i:
        veces +=1
if(veces!=0):
    print(buscar+" aparece "+ str(veces))
else:
    print("La palabra "+buscar+" no esta en la lista")

