## EX_03

*En este ejercicio lo que nos piden que haga el programa, es asociar el nombre de varios países (array) 
con su código alfa-3 además de con su código numérico. Y que luego lo escribamos por pantalla.*

Igual que el ejercicio anterior (EX_02) dividiremos el programa en dos partes, a forma de que sea más 
entendible:

* Primera parte: Lenguaje **PHP**, crearemos un array asociativo.
* Segunda parte: Dos lenguajes **PHP** y **HTML**, en esta parte crearemos la lista y el programa.

#### Primera Parte

Crearemos el array asociativo, de la siguiente forma: 

|Ejemplo Array|
|---|
|"BI" => ["Nombre" => "Burundi", "Alfa" => "BI", "Code" =>"108"]|


De esta forma el array cumple tres funciones: asociar el nombre del país al valor *"Nombre"*, asociar
el alfa-3 del mismo país al valor *"Alfa"* y por última el código numérico al valor *"Code"*.

#### Segunda Parte

En esta parte del programa lo que haremos en primer lugar es crear una lista con **HTML**, creada la lista
abriremos el lenguaje **PHP** y creamos un *foreach* este realizara una llamada al array y lo recorrerá 
todo adjudicando a cada valor dentro de la variable *$id*.

* El valor *"Nombre"* a la variable *$nombre*.
* El valor *"Alfa"* a la variable *$alfa*.
* El valor *"Code"* a la variable *$code*.

Luego por ultimo imprimiremos en pantalla en formato lista gracias a **HTML**, las correspondientes variables
con el país, el comando quedaria tal que así: 

|Ejemplo echo con las variables|
|---|
| echo 'El país '.$nombre.' utiliza el codigo alfa-3 '.$alfa. ' con codigo numérico: '.$code.'|








