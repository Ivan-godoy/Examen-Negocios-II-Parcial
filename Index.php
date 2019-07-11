<?php

require_once 'Cliente.php';

if (!empty($_POST)){
    $lista = [];
    $lista[] = $_POST['nombre'] ?? '';
    $lista[] = $_POST['email'] ?? '';
    Cliente::llenar($lista);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Examen II Parcial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center w-100"><h1>Formulario Cliente</h1></div>
    <form action="Index.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre Completo">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="ejemplo@ejemplo.com">
        </div>
        <hr>
        <div class="form-row justify-content-center">
            <button type="submit" class="btn btn-warning" id="enviar" name="enviar">Enviar</button>
        </div>

    </form>
</div>


<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>

