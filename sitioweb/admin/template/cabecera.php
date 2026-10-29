<?php
session_start();

if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] !== "ok") {
    header("Location: ../index.php");
    exit();
}

$nombreUsuario = $_SESSION["nombreUsuario"] ?? "Administrador";
?>
<!--------Inicio Header---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php  $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"?>
<!-------Menu--------->
  <nav class="navbar navbar-expand navbar-light bg-light ">
    <div class="nav navbar-nav">
    <a class="nav-link active" href="#">Administrador del sitio </a>
    <a class="nav-item nav-link" href="<?php echo $url?>/admin/inicio.php">Inicio</a>

    <a class="nav-item nav-link" href="<?php echo $url?>/admin/seccion/productos.php">Libros</a>
    <a class="nav-item nav-link" href="<?php echo $url?>/admin/seccion/cerrar.php">Cerrar</a>

    <a class="nav-item nav-link" href="<?php echo $url?>">Ver sitio web</a>

    </div>
    
  </nav>

    <div class="container">
        <br><br>
        <div class="row">
          

<!--------Fin Header---------->