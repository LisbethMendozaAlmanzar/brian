<?php
include('/xampp/htdocs/pfinal/Database/conexion.php');
$con = connection();

if(isset($_GET['id'])) {
    $id_soldado = $_GET['id'];
    
    $sql = "SELECT * FROM soldado WHERE id_soldado = '$id_soldado'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <title>Editar usuario</title>
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

        h1{
          background-color:rgb(169, 250, 246) ;
          border-radius: 20px;
          text-align: center;
          width: 50%;
          margin-left: 25%;
          margin-bottom: 30px;
        }

          .users-form form input[type=text],
          .users-form form input[type=password],
          .users-form form input[type=email] {
            padding: 10px;
            border: 2px solid #aaa;
            border-radius: 20px;
            outline: none;
            transition: .3s;
            font-size: 1.1rem;
            width: 50%;
            text-align: center;
            margin-left: 25%;
            margin-bottom: 30px;
          }

    .users-form form input[type=text]:focus,
    .users-form form input[type=password]:focus,
    .users-form form input[type=password]:focus {
      border-color: rgb(236, 30, 255);
      box-shadow: 0 0 6px 0 dodgerBlue;
      
    }



    </style>
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <h1>Actualizando Datos</h1>
                <input type="hidden" name="id_soldado" value="<?=$row['id_soldado']  ?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?? '' ?>">
                <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido'] ?? '' ?>">
                <input type="text" name="grado" placeholder="grado" value="<?= $row['grado'] ?? '' ?>">
                <button type="submit" value="Actualizar">Actualizar</button>
            </form>
        </div>
    </body>
</html>
