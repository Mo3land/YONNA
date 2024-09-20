
<?php
include '<include/conexion.php';
include 'include/controlador.php';
error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>LOG IN</title>
</head>
<body>
<nav class="navbar navbar-light bg-danger">
  <form class="container-fluid justify-content-start">
    <a class="navbar-brand" href="#">PIPIRO</a>
  </form>
</nav>

<div class="container">
    <center><h1 class="display-6">LOGIN</h1></center>
    <form action="" method="post">
        <div class="row mt-2">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <input type="text" name="username" id="usuario" placeholder="Usuario" required class="form-control" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <input type="password" name="password" id="password" placeholder="Contraseña" required class="form-control" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <input type="submit" name="login" value="Iniciar Sesión" class="form-control bg-danger" />
            </div>
        </div>
    </form>
</div>


</body>
</html>