<?php
namespace clase09\interface_;
require 'Orm.php';
class Implementacion implements Orm
{
    protected string $Tabla;

    protected string $PrimaryKey;

    private string $Sql;

   /** 
     * Inicializar la query
     */
    public function Query(){

        $this->Sql = "SELECT *FROM ".$this->Tabla;

        return $this;
    }

    /**
     * Seleccionar la columnas de una tabla
     */
    public function select(){ # nombre_producto,precio

        return $this->Sql;
    }
}