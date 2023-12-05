<?php

$Numero = 1;

// mientras
// while($Numero<=20)
// {
//     echo $Numero."<br>";//1,2,3,....,20
//     $Numero+=1; //2,3,... 20,21
// }

/**
 * Crear un programa , que me permita ingresar un número, luego
 *imprima por pantalla si el número es primo o no lo es.*
 *5 => primo 1,2,3,4,5
*/

$Numero_2 = 5;
$Iterador = 1;
$Contador = 0;
while($Iterador <=$Numero_2) // 1,2,3,4,5
{
    if(fmod($Numero_2,$Iterador) == 0)
    {
        $Contador++;
    }
    $Iterador++;
}


if($Contador == 2)
{
    echo "El número ".$Numero_2." es primo";
}else{
    echo "El número ".$Numero_2." no es primo";
}

