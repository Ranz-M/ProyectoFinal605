<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "actividad";
$conexion = mysqli_connect($servidor,$usuario,$password,$bd);
if ($conexion->connect_error) {
    die("Error al conectar la base".$conex->conneect_error);
}
?>