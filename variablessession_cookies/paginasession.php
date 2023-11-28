<?php
session_start();
//echo $_SESSION['usuario'] ?? 'no existe';
echo isset($_SESSION['id']) ? $_SESSION['id'] : 'no existe' ;

echo  array_key_exists('usuario',$_SESSION) ? $_SESSION['usuario']:'no existe';