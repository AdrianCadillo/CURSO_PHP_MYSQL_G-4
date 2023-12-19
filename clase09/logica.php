<?php
namespace clase09;

class logica 
{
  
    /** Método para el ejercicio 1 */
    public function Ejercicio1(string $texto,int $inicio,int $final):String
    {
      return substr($texto,$inicio,$final);
    }

    /** Método para el ejercicio 2 */
    public function Ejercicio2(String $texto):string // Curso de PHP _
    {
      for($i = 0;$i<strlen($texto);$i++){
         if(substr($texto,$i,1) === ' ')
         {
            $texto[$i] = '_'; /// str_replace(" ","_",$string)
         }
      }

      return $texto;
    }

    /** Método para el ejercicio 3 */
    public function Ejercicio3(String $texto):string // Rosales Cadillo => R C
    {
      $Iniciales = substr($texto,0,1)." "; /// R

      for($i = 0;$i<strlen($texto);$i++){
         if(substr($texto,$i,1) === ' ')
         {
            $Iniciales.= $texto[$i+1]." ";
         }
      }

      return $Iniciales;
    }
}