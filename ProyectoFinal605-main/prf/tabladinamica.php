<?php
include "include/query.php";
include "include/conexionProyecto.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DINAMICA</title>
</head>
<body>
    <table>
        <td>
            <th>Id_Usuario</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
        </td>
        <td>
            <?php while($row=$Separatte){
            
             ?>
            <td><?php echo $row['Id_Usuario']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['ApellidoPaterno']; ?></td>
            <td><?php echo $row['ApellidoMaterno']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['FechaN']; ?></td>
            </td>
        <?php } ?>
    </table>
</body>
</html>
