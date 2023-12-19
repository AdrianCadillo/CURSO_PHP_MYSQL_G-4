<?php
namespace clase09\traits;

trait Proceso {

    protected string $Query;

    protected string $Table = "ventas";


    /** Métodos */

    public function QueryInit()
    {
       $this->Query = "SELECT *FROM ".$this->Table; 

       return $this;
    }

    public function get()
    {
        return $this->Query;
    }
}