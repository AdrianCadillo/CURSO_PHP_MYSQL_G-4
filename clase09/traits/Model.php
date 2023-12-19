<?php 
namespace clase09\traits;
require 'Proceso.php';
require '../traits2/Proceso2.php';
use clase09\traits2\Proceso2;

class Model 
{
  use Proceso,Proceso2;  

 
 
  public function Insertar()
  {
   /// es la implemmentacion
  }
}

$model = new Model;

echo $model->QueryInit()->get();