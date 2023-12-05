<?php
// $DiaSemana = "Martes";
// switch($DiaSemana):
// case "Lunes": echo "Lunes";break;
// case "Martes": echo "Martes";break;
// default: echo "No existe día";break;
// endswitch;
/// 20 de octubre de 2023
date_default_timezone_set("America/Lima");
$Fecha = getdate();
print_r($Fecha);