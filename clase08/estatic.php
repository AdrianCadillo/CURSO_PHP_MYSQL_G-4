<?php
class Orm 
{
    public static string $Query;


    public static function getQuery()
    {
     return "consulta de la base de datos";
    }
}

$orm = new Orm;
 
echo $orm->getQuery();
echo Orm::getQuery();
 

