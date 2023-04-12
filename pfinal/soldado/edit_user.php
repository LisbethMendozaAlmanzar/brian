<?php
include('/xampp/htdocs/pfinal/Database/conexion.php');
$con = connection();

if(isset($_POST['id_soldado'])) {
    $id_soldado = $_POST['id_soldado'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $grado = $_POST['grado'];

    $sql = "UPDATE soldado SET nombre = '$nombre', apellido = '$apellido', grado = '$grado' WHERE id_soldado = '$id_soldado'";
    $query = mysqli_query($con, $sql);

    if($query) {
        echo "Los datos se han actualizado correctamente";
    } else {
        echo "Ha ocurrido un error al actualizar los datos";
    }

    if($query){
        Header("Location: index.php");
    }else{
    
    }
}
?>

