<?php
session_start();
/**
 * Una Fecha de nacimiento
 */

 $FechaNacimiento = $_POST['fecha_nacimiento'];

 /**
  * Cantidad de segundos 
  */
  $CantidadSegundos = strtotime($FechaNacimiento);
 /**
  * Obtenemos el mes y día
  */
 $Mes = date("m",$CantidadSegundos);
 $Dia = date("d",$CantidadSegundos);

 $SignoZodiacal = "";

 switch($Mes)
 {
  case 1: $SignoZodiacal = $Dia <=20 ? 'Capricornio':'Acuario';break;// enero
  case 2: $SignoZodiacal = $Dia <=19 ? 'Acuario':'Piscis';break;// febrero
  case 3: $SignoZodiacal = $Dia <=20 ? 'Piscis':'Aries';break;// marzo
  case 4: $SignoZodiacal = $Dia <=20 ? 'Aries':'Tauro';break;// abril
  case 5: $SignoZodiacal = $Dia <=20 ? 'Tauro':'Géminis';break;// mayo
  case 6: $SignoZodiacal = $Dia <=21 ? 'Géminis':'Cáncer';break;// Junio
  case 7: $SignoZodiacal = $Dia <=22 ? 'Cáncer':'Leo';break;// Julio
  default:$SignoZodiacal = 'no existe el mes';
 }

$_SESSION['response'] = $SignoZodiacal;

echo "<script>history.back()</script>";
