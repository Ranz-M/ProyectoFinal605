<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "actividad";
$conex = mysqli_connect($servidor,$usuario,$password,$bd);
if ($conex->connect_error) {
    die("Error al conectar la base".$conex->conneect_error);
}
?>