<?php
include("Database/conexion.php");
$con = connection();


if (isset($_POST['submit'])) {
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $sql = "SELECT * FROM usuario WHERE Usuario='$username' AND contrasena='$password'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    
    session_start();
    $_SESSION['username'] = $username;
    header('Location: inicio.php');
  } else {
    
    echo '<script>alert("El usuario o la contraseña son incorrectos")</script>';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
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
      padding: 50px; /*Modifica el tamaño del cuadro*/
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
      min-width: 200px;
      max-width: 25%;
      width: 20px;
      top: 25%;
      margin-left: 15%;
      min-width: 200px;
      max-width: 25%;
      height: 30px;
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
  <h1>Iniciar sesión</h1>
  <hr>
  <br>
    <h3>Ingrese su usuario</h3>
    <input type="text" name="username" placeholder="Escribe aqui :)" required><br>
    <h3>Ingrese su contraseña:</h3>
    <input type="password" name="password"  placeholder="Escribe aqui :)" required><br><br>
    <button name="submit" value="Iniciar sesión">Iniciar sesión</button><br><br>
    <a href="register.php">Registrate</a>
  </form>
</body>

</html>
