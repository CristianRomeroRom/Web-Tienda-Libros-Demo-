
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = $_POST["usuario"] ?? "";
    $contrasena = $_POST["password"] ?? "";

    if ($usuario === "admin" && $contrasena === "admin") {

        session_regenerate_id(true);

        $_SESSION["usuario"] = "ok";
        $_SESSION["nombreUsuario"] = "develoteca";

        header("Location: inicio.php");
        exit();

    } else {

        $mensaje = "Error: el usuario o la contraseña son incorrectos.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">

        <div class="col-md-4 col-sm-8 col-11">

            <div class="card shadow">
                <div class="card-body p-4">
                    <?php if(isset($mensaje)){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje;?>
                    </div>
                    <?php }?>

                    <h3 class="text-center mb-4">Login</h3>


                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="usuario" class="form-label">
                                Usuario
                            </label>

                            <input type="text"
                                   class="form-control"
                                   id="usuario"
                                   name="usuario"
                                   placeholder="Ingresa tu usuario"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Contraseña
                            </label>

                            <input type="password"
                                   class="form-control"
                                   id="password"
                                   name="password"
                                   placeholder="Ingresa tu contraseña"
                                   required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Iniciar sesión
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</body>
</html>
