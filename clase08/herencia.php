<?php
class Persona 
{
    /** PROPIEDADES O ATRIBUTOS */
    public string $dni;
    public string $apellidos;
    public string $nombres;



    public function __construct(
        string $dni_,string $apellidos_,string $nombres_
    )
    {
       $this->dni = $dni_; $this->apellidos = $apellidos_;
       $this->nombres = $nombres_;
    }

    /**
     * imprimir datos de la persona
     */

     public   function getPersona()
     {
        return "DNI :".$this->dni."<br>
        PERSONA : ".$this->apellidos." ".$this->nombres;
     }
}


/**OTRA CLASE */

class Docente extends Persona
{
    /** ASIGNARLE LAS PROPIEDADES PARA EL DOCENTE */
    public string $codigo;
    public string $Profesion;

    /**CONSTRUCTOR */
    public function __construct(
        string $dni_,string $apellidos_,string $nombres_,
        string $codigo_,string $profesion_
    )
    {
        parent::__construct($dni_,$apellidos_,$nombres_);
        $this->codigo = $codigo_;
        $this->Profesion = $profesion_;
    }

    /**
     * Imprimir los datos del docente
     */
    public function getDocente():string
    {
        return $this->getPersona()."<br>
        CODIGO : ".$this->codigo."<br>
        PROFESION: ".$this->Profesion;
    }
}
 
/// creamos un objeto
$docente = new Docente(
    "09812345",
    "Rodríguez Mendoza",
    "Walter Luis",
    "00013432",
    "Ing.Civil"
);

echo $docente->getDocente();

