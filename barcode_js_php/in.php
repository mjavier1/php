<?php
require_once "conn.php";
$conexion=conexion();
$filename=$_POST['codigo'];
$sql="INSERT INTO t_productos (`nombre`) VALUES ('$filename')";
$result=mysqli_query($conexion,$sql);
$id=mysqli_insert_id($conexion);
$codigo=$id.date('is');
$sql="UPDATE `t_productos` SET `codigo`= '$codigo' WHERE `id_producto`='$id'";

mysqli_query($conexion,$sql);

header("Location:../index.php");

?>