<?php
session_start();

/**
 * Eliminar la variable de sesion
 */

 # eliminamos una sola variable de sesion
 //unset($_SESSION['usuario']);

 session_destroy(); # elimina toda variable de sesion