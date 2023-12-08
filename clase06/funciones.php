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

 echo login(["username"=>"login"]);

