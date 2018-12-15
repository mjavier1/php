<?php
function conexion(){
$conexion=mysqli_connect('localhost','mj','datasql','barcodejs');
return $conexion;
}
?>