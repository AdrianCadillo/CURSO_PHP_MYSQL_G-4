<?php
namespace clase09\model;
require '../interface_/Implementacion.php';
use clase09\interface_\Implementacion;

final class Producto extends Implementacion
{
    protected string $Tabla = "ventas";

    protected string $PrimaryKey = "producto_id";
}

$producto = new Producto;

echo $producto->Query()->select();