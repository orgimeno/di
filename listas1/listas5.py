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
print("Cuantas palabras tendra la lista de palabras a eliminar")
numeroErase=raw_input("")
listaErase=[]
if(int(numeroErase)>0):
    for j in range(int(numeroErase)):
        listaErase += [raw_input("palabra "+str(j+1) +" de la lista: ")]
    print ("La lista de palabras a eliminar es: "+str(listaErase))
for k in listaErase:
    if k in lista:
        lista.remove(k)
print("La lista ahora es "+str(lista))
