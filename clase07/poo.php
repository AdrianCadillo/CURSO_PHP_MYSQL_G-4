<?php

class Persona { /// Plantilla

    /* PROPIEADES O ATRIBUTOS */
    public string $dni;
    public string $apellidos;
    public string $nombres;
    public string $direccion;

    /**CONSTRUCTOR  => MÉTODO MÁGICO QUE SE EJECUTA AUTOMATICAMENTE*/

    public function __construct(
        string $dni_,string $apellidos_,string $nombres_,string $direccion_
    )
    {
       $this->dni = $dni_;
       $this->apellidos = $apellidos_;
       $this->nombres = $nombres_;
       $this->direccion = $direccion_; 
    }
    /*las acciones o métodos */

    public function ReportePersona():void
    {
        echo "DNI : ".$this->dni."<br>
             PERSONA : ".$this->apellidos." ".$this->nombres."<br>
             DIRECCIÓN : ".$this->direccion;
    }
}

 //$humano = new Persona("0977722","Armas Pajuelo","Julia Luisa","PERU-LIMA");
 
 //$humano->ReportePersona();
 


 

 