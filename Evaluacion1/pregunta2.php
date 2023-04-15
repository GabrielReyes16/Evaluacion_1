<?php
$usuario = $_POST['usuario'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad']
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Bienvenido</title>
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
    <div class="container col-6 mt-5">
        <div class="card">
            <div class="card-header">
               <h1 class="titulo2"><strong> Bienvenido</h1></strong>
            </div>
            <div class="card-body">
            <p>¡Hola <?php echo $usuario; ?> !</p>
		    <p>Tu dirección es <?php echo $direccion; ?></p>
            <p>Tienes <?php echo $edad ; ?> años y tu correo es <?php echo $email ; ?></p>
            </div>
        </div>
    </div>
</body>
</html>