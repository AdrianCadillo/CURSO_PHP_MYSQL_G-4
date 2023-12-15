<?php 

abstract class Login 
{
    /** PROPIEDADES */
    private string $NombreUsuario;
    private string $Password;


    /**MÉTODOS ACCESORES */
    public function setNombreUsuario(string $usuario)
    {
        $this->NombreUsuario = $usuario;
    }

    public function setPassword(string $pass)
    {
        $this->Password = password_hash($pass,PASSWORD_BCRYPT);
    }

    public function getNombreUsuario():String
    {
     return $this->NombreUsuario;
    }

    public function getPassword():String
    {
     return $this->Password;
    }

    /**
     * Método abstracto
     */
    public abstract function Attemp();

}


class SignIn extends Login
{
   /**
     * Método abstracto
     */
    public function Attemp()
    {
     /// se realiza el proceso de implementación
    } 
}