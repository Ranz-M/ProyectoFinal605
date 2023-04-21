<?php
$Servidor="localhost";
$Usuario="root";
$Password="";
$bd="dlyp07";
$conecta = mysqli_connect($Servidor,$Usuario,$Password,$bd);
    if ($conecta->connect_error) {
        die("Error al conectar la base de datos.$Conexion->Connect_error");
    }
?>