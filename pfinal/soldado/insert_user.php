<?php
include('/xampp/htdocs/pfinal/Database/conexion.php');
$con = connection();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$grado = $_POST['grado'];

$sql = "INSERT INTO soldado (nombre, apellido, grado) VALUES ('$nombre', '$apellido', '$grado')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php");
} else {
    echo "Error al insertar los datos: " . mysqli_error($con);
}
?>
