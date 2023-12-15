<?php

class Login 
{
    private static string $Username;
    private static string $Password;

    /** MÉTODOS ACCESORES (SETTERS AND GETTERS)*/

    public function setUsername(string $username_):void
    {
      self::$Username = $username_;  
    }

    public function setPassword(string $pass):void
    {
       self::$Password = $pass; 
    }

    public static function getUsername():string
    {
        return self::$Username;
    }

    public static function getPassword():string
    {
        return self::$Password;
    }
}

class Acceso extends Login
{
    private static array $Credenciales =[
        "username"=>"sistema",
        "password" => "1234567"
    ];

   public static function Attemp():bool
   {
     if(self::$Credenciales["username"] === self::getUsername()
     and self::$Credenciales["password"] === self::getPassword())
     {
      return true;
     }
     return false;
   }
}

$login = new Acceso;

$login->setUsername("sistema");
$login->setPassword("1234567");

echo $login->Attemp();



