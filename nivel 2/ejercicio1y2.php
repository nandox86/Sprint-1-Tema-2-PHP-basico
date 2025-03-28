<?php
/**- Ejercicio 1
Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 centimps*/
define("EJERCICIO1", "Ejercicio 1");
 echo "<h1>" . EJERCICIO1 . "</h1>";


 function calcularCostoLlamada($duracion) {
     // validar que la duracion sea un numero entero posit
     if (!is_numeric($duracion) || $duracion < 0) {
         return "error: la duracion debe ser un numero positivo";
     }
 
     // si la duracion es < a 3 minutos, el costo es fijo de 10 centimos
     if ($duracion <= 3) {
         return 0.10; // 10 centimos
     }
 
     // si la duracion es > a 3 minutos, calcular el costo adicional
     $minutosAdicionales = $duracion - 3; // calcular los minutos adicionales
     $costoAdicional = $minutosAdicionales * 0.05; // cada minuto adicional cuesta 5 centimos
     $costoTotal = 0.10 + $costoAdicional; // sumar el costo base de 10 centimos
 
     return $costoTotal; 
 
 // ejemplo 
 $duracionLlamada = 5; // duracion de la llamada en minutos
 echo "el costo de la llamada es: " . calcularCostoLlamada($duracionLlamada) . " euros\n";
?>


<?php
/**- Ejercicio 2
Imagina que estamos en una tienda donde se vende:
Chocolate: 1 euro
Chiclos: 0,50 euros
Caramelos: 1,50 euros
Implementa un programa que permita añadir cálculos a un total de compras de ese tipo. Por ejemplo, que si compramos:
2 chocolates, 1 de chicles y 1 de caramelos, tengamos un programa que permita ir añadiendo los subtotales a un total, 
tal que así:
función(2 chocolates) + función(1 de chicles) + función(1 de carmelos) = 2 + 0.5 + 1.5
Siendo, por tanto, el total, 4.*/

define("EJERCICIO2", "Ejercicio 2");
 echo "<h1>" . EJERCICIO2 . "</h1>";

 
 // funcion para calcular el subtotal de un producto
 function calcularSubtotal($producto, $cantidad) {
     // validar que la cantidad sea un numero entero positivo (condicion)
     if (!is_numeric($cantidad) || $cantidad < 0) {
         return "error: la cantidad debe ser un numero positivo";
     }
 
     
     $precios = [
         "chocolate" => 1.00, 
         "chicles" => 0.50,  
         "caramelos" => 1.50  
     ];
 
     // validar que el producto exista en la lista de precios
     if (!array_key_exists($producto, $precios)) {
         return "error: el producto no existe";
     }
 
     // calcular el subtotal multiplicando el precio por la cantidad
     $subtotal = $precios[$producto] * $cantidad;
 
     return $subtotal; // devolver el subtotal
 }
 
 // inicializar el total de la compra
 $totalCompra = 0;
 
 // agregar productos a la compra
 $totalCompra += calcularSubtotal("chocolate", 2); 
 $totalCompra += calcularSubtotal("chicles", 1);  
 $totalCompra += calcularSubtotal("caramelos", 1); 
 
 
 echo "el total de la compra es: " . $totalCompra . " euros\n"


?>