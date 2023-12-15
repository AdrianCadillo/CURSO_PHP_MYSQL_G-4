<?php

/** CLASE PADRE => SUPER CLASE */
abstract class Animal
{
   public abstract function Comer(); 
}


class Conejo extends Animal
{
public  function Comer()
{
 echo "el conejo come pasto";
}
}

class Perro extends Animal
{
public  function Comer()
{
   echo "El perror come carne";     
}
}

class Gato extends Animal{
 public  function Comer()
 {
     echo "el gato come pollo";
 }
}

$polimorfismo =  [
    new Conejo,
    new Perro,
    new Gato
];

foreach($polimorfismo as $poli)
{
   $poli->Comer();
}