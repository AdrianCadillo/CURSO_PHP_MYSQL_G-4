<?php
/**
 * 1/1 + 1/2 + 1/4 + 1/8+...
*/

$Numerador = 1;
$Denominador = null;
$Serie = ""; $Sumatoria = 0.00;
for($i = 0;$i< 4;$i++) //0,1,2,3
{
    $Denominador = pow(2,$i);// 2^0 = 1
    if($Denominador == 1)
    {
    $Serie.= $Numerador." + ";
    }else{
    $Serie.=$Numerador."/".$Denominador." + ";
    }

    $Sumatoria+=$Numerador/$Denominador;
}

echo rtrim($Serie," + ")."<br>
     SUMA : ".number_format($Sumatoria,2,",");

/**
 * crear un aplicativo web, que permita ingresar la cantidad
 * de numeros de la serie, y de acuerdo ello representar la 
 * serie , despues calcular la sumatoria.
 * 1 + 1/3 + 1/6 + 1/9
 */


