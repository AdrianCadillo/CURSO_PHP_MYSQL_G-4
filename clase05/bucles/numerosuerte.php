<?php 

/*
Implementar un programa en php con bucle while, que le permita a un
usuario ingresar su fecha de nacimiento, y a través de ello imprimir por
pantalla su número de la suerte. Ejemplo :
Fecha Nacimiento : 05/10/1997 --> 5 + 10 +1997 = 2012 --> 2+0+1+2 = 5
 */
$FechaNacimiento = "1996-10-14";
/**
 * substr(string,indice,cantidad)
 */
$Anio = substr($FechaNacimiento,0,4);
$Mes = substr($FechaNacimiento,5,2);
$Dia = substr($FechaNacimiento,8,2);

$NumeroSuerte = $Anio + $Mes + $Dia; /// 1 y 9 // 2035
$Resto = 0;
while($NumeroSuerte > 9)
{
    $Resto = fmod($NumeroSuerte,10); /// 5,8

    $NumeroSuerte = floor($NumeroSuerte/10);// 203,20

    $NumeroSuerte+=$Resto; // 208,28
}

echo $NumeroSuerte;