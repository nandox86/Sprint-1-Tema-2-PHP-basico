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
 * Función para verificar el grado de un estudiante según su nota
 * @param float $nota - Nota del estudiante (0-100)
 * @return string - Grado obtenido
 */
function verificarGrado($nota) {
    // Validar que la nota sea un número
    if (!is_numeric($nota)) {
        return "Error: La nota debe ser un número";
    }

    // Validar rango
    if ($nota < 0 || $nota > 100) {
        return "Error: La nota debe estar entre 0 y 100";
    }

    // Verificar el grado usando condicionales
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

// Pruebas incluyendo casos umbral y errores
echo "<h3>Verificación de Grados (Con casos umbral):</h3>";

// Array con casos de prueba
$casos_prueba = [
    // Casos de error
    -1,         // Menor que 0
    101,        // Mayor que 100
    "abc",      // No es número
    
    // Casos umbral
    0,          // Mínimo posible
    32.9,       // Casi tercera división
    33,         // Inicio tercera división
    44.9,       // Casi segunda división
    45,         // Inicio segunda división
    59.9,       // Casi primera división
    60,         // Inicio primera división
    100         // Máximo posible
];

// Probar cada caso
foreach ($casos_prueba as $nota) {
    echo "Nota: " . (is_numeric($nota) ? number_format($nota, 1) : $nota);
    echo " - Resultado: " . verificarGrado($nota) . "<br>";
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
 * Función que determina si Charlie muerde el dedo
 * Usa rand(0,1) para una probabilidad del 50%
 * @return bool - TRUE si muerde, FALSE si no muerde
 */
function isBitten() {
    return rand(0, 1) === 1;
}
// Pruebas
echo "<h3>Prueba de Mordidas de Charlie (Versión Simple):</h3>";
// Realizar 10 pruebas
for ($i = 1; $i <= 10; $i++) {
    echo "Intento $i: Charlie " . 
         (isBitten() ? "te mordió" : "no te mordió") . 
         " el dedo<br>";
}
 ?>