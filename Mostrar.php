<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
 
<?php
require 'Conexion.php';

$sql= "SELECT * FROM libreria;";
$resultado = $conn ->query($sql);
?>

<div>
    <h1 class="cabecera">Mostrar Registros</h1>
</div>
<div class="contenedor">
    <button class="contenedor"><a href="Index.php">Agregar Nuevo Registro</a></button>

    <table>
        <thead>
            <tr>
               
                <th>Nombre</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Disponible</th>
                
            </tr>
        </thead>
        <tbody>
   

    <?php
    while ($fila = $resultado->fetch_assoc()){
    ?>
        <tr>
            
            <td><?php echo $fila['Nombre'] ?></td>
            <td><?php echo $fila['Autor'] ?></td>
            <td><?php echo $fila['Precio'] ?></td>
            <td><?php echo $fila['Disponible'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>


</div>

</body>
</html>