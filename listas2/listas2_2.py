#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Digame un numero")
numero=input()
divisores=[]
for i in range(1,numero+1):
    if numero%i==0:
        divisores+=[i]
print(str(numero)+" tiene "+str(len(divisores))+" divisores: "+str(divisores))        
