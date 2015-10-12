#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Cálculo de términos de una sucesión U(n+1)=a.U(n)+b.")
print("Digame el valor de a:")
a=input()
print("Digame el valor de b:")
b=input()
print("Dígame el valor de U(0):")
u=input()
print("Dígame cuantos terminos quieres:")
terminos=input()
sucesion=[u]
for i in range(1,terminos):
    u=(a*u)+b
    sucesion+=[u]
print("Los terminos de la sucesion son:"+str(sucesion))
