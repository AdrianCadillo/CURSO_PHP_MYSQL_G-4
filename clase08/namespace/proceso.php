<?php
session_start();
use clase08\namespace\clases\Login;

require 'clases/Login.php';

if(isset($_POST['login']))
{
 $Errors = [];
 $login = new Login;

 if(empty($_POST['usuario']))
 {
    $Errors [] = 'indique su nombre de usuario';
 }

 if(empty($_POST['pasword']))
 {
    $Errors [] = 'ingrese su password';
 }

 if(count($Errors) > 0)
 {
   $_SESSION['errors'] = $Errors;
 }
 else
 {
 $usuario = $_POST['usuario'];
 $password = $_POST["pasword"];


 if($login->Attemp(["username" => $usuario,"password"=>$password]))
 {
    echo "Bienvenido al sistema";
 }
 else
 {
    echo "error en las credneciales";
 }
 }

 header("location:vista.php");
}