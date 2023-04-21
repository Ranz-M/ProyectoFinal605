<?php
error_reporting(0);
include 'includes/conecta.php';
if(isset($_POST['entrar'])){
$user = 'Rmora';
$contraseña = '2004';
$ruser = $_POST['usuario'];
$rpass = $_POST['pass'];
if($user == $ruser && $contraseña == $rpass){
    $mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
               <strong>Muy bien!! Tus datos son correctos.</strong> You should check in on some of those fields below.
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
               </div>";
}
else{
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
               <strong>Lo sentimos¿? Tus datos no son correctos.</strong> You should check in on some of those fields below.
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
               </div>";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Login || VFast</title>
</head>
<body>
<div class="container py-4">
    <div class="row justify-content-center h-100 py-4">
        <div class="card col-sm-6 col-md-6 col-lg-6 shadow-lg p-3 mb-5 bg-white rounded">
            <article class="card-body">
                <h4 class="card-title text-center">Login VFast</h4>
                <hr>
                <p class="text-info text-center">Digita tus datos</p>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="form-grup">
                       <div class="input-group">
                          <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                       </div>
                       <div class="input-group py-2">
                          <input type="password" name="pass" placeholder="Password" class="form-control">
                       </div>
                       <div class="input-group">
                          <input type="submit" name="entrar" value="Entrar" class="btn btn_sm btn-info btn-block">
                       </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
    <?php echo $mensaje; ?>
</div>
<script src="js/bootstrap.min.css"></script>
<script src="js/preloader.js"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.css"></script>
</body>
</html>