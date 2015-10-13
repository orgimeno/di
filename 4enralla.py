'''

        =====================================================
        _____________________________________________________

                JUEGO DEL 4 EN RALLA PARA DOS JUGADORS
        _____________________________________________________
        
                JUGADOR 1 -> FICHA X
                JUGADOR 2 -> FICHA 0

                EL JUEGO SIMULA LA CAIDA DE LAS FICHAS

                    1 | 2 | 3 | 4 | 5 | 6 | 7
                      |   |   |   |   |   |
                      |   |   |   | X |   |
                      |   |   | X | 0 |   |
                      | 0 | X | 0 | 0 |   |
                      | X | 0 | X | 0 |   |

        =====================================================

'''



# Funcion para imprimir el array tablero en forma de cuadricula 
def pintarTablero():
    print('\n'.join(['|'.join(['{:1}'.format(item) for item in row])
          for row in tablero]))
# pintarTablero --





# Funcion para introducir ficha en la columna jugador 1
def introFicha1():

    print "====================================="
    print "         Turno: Jugador 1            "
    print "====================================="
    
    columna = raw_input("Introduce una fila: ")
    acabado = False
    
    while columna == "" or columna.isalpha() == True or int(columna) < 1 or int(columna) > 7:
        columna = raw_input("Introduce una fila: ")
    col = int(columna)-1
    i = 6

    ocupado = False
    
    while i > 0:
        if tablero[i][col] == "_" and ocupado == False:
            tablero[i][col] = "X"
            ocupado = True
        i -= 1
    pintarTablero()
    if ganarVertical(tablero, col) == True:
        acabado = True
    if ganarHorizontal(tablero) == True:
        acabado = True
    if ganarDiagonal(tablero) == True:
        acabado = True
    
    if acabado == False:
        introFicha2()
# introFicha() --





# Funcion para introducir ficha en la columna jugador 2
def introFicha2():

    print "====================================="
    print "         Turno: Jugador 2            "
    print "====================================="
    
    columna = raw_input("Introduce una fila: ")
    acabado = False
    
    while columna == "" or columna.isalpha() == True or int(columna) < 1 or int(columna) > 7:
        print columna.isalpha()
        columna = raw_input("Introduce una fila: ")

    col = int(columna)-1
    i = 6

    ocupado = False
    
    while i > 0:
        if tablero[i][col] == "_" and ocupado == False:
            tablero[i][col] = "O"
            ocupado = True
        i -= 1
    pintarTablero()
    if ganarVertical(tablero, col) == True:
        acabado = True
    if ganarHorizontal(tablero) == True:
        acabado = True
    if ganarDiagonal(tablero) == True:
        acabado = True
    
    if acabado == False:
        introFicha1()
# introFicha() --





# Funciona para comprobar 4 fichas seguidas en horizontal
def ganarHorizontal(tablero):
    for fila in range(len(tablero)):
        cadena = ""
        cadena = cadena.join(tablero[fila])
        if "XXXX" in cadena:
            print ""
            print "HAS GANADO JUGADOR 1"
            return True
        elif "OOOO" in cadena:
            print ""
            print "HAS GANADO JUGADOR 2"
            return True
# ganarHorizontal() --





# Funciona para comprobar 4 fichas seguidas en vertical
def ganarVertical(tablero, col):
   
    fichas = ""
    i = 6
    
    while i > 0:
        fichas += tablero[i][col]
        i -= 1
    
    if "XXXX" in fichas:
        print ""
        print "HAS GANADO JUGADOR 1"
        return True
    elif "OOOO" in fichas:
        print ""
        print "HAS GANADO JUGADOR 2"
        return True
# ganarVertical() --





# Funciona para comprobar 4 fichas seguidas en diagonal
def ganarDiagonal(t):

    d0 = t[4][0]+t[3][1]+t[2][2]+t[1][3]
    d1 = t[5][0]+t[4][1]+t[3][2]+t[2][3]+t[1][4]
    d2 = t[6][0]+t[5][1]+t[4][2]+t[3][3]+t[2][4]+t[1][5]
    d3 =         t[6][1]+t[5][2]+t[4][3]+t[3][4]+t[2][5]+t[1][6]
    d4 =                 t[6][2]+t[5][3]+t[4][4]+t[3][5]+t[2][6]
    d5 =                         t[6][3]+t[5][4]+t[4][5]+t[3][6]

    d = [d0,d1,d2,d3,d4,d5]
    
    for i in range(len(d)):
        if "XXXX" in d[i]:
            print ""
            print "HAS GANADO JUGADOR 1"
            return True
        elif "OOOO" in d[i]:
            print ""
            print "HAS GANADO JUGADOR 2"
            return True

    
    i0 = t[4][6]+t[3][5]+t[2][4]+t[1][3]
    i1 = t[5][6]+t[4][5]+t[3][4]+t[2][3]+t[1][2]
    i2 = t[6][6]+t[5][5]+t[4][4]+t[3][3]+t[2][2]+t[1][1]
    i3 =         t[6][5]+t[5][4]+t[4][3]+t[3][2]+t[2][1]+t[1][0]
    i4 =                 t[6][4]+t[5][3]+t[4][2]+t[3][1]+t[2][0]
    i5 =                         t[6][3]+t[5][2]+t[4][1]+t[3][0]
    
    inv = [i0,i1,i2,i3,i4,i5]

    for i in range(len(inv)):
        if "XXXX" in inv[i]:
            print ""
            print "HAS GANADO JUGADOR 1"
            return True
        elif "OOOO" in inv[i]:
            print ""
            print "HAS GANADO JUGADOR 2"
            return True
# ganarDiagonal() --



tablero = [
    ["1","2","3","4","5","6","7"],
    ["_","_","_","_","_","_","_"],
    ["_","_","_","_","_","_","_"],
    ["_","_","_","_","_","_","_"],
    ["_","_","_","_","_","_","_"],
    ["_","_","_","_","_","_","_"],
    ["_","_","_","_","_","_","_"]]

# inicio del juego
pintarTablero()
introFicha1()




