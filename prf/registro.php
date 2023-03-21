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
            <h1 class="text-succes">Registro</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['PHP_SELF']?>" nethod="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type=".text-info" name="Nombre" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Apellido" class="form-control" placeholder="Apellido" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="Direccion" class="form-control">Direccion</textarea>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="Telefono" class="form-control" >
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