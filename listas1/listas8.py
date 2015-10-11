#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Cuantas palabras tendra la primera lista")
numero=raw_input("")
lista=[]
if(int(numero)>0):
    for i in range(int(numero)):
        lista += [raw_input("palabra "+str(i+1) +" de la lista: ")]
    print ("La priemra lista creada es: "+str(lista))
else:
    print("¡Imposible!")
    
print("Cuantas palabras tendra la segunda lista")
numero2=raw_input("")
lista2=[]
if(int(numero2)>0):
    for j in range(int(numero2)):
        lista2 += [raw_input("palabra "+str(j+1) +" de la lista: ")]
    print ("La segunda lista creada es: "+str(lista2))
else:
    print("¡Imposible!")
listaRepeat=[]
for k in lista:
    if k in lista2:
        listaRepeat+=[k]
print("Palabras que aparecen en las dos listas: "+ str(listaRepeat))
lista1solo=[]
for l in lista:
    if l not in lista2:
        lista1solo+=[l]
lista2solo=[]
for m in lista2:
    if m not in lista:
        lista2solo+=[m]
print("Palabras que aparecen solo en la lista primera: "+str(lista1solo))
print("Palabras que aparecen solo en la lista segunda: "+str(lista2solo))
listaTotal=[]
for n in lista:
    if n not in lista2:
        listaTotal+=[n]
for p in lista2:
    if p not in listaTotal:
        listaTotal.append(p)
print("Todas las palabras: "+str(listaTotal))
