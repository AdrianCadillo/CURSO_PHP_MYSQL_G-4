<?php 
session_start();
if(isset($_SESSION['id']) or isset($_COOKIE['id']))
{
    unset($_SESSION['id']);
    setcookie("id","",-100,"/");
    header("location:vistalogin.php");
}