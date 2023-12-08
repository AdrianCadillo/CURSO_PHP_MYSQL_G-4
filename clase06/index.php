<?php
/**
 * count y sizeof
 */
$Estudiante = [
    [
      "name"=>"Adrian",
      "edad"=>23,
      "profesion" =>"sistemas"
    ],
    [
        "name"=>"Fiorella",
        "edad"=>20,
        "profesion"=>"Ing.Civil"
    ]
    ];

//echo $Estudiante[1]["name"];

//echo count($Estudiante);

// echo "<pre>";
// print_r($Estudiante);
// echo "</pre>";

//var_dump($Estudiante);

// foreach($Estudiante as $estudiante)
// {
//     echo "ESTUDIANTE : ".$estudiante["name"]."
//     EDAD:".$estudiante["edad"]." PROFESION:".$estudiante["profesion"]."<br>";
// }


/**
 * IS_ARRAY
 */

 $Variable = [1,2,3,4,6];

 //echo is_array($Variable) ? 'si es array':'no es array';
 if(is_array($Variable))
 {
    print_r($Variable);
 }
 else{
    echo "no es array";
 }

 /**
  * IN_ARRAY
  */
 
echo in_array(2,$Variable) ? 'si pertenece al array':'no pertecene';

/**
 * explode
 */
$route = "/producto/create";

$nuevaRuta = explode("/",$route);

echo "<pre>";
print_r($nuevaRuta);
echo "</pre>";

/**
 * implode
 */
$Paises = ["Perú","China","Ecuador","México"];

//$PaisString = implode(" - ",$Paises);

//echo $PaisString."<br>"; /// Perú - China

/**
 * Array push
 */
echo "<pre>";
print_r($Paises);
echo "</pre>";
 array_push($Paises,"Bolivia");
echo "<pre>";
print_r($Paises);
echo "</pre>";

/// array pop
array_pop($Paises);
echo "<pre>";
print_r($Paises);
echo "</pre>";
/**
 * Array keys
 */
$Persona =["nombre"=>"Walter","edad"=>34];

print_r(array_keys($Persona)[0]);

/**
 * Array_key_firts
 */
echo array_key_first($Persona);

/**
 * diferencia de arreglos
 */

$numeros = [1,4,5,6,8]; /// 1,4,8
$numero_ =[5,6];


print_r(array_diff($numeros,$numero_));
/// A-B

/**
 * list()
 */
$routeApp = "/producto/create";

/// array
$nueva_ruta = explode("/",$routeApp); /// array indexado


/// [[0]=>"",[1]=>"producto",[2]=>create]

list($vacio,$controller,$Method) = $nueva_ruta;

echo $controller." ".$Method."<br>";

/// sort
 
$Frutas =["mango","fresa"];
sort($nueva_ruta);
print_r($nueva_ruta);

/**
 * EXTRACT COMPACT
 */
 $cursos =["nombre"=>"PHP MYSQL","estado"=>"habilitado"];

 extract($cursos);

 echo $nombre ."  ".$estado."<br>";

 /// compact ["clave"=>valor]

 $Usuario = "login";

 $Rol = "Vendedor";

 compact("Usuario","Rol");

 print_r($Usuario);

 /**
  * Array filter
  */

$numero_3 = [1,2,3,4,5];

$filtro = array_filter($numero_3,function($num){
 return $num > 3;
});

print_r($filtro);

$routeApp_ = "/producto/create";

$routeApp_ = explode("/",$routeApp_); /// array
$nuevaRuta__ = array_filter($routeApp_);
 
echo "<pre>";
print_r($nuevaRuta__);
echo "</pre>";

/**
 * Array_map
 */

 $NombreDePersona = ["adrian","rosa","karla","andres"];

 $nuevaData = array_map("ucwords",$NombreDePersona);

 print_r($nuevaData);








