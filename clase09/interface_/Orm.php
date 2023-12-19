<?php
namespace clase09\interface_;

interface Orm 
{
    /** 
     * Inicializar la query
     */
    public function Query();

    /**
     * Seleccionar la columnas de una tabla
     */
    public function select();
}