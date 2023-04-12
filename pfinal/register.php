<?php

include("Database/conexion.php");
$con = connection();


if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];



  $sql = "SELECT * FROM usuario WHERE Usuario='$username'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
 
    $error = "El usuario ya existe en la base de datos";
  } else {
   
    $sql = "INSERT INTO usuario (Usuario, contrasena) VALUES ('$username', '$password')";
    if ($con->query($sql) === TRUE) {
      
      header('Location: inicio_sesion.php');
    } else {
      
      $error = "Error al insertar los datos en la base de datos";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <style>
    *{
      background-color:#89cff0;

    }
    h1 {
      text-align: center;
      background-color: gainsboro;   
    }


    h3 {
      text-align: center;
      background-color: gainsboro;
    }

    form {
      position: absolute;
      min-width: 200px;
      max-width: 25%;
      width: 25%;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 60px; /*Modifica el tamaño del cuadro*/
      box-shadow: 01rem 1rem #8bc34a; 
      background-color: gainsboro;
      backdrop-filter: black (2rem);
      border-radius: 30px; /*Para poner los border circulares*/

    }
    input{
      text-align: center;
      background-color: #ffffff;
      border-radius: 30px;
      transform: translate(10%,10%);
      width: 20px;
      top: 25%;
      margin-left: 15%;
      min-width: 200px;
      max-width: 25%;
      height: 30px;
      display: block;
        margin: auto;
        width: 100%;
        height: 40px;
        border-radius: 20px;
        background-color: #ffffff;
        border-radius: 30px;
        transform: translate(10%,10%);
        min-width: 200px;
        max-width: 25%;
        top: 25%;
        margin-left: 15%;
        min-width: 200px;
        max-width: 25%;
        height: 30px;
        color: black;
    }

    button{
       display: block;
        margin: auto;
        width: 100%;
        height: 40px;
        border-radius: 20px;
        background-color: #ffffff;
        border-radius: 30px;
        transform: translate(10%,10%);
        min-width: 200px;
        max-width: 25%;
        top: 25%;
        margin-left: 15%;
        min-width: 200px;
        max-width: 25%;
        height: 30px;
        color: black;
        }
    
        a{
      text-align: center;
        color: black;
        background-color: gainsboro;
       }

</style>

</head>
<body>
 
  <?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
  <?php } ?>
  <form style="margin-top:250px; justify-content:center; " method="post">
  <h1>Registrarte Aqui!!!</h1>
  <hr>
  <br>
    <h3>Ingresa un Usuario:</lh3>
    <input type="text" name="username" placeholder="Escriba aqui :)" required><br>
    <h3>Ingresa un Contraseña:</h3>
    <input type="password" name="password" placeholder="Escriba aqui :)" required><br>
   
    <button type="submit" name="submit" value="Registrarse">Registrarme</button><br><br>
    <a href="inicio_sesion.php">Estoy registrado</a>
  </form>
</body>

</html>
