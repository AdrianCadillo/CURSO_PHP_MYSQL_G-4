<?php

$Numero = 2;

// do{
//  echo $Numero."<br>";

//  $Numero++;
// }while($Numero<=20);

$NumberInit = 4;// 4,5,6,7,8 -.... 70

$NumberFinal = 70;

$AuxInit = $NumberInit; $AuxFinal = $NumberFinal;
$Primos = "";
do{
$j = 1;$contador = 0;
do{
  if(fmod($NumberInit,$j) == 0)
  {
    $contador++;
  }
  $j++;
}while($j<=$NumberInit);//1,2,3,4

if($contador == 2)
{
  $Primos.=$NumberInit." - ";  
}
$NumberInit++;
}while($NumberInit<=$NumberFinal);

echo rtrim($Primos," - ");