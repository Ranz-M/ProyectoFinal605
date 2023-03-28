<?php
include "include/accionesR.php";
include "include/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div class="container m-0 content-justify--center py-2">
        <div class="row text-center">
            <h1 class="text-info">Registro</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['PHP_SELF']?>" nethod="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type=".text-info" name="Nombre" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="ApellidoP" class="form-control" placeholder="ApellidoP" required>
            </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="ApellidoM" class="form-control" placeholder="ApellidoM" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="Direccion" class="form-control">Direccion:</textarea>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="Telefono" class="form-control" placeholder="Telefono" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="Date" name="Fecha" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="Email" name="Email" class="Email" placeholder="Email" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="REGISTRO" name="btn" class="btn btn-info">
            </div>
        </div>

    </form>
    </div>
</body>
</html>