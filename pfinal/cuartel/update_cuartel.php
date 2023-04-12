<?php
include('conexion.php');
$con = connection();

if(isset($_GET['id'])) {
    $ID_CUARTEL = $_GET['id'];
    
    $sql = "SELECT * FROM t_cuarteles WHERE ID_CUARTEL = '$ID_CUARTEL'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <title>Editar Cuartel</title>

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
            <form action="edit_cuartel.php" method="POST">
                <h1>Actualizando Datos</h1>
                <input type="hidden" name="ID_CUARTEL" value="<?=$row['ID_CUARTEL']  ?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?? '' ?>">
                <input type="text" name="ubicacion" placeholder="ubicacion" value="<?= $row['ubicacion'] ?? '' ?>">
               
                <button type="submit" value="Actualizar">Actualizar</button>
            </form>
        </div>
    </body>
</html>
