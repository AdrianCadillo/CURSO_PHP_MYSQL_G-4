<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php 
session_start();

if(!isset($_SESSION['id']) and !isset($_COOKIE['id']))
{
    header("location:vistalogin.php");
}
else
{
  if(isset($_SESSION['id']))
  {
    $Id = $_SESSION['id'];
  }   
  else
  {
    $Id = openssl_decrypt($_COOKIE['id'],"AES-128-CBC","***{}");
  }
}
?>
<h1>Bienvenido al sistema <b><?php echo $Id ?></b></h1>
<a href="logout.php" class="btn btn-danger">Cerrar la sesión</a>