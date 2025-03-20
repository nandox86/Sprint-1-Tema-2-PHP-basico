<?php
/* Ejercicio 3
a) Declara dos variables X e Y de tipo int, dos variables N y M de tipo double y asigna a cada una un valor. 
A continuación, muestra por pantalla para X e Y :

El valor de cada variable.
La suma.
El resto.
El producto.
El módulo.
Por N y M realizarás lo mismo.

Para todas las variables (X, Y, N, M):

El doble de cada variable.
La suma de todas las variables.
El producto de todas las3 variables.
b) Crea una función  Calculadora que entre dos números por parámetro, y en un tercer parámetro te permita realizar 
la suma, la resta, la multiplicación o la división de los dos números.
*/ 
define("EJERCICIO3", "Ejercicio 3");
echo "<h1>" . EJERCICIO3 . "</h1>";

// a) operaciones con variabls enteras y decimales
// declaración de variables
$x = 10;          // variable entera x
$y = 5;           // variable entera z
$n = 3.5;         // variable decimal N
$m = 2.5;         // variable decimal M

// Función para mostrar operaciones
function mostrarOperaciones(int $num1, int $num2, string $tipo) {
    echo "<h3>Operaciones con variables $tipo:</h3>";
    echo "Valor 1: $num1 <br>";
    echo "Valor 2: $num2 <br>";
    echo "Suma: " . ($num1 + $num2) . "<br>";
    echo "Resta: " . ($num1 - $num2) . "<br>";
    echo "Producto: " . ($num1 * $num2) . "<br>";
    
    // validación para evitar división por cero
    if ($num2 != 0) {
        echo "División: " . ($num1 / $num2) . "<br>";
    } else {
        echo "División: No se puede dividir por cero<br>";
    }
    
    // módulo solo para enteros
    if (is_int($num1) && is_int($num2)) {
        echo "Módulo: " . ($num1 % $num2) . "<br>";
    }
}

// mostrar operaciones para x,Y y N,M
mostrarOperaciones($x, $y, "enteras (X,Y)");
mostrarOperaciones($n, $m, "decimales (N,M)");

// mostrar doble de cada variabl.
echo "<h3>Doble de cada variable:</h3>";
echo "Doble de X: " . ($x * 2) . "<br>";
echo "Doble de Y: " . ($y * 2) . "<br>";
echo "Doble de N: " . ($n * 2) . "<br>";
echo "Doble de M: " . ($m * 2) . "<br>";

// suma y producto de todas las variables
$suma_total = $x + $y + $n + $m;
$producto_total = $x * $y * $n * $m;
echo "<h3>Operaciones con todas las variables:</h3>";
echo "Suma total: $suma_total <br>";
echo "Producto total: $producto_total <br>";

// b) función calculadora
function calculadora($num1, $num2, $operacion) {
    switch (strtolower($operacion)) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion':
            return $num1 * $num2;
        case 'division':
            return $num2 != 0 ? $num1 / $num2 : "Error: División por cero";
        default:
            return "Operación no válida";
    }
}

//ejemplo de uso de la calculadora
echo "<h3>Prueba de Calculadora:</h3>";
echo "Suma: " . calculadora(10, 5, 'suma') . "<br>";
echo "División: " . calculadora(10, 5, 'division') . "<br>";
?>



<?php
/* Ejercicio 4
Haz un programa que implemente una función en la que se cuente hasta un número determinado. 
Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. 
Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…). 
La cuenta debe mostrarse por pantalla paso a paso.
*/
define("EJERCICIO4", "Ejercicio 4");
echo "<h1>" . EJERCICIO4 . "</h1>";

//función para contar con parámetros por defecto
function contarHasta($limite = 10, $paso = 1) {
    //validación de parámetros
    if (!is_numeric($limite) || !is_numeric($paso)) {
        return "Error: Los parámetros deben ser números";
    }
    
    if ($paso <= 0) {
        return "Error: El paso debe ser un número positivo";
    }

    $resultado = "";
    //bucle para contar
    for ($i = 0; $i <= $limite; $i += $paso) {
        $resultado .= $i . " ";
    }
    return $resultado;
}

//ejemplos
echo "<h3>Ejemplos de conteo:</h3>";
echo "Contando hasta 10 de 1 en 1: <br>";
echo contarHasta() . "<br><br>";

echo "Contando hasta 20 de 2 en 2: <br>";
echo contarHasta(20, 2) . "<br><br>";

echo "Contando hasta 15 de 3 en 3: <br>";
echo contarHasta(15, 3);
?>



