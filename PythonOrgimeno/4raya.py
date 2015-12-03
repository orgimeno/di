#! /usr/bin/env python
# -*- coding: UTF-8 -*-
import sys
import random



tablero=[['_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_' ],['_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_' ],['_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_' ],['_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_' ],['_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_' ],['_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_'+ '_' ]]

def mostrar(t):
    tc=range(9)
    tf=range(6)
    
    for f in tf:
          for c in tc:
              print(str(c))
              sys.stdout.write("|"+ t[f][c])
          sys.stdout.write("|"+str(f))
          print
    print "0 1 2 3 4 5 6 7 8"

mostrar(tablero)
