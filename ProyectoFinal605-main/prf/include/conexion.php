<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "ranz";
$conex = mysqli_connect($servidor, $usuario, $password, $bd);
if ($conex->connect_error) {
    die("Error al conectar la base de datos".$conex->connect_error);
}
?>