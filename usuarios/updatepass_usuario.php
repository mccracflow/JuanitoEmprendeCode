<?php
include '../inc/conexion.php';
$link=conectar();
session_start();

$contraseña_nueva=$_REQUEST['contraseña_nueva'];

$sql='UPDATE login SET contrasenia = "'.$contraseña_nueva.'" WHERE usuario_idusuario= "'.$_SESSION['IdUsuario'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

session_destroy();

header('location: ../index.php');

  ?>
