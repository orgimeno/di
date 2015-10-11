#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Digame un numero")
numero=input()
numeros=[]
sobrantes=[]
for i in range(1,numero+1):
    numeros+=[i]
for j in range(1,len(numeros)+1):
    for k in range(1,j):
        if k!=1 and j%k==0 and j not in sobrantes:
            sobrantes+=[j]
list(set(sobrantes))
for l in numeros:
    for k in sobrantes:
        print(str(k)+str(l))
        if k==l:
            numeros.remove(k)
print("primos: "+str(sobrantes))
