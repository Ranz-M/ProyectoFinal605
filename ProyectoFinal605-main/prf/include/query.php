<?php
include "include/conexion.php";

$Usuarios = "SELECT * FROM usuarios";
$Ejecuta = "conex->query($Usuario)";
$Separatte = "$Ejecuta->fetch_array()";
?>