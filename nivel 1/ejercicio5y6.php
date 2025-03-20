<?php
/*Ejercicio 5
Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

Condiciones:

Si la nota es 60% o más, el grado debería ser Primera División.
Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
Si la nota es menor a 33%, el estudiante reprobará.
*/
define("EJERCICIO5", "Ejericio 5");
echo "<h1>" . EJERCICIO5 . "</h1>";

/**
 * función para verificar el grado de un estudiante según su nota
 * @param float $nota - Nota del estudiante (0-100)
 * @return string - Grado obtenido
 */
function verificarGrado($nota) {
    // Validar que la nota sea un número entre 0 y 100
    if (!is_numeric($nota) || $nota < 0 || $nota > 100) {
        return "Error: La nota debe ser un número entre 0 y 100";
    }

    //verificar el grado usando condicionales
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45) {
        return "Segunda División";
    } elseif ($nota >= 33) {
        return "Tercera División";
    } else {
        return "Reprobado";
    }
}

//ejemplo o impresion
echo "<h3>Verificación de Grados:</h3>";

//array de notas para probar
$notas_prueba = [85, 55, 40, 25, 101, -5];

//probar cada nota
foreach ($notas_prueba as $nota) {
    echo "Nota: $nota% - Resultado: " . verificarGrado($nota) . "<br>";
}
?>



<?php
/*Ejercicio 6
Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.
Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.
Importante
Consejo: puede que la función rand () te resulte útil.
 */
define("EJERCICIO6", "Ejercicio 6");
echo "<h1>" . EJERCICIO6 . "</h1>";

/**
 * función que determina si charlie muerde el dedo
 * @return bool - true si muerde false si no muerde
 */
function isBitten() {
    //generar número aleatorio entre 1 y 100
    $probabilidad = rand(1, 100);
    
    //retorna true si el número es <= 50 (50% de probabilidad)
    return $probabilidad <= 50;
}

//función para mostrar resultados de manera más legible
function mostrarResultado($intento) {
    $resultado = isBitten();
    echo "Intento $intento: Charlie " . 
         ($resultado ? "te mordió" : "no te mordió") . 
         " el dedo<br>";
}

//realizar pruebas múltiples para demostrar la probabilidad
echo "<h3>Prueba de Mordidas de charlie:</h3>";

//realizar 10 intentos
for ($i = 1; $i <= 10; $i++) {
    mostrarResultado($i);
}

//estadística simple
$mordidas = 0;
$intentos = 1000;

//realizr prueba estadística con más intentos
for ($i = 0; $i < $intentos; $i++) {
    if (isBitten()) {
        $mordidas++;
    }
}

//mustrar estadísticas
$porcentaje = ($mordidas / $intentos) * 100;
echo "<br>Estadística de $intentos intentos:<br>";
echo "Mordidas: $mordidas (" . number_format($porcentaje, 2) . "%)";
?>