<?php 
session_start();
/**
 * Aumentos, según la ocupación
 * Inicialización de datos
 */

 const AumentoSistemas = 0.20;
 const AumentoAdministrador = 0.15;
 const AumentoContador = 0.14;
 const AumentoProgramador = 0.16;

if(isset($_POST['calcular'])):

 /**
  * Datos de entrada
  */

  $NombreTrabajador = $_POST['nombre'];
  $Salario = $_POST['salario'];
  $Ocupacion = $_POST['ocupacion'];

  $Aumento = 0.00;

  if($Ocupacion === "Ing.de sistemas")
  {
    $Aumento = AumentoSistemas*$Salario;
  }
  else
  {
    if($Ocupacion === 'Administrador')
    {
        $Aumento = AumentoAdministrador*$Salario;  
    }
    else
    {
        if($Ocupacion === 'Contador')
        {
            $Aumento = AumentoContador*$Salario;
        }
        else{
            $Aumento = AumentoProgramador*$Salario; 
        }
    }
  }
 
  $Salario += $Aumento; /// incremento

   $_SESSION['response'] = "EL SALARIO TOTAL ES DE $Salario SOLES";

   // redirigir
   echo "<script>history.back()</script>";
endif;