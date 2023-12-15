<?php
class Triangulo
{
 private float $Base;
 private float $Altura;

 protected float $Base2;
}

class Area extends Triangulo
{

    public function CalcularArea()
    {
       $area = $this->Base2;
    }

}