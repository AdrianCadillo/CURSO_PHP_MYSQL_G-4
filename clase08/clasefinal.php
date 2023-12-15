<?php
 
class BaseController 
{
 public final function getProfile(){
 echo "proceso de recuperar perfil";
 }
}

class UserController extends BaseController
{
 public function getProfile()
 {
  echo "si se puede sobre escribir el método sin final";
 }
}