<?php
session_start();
use clase09\logica as MiLogica;

require 'logica.php';

if(isset($_GET['accion'])){
    $logica = new MiLogica;

    $Error = [];

    if($_GET['accion'] === 'calcular_ejercicio1')
    {
      if(empty($_POST['texto']))
      {
        $Error[] = 'Ingrese el texto';
      }

      if(empty($_POST['inicio']))
      {
        $Error[] = 'Ingrese el valor de inicio';
      }

      if(empty($_POST['final']))
      {
        $Error[] = 'Ingrese el valor final';
      }

      /// validamos si existen errores

      if(count($Error) > 0)
      {
        $_SESSION['error'] = $Error;
      }
      else 
      {
        $Texto = $_POST['texto'];
        $Inicio = $_POST['inicio'];
        $Final = $_POST['final'];

        $_SESSION['success'] = $logica->Ejercicio1($Texto,$Inicio,$Final);
      }
    }

    /// ejercicicio 2

    if($_GET['accion'] === 'calcular_ejercicio2')
    {
        if(empty($_POST['texto']))
        {
            $_SESSION["error_1"] = "Ingrese el texto";
        }
        else{
            
            $_SESSION['success_1'] = $logica->Ejercicio2($_POST['texto']);
        }
    }

    /// ejercicio 3

    if($_REQUEST["accion"] === "calcular_ejercicio3")
    {
        if(empty($_POST['texto']))
        {
            echo  "Ingrese el texto";
        }
        else{
            
           if(method_exists($logica,"Ejercicio3"))
           {
            echo $logica->Ejercicio3($_POST['texto']);
           }
           else
           {
           echo "el método Ejercicio 3 no existe";
           }
        }  
    }

    //echo "<script>history.back()</script>";
}
else
{
    echo "no existe";
}