<?php

include('/xampp/htdocs/pfinal/Database/conexion.php');
$con = connection();

$sql = "SELECT * FROM soldado";
$query = mysqli_query($con, $sql);

if (!$query) {
    die('Error al ejecutar la consulta: ' . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Soldado</title>
  
    <style>
        button{
            background-attachment: fixed;
            color: #ffff;
            background-color: gray;
            border-radius: 30px;
            min-width: 200px;
            max-width: 25%;
            height: 30px;
            display: flex;
            color: black;
            justify-content: center;
            align-items: center;
            margin-left: 43.5%;


        }
    </style>
</head>
<body>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>Ingresar datos de un nuevo soldado </h1>
        
            <input type="text" name= "nombre" placeholder="                          Ingrese su Nombre">
            <input type="text"name="apellido" placeholder="                          Ingrese su Apellido">
            <input type="text"name="grado" placeholder="                             Ingrese su Grado">

            <input style="border-radius: 20px;" type="submit" value="Agregar">
        </form>
        <div style="justify-content: center; margin-bottom:10px;" class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
            <button class="btn btn-secondary" onclick="location.href='../inicio.php'">Volver hacia atras</button>
        </div>
        
    </div>

    <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Grado</th>
                    
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th style="color:blue;"><?= $row['id_soldado'] ?></th>
                    <th style="color:blue;"><?= $row['nombre'] ?></th>
                    <th style="color:blue;"><?= $row['apellido'] ?></th>
                    <th style="color:blue;"><?= $row['grado'] ?></th>

                    <td></td>

                    <td><a style="border-radius: 5px;" href="update.php?id=<?= $row['id_soldado'] ?>"class="users-table--edit">Modificar</a></td>
                    <td><a style="border-radius: 5px;" href="delete_user.php?id=<?=$row['id_soldado'] ?>"class="users-table--delete">Borrar</a></td>

                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
  
</body>

</html>