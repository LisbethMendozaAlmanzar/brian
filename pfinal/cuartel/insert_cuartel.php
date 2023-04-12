<?php
include("conexion.php");
$con = connection();

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];

$sql = "INSERT INTO t_cuarteles (nombre, ubicacion) VALUES ('$nombre', '$ubicacion')";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: index1.php");
    exit();
} else {
    echo "Error al insertar los datos: " . mysqli_error($con);
}

mysqli_close($con);
?>
