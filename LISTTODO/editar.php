<?php


$con = mysqli_connect("localhost","root","","coloresdb");

//echo 'editar.php?id=1&color=success&descripcion=este es un color verde' . '<br>';


$id = $_GET['id'];
$color = $_GET['txtColor'];
$descripcion = $_GET['txtDescripcion'];


//echo $id . "<br>" . $color . "<br>" . $descripcion;

$editar = mysqli_query($con,"UPDATE tcolores SET color='$color',descripcion='$descripcion' WHERE id='$id'");

header('location:index.php');

?>