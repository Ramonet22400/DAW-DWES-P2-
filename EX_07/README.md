## EX_07 


*Este hasta el momento ha sido el ejercicio que a supuesto mas tiempo y dificultad,
el problema que nos presentan, es el de hacer un tablero de ajedrez mediante bucles,
que este sea visible y se pueda imprimir en pantalla.*

Primero de todo crearemos el código de **HTML**, esto nos permitirá crear el entorno
visual para poder poner la tabla de ajedrez en la pantalla.

#### Los bucles del programa

La parte interesante y difícil del programa es está donde tendremos que crear los 
bucles que determinaran el color y la posición del cuadrado en el tablero.

Primero abriremos el lenguaje de **PHP** de esta forma podremos crear los bucles, a
continuación crearemos la variable *$altura*, y le pondremos un valor int de *9*.
Con esta variable podremos iniciar el primer bucle *for* y determinar las filas.

Seguidamente tendremos que hacer un *echo* con la etiqueta *<border = 1px>* así nos 
aseguramos que la tabla se imprima en el formato correcto.

Empezamos con el bucle, este estará formado por dos bucles *for*:

#### Primer Bucle

En este primer bucle, crearemos la variable *$fila* que responde a la cantidad de filas
que tendrá la tabla de ajedrez. El bucle realizará un loop tantas veces como el valor
de la variable *$altura*. De esta forma tendremos un tablero de 9 X 9.

| Ejemplo del bucle                        |
|------------------------------------------|
| for($fila = 1; $fila <= $altura; $fila++){ |
| echo("tr")                               |

El *echo* que se ve debajo del todo al terminar el bucle, este comando lo que hace es
imprimir en pantalla una fila en formato **HTML**.


#### Segundo Bucle

Este segundo bucle es el que imprimirá los recuadros del ajedrez, tanto posición como 
color. 

Para empezar abriremos el *for* y determinaremos la variable *$columna*, esta hará un
bucle tantas veces como el valor de *$columna*, que si bien recordamos tiene el valor
de *$altura*. (las medidas del tablero ya están determinadas).

| Ejemplo del segundo *for*                            |
|------------------------------------------------------|
| for($columna = 0;  $columna <= $altura; $columna++)  |

Es por eso que lo siguiente que haremos es crear una condición *if*, en este lo que 
haremos será escribir un condicional, este condicional está subdividido en dos partes
por un *||*.

***(En el tablero de ajedrez los cuadrados de color negro están en las posiciones pares y
los blancos en las impares.)***

La primera parte del condicional, preguntará si la *$fila* es impar y la *$columna*, en
cuyo caso imprima un cuadrado de color negro. 

| Ejemplo primer condicional *if*       |
|---------------------------------------|
| ($fila % 2 == 0 && $columna % 2 !=0)  |

**Impresión del recuadro negro** 
echo('<td style="padding: 10px; text-align:left; background-color:black;"> </td>');

En el caso de que esta condición no se cumpla pasaremos a la segunda parte del *if*,
esta preguntara lo opuesto. Si la *$fila* es impar y la *$columna* par, imprime por
pantalla el cuadrado de color blanco.


| Ejemplo segundo condicional *if*     |
|--------------------------------------|
| ($fila % 2 !=0 && $columna % 2 == 0) |

**Impresión del recuadro blanco**
echo('<td style="padding: 10px; text-align:left; background-color:white;"> </td>');

De esta forma si se repite este *for* con el *if* dentro finalmente imprimiremos un 
tablero en la pantalla del IDE. 





