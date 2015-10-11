#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Digame un numero")
numero=input()
numeros=[]
numerosP=[]
for i in range(1,numero+1):
    numeros+=[i]
for j in numeros:
    for k in range(1,j):
        if k!=1 and j%k==0: 
            if j in numeros:
                numerosP+=[j]
for l in numeros:
    for m in numerosP:
        if m==l:
            if l in numeros:
                numeros.remove(l)
print("Primos hasta "+str(numero)+": "+str(numeros))
        
