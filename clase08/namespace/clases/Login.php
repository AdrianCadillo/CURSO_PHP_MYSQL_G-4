<?php
# nombre de espacio
namespace clase08\namespace\clases;

class Login{

    private array $CredencialSistema =[
        "username" => "sistema",
        "password" => "123456"
    ];

    public function Attemp(array $credenciales):bool // false  true
    {
        return $this->CredencialSistema["username"] === $credenciales["username"]
               and $this->CredencialSistema["password"] === $credenciales["password"];
    }
}