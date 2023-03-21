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
            <h1 class="text-succes">Plantel</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['PHP_SELF']?>" nethod="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="NombreP" class="form-control" placeholder="NombreP" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="ClaveP" class="form-control" placeholder="ClaveP
                " required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="Direccion" class="form-control">Direccion</textarea>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="Telefono" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="Email" name="Responsable" class="form-control" placeholder="Responsable" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="REGISTRO" name="btn" class="btn btn-danger">
            </div>
        </div>

    </form>
    </div>
</body>
</html>