<?php

$con = mysqli_connect("localhost","root","","coloresdb");

$id = $_GET['id'];

$eliminar = mysqli_query($con,"DELETE FROM tcolores WHERE id = '$id'");

header('location:index.php');


?>