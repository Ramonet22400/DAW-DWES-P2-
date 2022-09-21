## EX_02

*En este ejercicio nos piden que creemos un vector que contenga nombres de los 
compañeros de clase, y que seguidamente lo imprimamos en formato lista, y finalmente
que mostremos el número total de compañeros*

Este ejercicio está dividido en dos partes, una de ellas es la parte escrita en **PHP**,
(que es donde se encuentra el array), y la segunda parte contiene dos lenguajes, tanto
**PHP** como **HTML** que nos permitirá crear la lista. 

#### Primera Parte

Lo primero que hemos hecho es crear un array que en este caso se llamara ***$alumnos***, este 
array como bien indica su nombre contiene el nombre de los compañeros de clase.

#### Segunda Parte

En esta parte del programa, el primer paso es el de abrir el lenguaje **HTML** y configurar una 
lista con el comando *<ul>*.Dentro del comando *<ul>* lo que haremos será abrir el **PHP**.

De esta forma tendremos código de **PHP** dentro de la lista de **HTML**, haremos un *foreach()*,
que esta función lo que hará es recorrer todo el array, lo escribimos de la siguiente forma: 

|Ejemplo|
|---|
| foreach($alumnos as $alumno);|

Recorre el array y cada valor que encuentra lo asocia a la variable *$alumno*, de esta forma luego 
al hacer *echo*, somos capaces de hacer una lista con todas las variables de *$alumno*.

Para acabar tocará contar la cantidad de compañeros de clase, tendremos que crear la función *count()*,
que lo que hará es simplemente contar la cantidad de valores del array.
