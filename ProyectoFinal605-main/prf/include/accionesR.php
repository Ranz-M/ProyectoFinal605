<?php
include "conexion.php";
if (isset($_POST['btn'])) {
    $Nombre = $conex->real_escape_string($_POST['Nombre']);
    $Apellidos = $conex->real_escape_string($_POST['Apellido']);
    $Direccion = $conex->real_escape_string($_POST['Direccion']);
    $Telefono = $conex->real_escape_string($_POST['Telefono']);
    $Fecha = $conex->real_escape_string($_POST['Fecha']);
    $Email = $conex->real_escape_string($_POST['Email']);
    if($Nombre==""||$Apellidos==""||$Direccion==""||$Telefono==""||$Fecha==""||$Email==""){
        $Alerta="Algunos de los datos estan vacios";
    }
    else{
        $registro="INSERT INTO Usuario(Nombre,Apellido,Direccion,Telefono,Fecha,Email)VALUES('$Nombre','$Apellido','$Direccion','$Telefono','$Fecha','$Email')";
        $registros= $conex->query($registro);
        if ($registros >0) {
            echo "registro exitoso";
        }
        else{
                echo "error al registrar";
            }
        }
    } 
?>
