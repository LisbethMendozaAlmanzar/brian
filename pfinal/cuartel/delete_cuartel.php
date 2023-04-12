<?php

include("conexion.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM t_cuarteles WHERE ID_CUARTEL='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index1.php");
}else{

}

?>