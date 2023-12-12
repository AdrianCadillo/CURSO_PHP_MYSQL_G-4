<?php

#$Mensaje = fn(string|array $argumento):array => $argumento; /// return

#print_r($Mensaje([1,2,3,4]));

$Login = fn(array $credenciales):bool => $credenciales["username"] === "curso" and 
$credenciales["pasword"] === "12345" ? true:false;

if($Login(["username"=>"curso","pasword"=>"1233345"])){
    echo "Bienvendo al sistema";
}
else{
    echo "error credenciales";
}