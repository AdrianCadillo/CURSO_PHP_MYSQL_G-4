<?php
/**
 * == ===
 */
// $variable = "3"; // el valor y el tipo
// $variable_1 = 3;

// echo $variable == $variable_1;

/**
 * Operadores aritméticos
 */

$numero = 34;  $numero_2 = 5;

//  $suma = $numero + $numero_2;
//  $Resta = $numero - $numero_2;
//  $Producto = $numero * $numero_2;
//  $Division = $numero / $numero_2;
//  $Residuo = $numero % $numero_2;

//  echo $suma." <br> ".$Residuo;

/**
 * Operadores Relaciones (comparación)
 */

//  echo $numero > $numero_2;// true, false
//  echo $numero >= $numero_2;// true, false
//  echo $numero === $numero_2;// true, false

/**
 * Operadores lógicos
 */
 # AND

 $resultado = !(($numero > $numero_2) and ($numero == $numero_2));

 $resultadoOr = (($numero > $numero_2) or ($numero == $numero_2));

 echo $resultadoOr;
 //             V    or   F => !V => F


