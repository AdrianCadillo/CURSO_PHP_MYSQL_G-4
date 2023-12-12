<?php

$Persona = new class('77129827','Pedro Mario','Armas Arteaga'){

    /**PROPIEDADES O ATRIBUTOS */
    public string $dni;
    public string $Nombres;
    public string $Apellidos;

    /** constructor */
    public function __construct(
        string $dni_,string $nombres_,string $apellidos_
    )
    {
      $this->dni = $dni_;
      $this->Nombres = $nombres_;
      $this->Apellidos = $apellidos_;
    }
    /**
     * ACCIONES O MÉTODOS 
     */
    public function DatosPersona():string 
    {
        return "DNI : ".$this->dni."<br>
        PERSONA : ".$this->Apellidos." ".$this->Nombres;
    }
};

//$persona = new $Persona("000102020","Vania Irma","Pajuelo Rámirez");
//echo $persona->DatosPersona();
/*
INSERT INTO TABLA(atributo1,atributo2,....,atributon) 
VALUES(:atributo1,:atributo2,.....,atributon)
*/


class Orm{
    public $Model;

    /**
     * Métodos accesores SET GETTERS
     */

     public function setModel($model){

        $this->Model = $model;
     }

     public function getModel()
     {
        return $this->Model;
     }
}

$orm = new Orm;

/// productos

$Productos = [
    "nombre" => "Galletas",
    "precio" => 0.70,
    "stock" => 20,
    "estado" => "activo",
    "fecha_poduccion" => "2023-11-12"
];

$orm->setModel(new class($Productos,"ventas"){

    public string $Tabla;
    public array $Productos_;

    public function __construct(
        array $prod,string $tabla
    )
    {
       $this->Productos_ = $prod;
       $this->Tabla = $tabla; 
    }

    public function Insert():string
    {
     $Query = "INSERT INTO ".$this->Tabla."("; 
     
     foreach($this->Productos_ as $key => $value)
     {
        $Query.=$key.",";
     }

     $Query = rtrim($Query,",").") VALUES(";
     
     foreach($this->Productos_ as $key => $value)
     {
        $Query.=":$key,";
     }
     $Query = rtrim($Query,",").")";
     return $Query;
    }
});

echo $orm->getModel()->Insert();




