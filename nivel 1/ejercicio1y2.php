<?php
//ejercicio 1
//Define una variable de cada tipo: integer ,  double ,  string y boolean . Imprímelas por pantalla.
//Después crea una constante que incluya tu nombre y muéstralo en formato título por pantalla.

// definición de variables de diferentes tipos
define("EJERCICIO1", "Ejercicio 1");

$numero_Entero = 25;                // variable tipo integer
$numero_Decimal = 3.14;             // variable tipo double
$texto = "Hola PHP";               // variable tipo string
$es_Verdadero = true;              // variable tipo boolean

// impresión 
echo "<h1>" . EJERCICIO1 . "</h1>";

echo "Número entero: " . $numero_Entero . "<br>";
echo "Número decimal: " . $numero_Decimal . "<br>";
echo "Texto: " . $texto . "<br>";
echo "Booleano: " . ($es_Verdadero ? 'true' : 'false') . "<br>";

// definición de constante con nombre
define("NOMBRE", "Nando");

// mostrar nombre en formato título
echo "<h1>" . NOMBRE . "</h1>";
?>

<?php
//ejercicio 2
/*Imprime por pantalla " Hello, World! " utilizando una variable. Después:

Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
Imprime por pantalla el tamaño (longitud) de la variable.
Imprime por pantalla el string en orden inverso de caracteres.
Crea una nueva variable con el contenido “ Este es el curso de PHP ” e imprime por pantalla la concatenación de ambos strings.*/

// definir variable con "hello, world!"
define("EJERCICIO2", "Ejercicio 2");
$saludo = "Hello, World!";

// imprimir el string original
echo "<h1>" . EJERCICIO2 . "</h1>";
echo "String original: " . $saludo . "<br>";

// convertir a mayúsculas usando strtoupper()
$mayusculas = strtoupper($saludo);
echo "En mayúsculas: " . $mayusculas . "<br>";

// obtener longitud del string usando strlen()
$longitud = strlen($saludo);
echo "Longitud del string: " . $longitud . "<br>";

// invertir el string usando strrev()
$invertido = strrev($saludo);
echo "String invertido: " . $invertido . "<br>";

// crear nueva variable y concatenar
$curso = "Este es el tema 2 del Sprint 1 con PHP";
$resultado = $saludo . " " . $curso;
echo "Strings concatenados: " . $resultado . "<br>";



?>

