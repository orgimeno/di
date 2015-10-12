#! /usr/bin/env python
# -*- coding: UTF-8 -*-
print("Cálculo   de   términos   de   la   sucesión   U(n+1)=3.U(n)+1   si   n   es   impar   y U(n)=U(n)/2 si n es par. ")
print("Dígame el valor de U(0):")
u=input()
print("Dígame cuantos terminos quieres:")
terminos=input()
sucesion=[u]
for i in range(1,terminos):
    if u%2==0:
        u=u/2
        sucesion+=[u]
    else:
        u=(3*u)+1
        sucesion+=[u]
        
print("Los terminos de la sucesion son:"+str(sucesion))
