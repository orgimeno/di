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
print("Sustituir la palabra")
oldWord=raw_input("")
print("por la palabra ")
newWord=raw_input("")

for i in range(len(lista)):
    if oldWord == lista[i]:
        lista[i]=newWord
print("La lista ahora es "+str(lista))
