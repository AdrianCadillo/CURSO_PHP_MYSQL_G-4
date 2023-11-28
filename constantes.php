<?php 
/// la función define(clave,valor)
// define("BASE_DE_DATOS","tienda");
// define("USER","ADRIAN");
// define("PASSWORD","123456");

// echo BASE_DE_DATOS."<br>".USER."<br>".PASSWORD;

const SERVER = "127.0.0.1";

//SERVER = "PUBLICO";
echo constant("SERVER");