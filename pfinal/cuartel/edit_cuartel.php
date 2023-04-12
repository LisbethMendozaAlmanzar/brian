<?php
include('conexion.php');
$con = connection();

if(isset($_POST['ID_CUARTEL'])) {
    $ID_CUARTEL = $_POST['ID_CUARTEL'];
    $nombre = $_POST['nombre'];
    $ubicacion = $_POST['ubicacion'];
    

    $sql = "UPDATE t_cuarteles SET nombre = '$nombre', ubicacion = '$ubicacion' WHERE ID_CUARTEL = '$ID_CUARTEL'";
    $query = mysqli_query($con, $sql);

    if($query) {
        echo "Los datos se han actualizado correctamente";
    } else {
        echo "Ha ocurrido un error al actualizar los datos";
    }

    if($query){
        Header("Location: index1.php");
    }else{
    
    }
}
?>
