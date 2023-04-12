<?php
include('/xampp/htdocs/pfinal/Database/conexion.php');
$con = connection();

$sql = "SELECT * FROM t_cuarteles";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../soldado/style.css">
    <title>Cuartel</title>

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
        <form action="insert_cuartel.php" method="POST">
            <h1>Ingresar Nuevo Cuartel</h1>
            <input type="text" name= "nombre" placeholder="                         Nombre del Cuartel">
            <input type="text" name="ubicacion" placeholder="                              Ubicación">
            <input style="border-radius: 20px;" type="submit" value="Agregar"> 
        </form>
      
    </div>
    <div style="justify-content: center; margin-bottom:20px;" class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
            <button class="btn btn-primary" onclick="location.href='../inicio.php'">Volver hacia atras</button>
        </div>
        

    <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th style="color:blue;"><?= $row['ID_CUARTEL'] ?></th>
                    <th style="color:blue;"><?= $row['nombre'] ?></th>
                    <th style="color:blue;"><?= $row['ubicacion'] ?></th>
                    <th></th>
                    <th>
                        <a style="border-radius: 5px;"  href="update_cuartel.php?id=<?= $row['ID_CUARTEL'] ?>" class="users-table--edit">Modificar</a>
                    </th>
                    <th>
                        <a style="border-radius: 5px;"  href="delete_cuartel.php?id=<?=$row['ID_CUARTEL'] ?>" class="users-table--delete">Borrar</a>
                    </th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        
    </div>
   
</body>

</html>
