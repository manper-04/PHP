<?php

$con = mysqli_connect("localhost","root","","ELNOMBREDETUBASEDEDATOS");

if($_POST){



$nombreimagen=$_FILES['imagen']['name'];//obtiene el nombre
$archivo=$_FILES['imagen']['tmp_name'];//contiene el archivo
$ruta="images";
$ruta=$ruta."/".$nombreimagen;//images/nombre.jpg
move_uploaded_file($archivo,$ruta);
$insertar = mysqli_query($con,"insert into ELNOMBREDETUTABLA values('','".$ruta."')");
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php



$imagenes= mysqli_query($con,"select * from ELNOMBREDETUTABLA");
while($imagen=mysqli_fetch_assoc($imagenes)){

  ?>


<table>
  <tr>
    <th></th>
  </tr>

  <tr>
    <td><?php echo '<img src="'.$imagen["imagen"].'" alt="">'?></td>
  </tr>

</table>




<?php } ?>
  </div>
    <form class="" action="" method="post" enctype="multipart/form-data">

      <input type="file" name="imagen" value="" required>
      <button type="submit" name="button">Enviar</button>
    </form>



  </body>
</html>
