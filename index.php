<?php
$nombre = "Peter";
$apellido = "Parker";
$edad = 24;
$hobbie = "Superheroe Spiderman";
$editor = "PHPStorm";
$sistema = "MSDOS 6.0";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo("Actividad Práctica Obligatoria");?> </h1>
<p>Nombre: <?php echo($nombre);?></p>
<p>Apellido: <?php echo($apellido);?></p>
<p>Edad: <?php echo($edad);?></p>
<p>Editor de código preferido: <?php echo($editor);?></p>
<p>Hobbie: <?php echo($hobbie);?></p>
<p>Sistema operativo preferido: <?php echo($sistema);?></p>
<p>Sistema operativo que se está utilizando: <?php echo(PHP_OS);?></p>
</body>
</html>