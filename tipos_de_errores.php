<?php
ini_set("display_errors",0); /// dev
ini_set("log_errors",1);
ini_set("error_log","C:/laragon/www/cursophp/php_error_log.log");
// $Variable = "warning errors";

// echo $variable;

// echo "Hola Mundo";

/// error fatal
class Persona {

    function Hello()
    {
        echo "Hola";
    }
}

$persona = new Humano();

echo "ya no se ejecuta";

/// errores parse o gramaticales

// $Directorio = "public/fotos";

// echo "mensaje";
phpinfo();