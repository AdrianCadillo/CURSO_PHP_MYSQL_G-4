<?php
session_start();
/**
 * Mis credenciales
 */

 $CredencialNombreUser = "admin";
 $CredencialPassword = password_hash("12345678",PASSWORD_BCRYPT);

 if(isset($_POST['entrar']))
 {
    // nombre de usuario y password(DE)
    $Username = $_POST['username'] ?? '';
    $Password = $_POST['password'] ?? '';

    if(empty($Username) and empty($Password))
    {
        $_SESSION['error'] = "Ingrese sus credenciales";
    }
    else
    {
       if(empty($Username))
       {
        $_SESSION['error'] = "Ingrese su nombre de usuario";
       } 
       else
       {
        if(empty($Password))
        {
            $_SESSION['error'] = "Ingrese su password";
        }
        else{
        /// proceso de login

         if($Username === $CredencialNombreUser){
            /// la comparación del passoword
            if(password_verify($Password,$CredencialPassword))
            {
                $RecordarSession = isset($_POST['remember']) ? true:false;
                /// accede al sistema
                if($RecordarSession)
                {
                    // creamos una cookie
                    setcookie("id",
                      openssl_encrypt($Username,"AES-128-CBC","***{}"),
                      time()+40,"/"
                     );
                }
                else
                {
                    // una variable de session
                    $_SESSION['id'] = $Username;
                }

                header("location:dashboard.php");
                exit;
            }
            else
            {
                $_SESSION['error'] = "Su password es incorrecto";  
            }
         }
         else{
            $_SESSION['error'] = "Su nombre de usuario es incorrecto";  
         }

        }
       }
    }

    echo "<script>history.back()</script>";
 }
 