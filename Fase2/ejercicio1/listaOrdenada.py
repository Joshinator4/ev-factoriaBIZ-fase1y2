"""Fase 2: Evaluación técnica inicial.
El objetivo de esta fase es crear algo de código sencillo para evaluar la
creatividad sencilla y la forma de proceder. Si crees que falta información para
resolver algún ejercicio, se creativo, queda de tu parte hacerlo como lo
consideres oportuno. Se ha añadido la posibilidad de crear una lista pidiendo los datos al usuario,
la cual será mostrada ordenada una vez el usuario haya introducido 0 (saldrá del bucle)"""


lista:list = [16,9,15,36,1,5,56,90,30,25]

print(f"Mostrando la lista sin ordenar: {lista}")
lista.sort()
print(f"Mostrando la lista ya ordenada: {lista}")

listaAgregar = []

print("Añade a la lista los numeros deseados, cuando quieras terminar añade el 0 para salir")
while True:
    try:
        listaAgregar.append(int(input("Añade un numero ->  ")))
    except ValueError:
        print("Introduce un número correcto")
    if listaAgregar[len(listaAgregar)-1] == 0:
        break

listaAgregar.sort()
print(f"Mostrando la lista agregada ordenada de forma ascendente {listaAgregar}")