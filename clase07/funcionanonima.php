<?php

$Saludar = function(string|int|array $variable):void
{
  if(is_array($variable))
  {
    print_r($variable);
  }
  else{
    echo "Hola ".$variable;
  }
};

#$Saludar(["php","java","C#"]);

$Frutas = function(){
 $Variable = func_get_args();//[]

 print_r($Variable);
};

#$Frutas("Manzana","Pera","Piña"); //
/**
 * Heredar datos externos 
 */
$Profesion = "Ing.de sistemas";

$Anonima = function() use($Profesion){
echo $Profesion;
};

#$Anonima();

/*
Solicitar al usuario un número positivo para determinar la cantidad
de dígitos que tiene, cuáles son dichos dígitos, la suma de dichos
dígitos, el mayor y menor de dichos dígitos. Mostrar también el
número invertido (por ejemplo, si el número es 2345, mostrar 5432)
*/

$cantidadDigitos = 0;
$Digitos = "";
$SumaDigitos = 0;
$Mayor = 0;
$Menor = 10; // 1 al 9
$Pregunta3 = function(int $numero) use($cantidadDigitos,$Digitos,$SumaDigitos,
$Mayor,$Menor): string{
$Resto = 0;$Invertido = "";
while($numero > 0) // /234
{
  $Resto = fmod($numero,10); // 4,3
  $numero = floor($numero/10);// 23
  $Digitos.=$Resto." - "; // -2-3-4
  $SumaDigitos+=$Resto;

  if($Resto > $Mayor){
    $Mayor = $Resto;
  }

  if($Resto < $Menor){
    $Menor = $Resto;
  }
  
  $Invertido.=$Resto;
  $cantidadDigitos++;
}

return "CANTIDAD DIGITOS : ".$cantidadDigitos."<br>
DIGITOS SON  : ".ltrim(strrev($Digitos)," - ")."<br>
SUMA DE DIGITOS : ".$SumaDigitos."<br>".
"MAYOR DIGITO : ".$Mayor."<br>
MENOR DIGITO : ".$Menor."<br>
NUMERO INVERTIDO : ".$Invertido;
};

echo $Pregunta3(19837);


