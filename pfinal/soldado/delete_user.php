<?php

include('/xampp/htdocs/pfinal/Database/conexion.php');
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM soldado WHERE id_soldado='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>