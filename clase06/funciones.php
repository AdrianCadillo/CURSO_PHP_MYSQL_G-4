<?php
/**
 * Función sin parámetros
 */

function NombreDeLaFuncion():void
{
    echo "Hola, buenas noches<br>";
}

NombreDeLaFuncion();
NombreDeLaFuncion();
NombreDeLaFuncion();

/**
 * Funciones con parámetros
 */

function saludar($Mensaje)
{
 echo $Mensaje;
}

saludar("Hola");
saludar("Hola");
saludar("Hola");
saludar("Hola");
/**
 * funciones con retorno
 */

 function login(array $credenciales):bool
 {

    return $credenciales["username"] === "login" ? true:false;
//    if($credenciales["username"] === "login")
//    {
//     return true;
//    } 

//    return false;
 }

 echo login(["username"=>"login"])."<br>";
 /*
EJERCICIO: 
Realizar una aplicación web que permita al usuario ingresar un
número y a partir de ese número se deberá saber si el número
ingresado es un número perfecto o no lo es. (Tener en cuenta que
un número perfecto es cuándo la suma de los divisores del número
sin incluir el mismo número es igual al mismo número)
Ejemplo
Si se ingresa 6
Divisores => 1,2,3 => suma = 6, por lo tanto, es perfecto
 */

function NumeroPerfecto(int $numero):string //6 => 1,2,3 => 1+2+3 = 6
{
    $suma = 0;
    for($i = 1;$i<=$numero;$i++) // 1,2,3,4,5,6
    {
       if($i != $numero)
       {
         if(fmod($numero,$i) == 0)
         {
            $suma+=$i;
         }
       } 
    }

    if($numero == $suma)
    {
     return "Es número perfecto";
    }
   
    return "No es número perfecto";
}

echo NumeroPerfecto(200);

