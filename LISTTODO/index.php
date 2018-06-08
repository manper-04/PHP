<?php

$con = mysqli_connect("localhost","root","","coloresdb");


//AGREGAR

if($_POST){
    $color = $_POST["txtColor"];
    $descripcion = $_POST["txtDescripcion"];
    
    $insertar = mysqli_query($con,"INSERT INTO tcolores (color,descripcion) VALUES ('$color','$descripcion')");
}

if($_GET){
    $id = $_GET["id"];
    $unico = mysqli_fetch_assoc(mysqli_query($con,"SELECT *FROM tcolores WHERE id='$id'"));
    
    //var_dump($unico);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="container">
      
      <div class="row justify-content-around">
          <div class="col-sm-5">
             <h1 class="mt-5 mb-5" >Ver tareas
             
              
            <a onClick="return confirm('Deseas ELIMINAR TODOS LOS REGISTROS?');" href="eliminartodo.php" class="float-right ml-3">
                     <button class="btn btn-danger">Eliminar todo</button>
                 </a>    
                
                 
             </h1>
             
             
             
             
             
                <?php
                
                $alertas = mysqli_query($con,"SELECT * FROM tcolores");
                while($alerta = mysqli_fetch_assoc($alertas)){
                    
                
                
                ?>
                
              <div class="alert  alert-<?php echo $alerta["color"]; ?> text-uppercase" role="alert">
                 <?php echo $alerta["descripcion"]; ?>
                 
                 
                 <a onClick="return confirm('Deseas ELIMINAR?');" href="eliminar.php?id=<?php echo $alerta["id"]; ?>" class="float-right ml-3">
                     <i class="fas fa-eraser"></i>
                 </a>
                 
                 <a href="index.php?id=<?php echo $alerta["id"]; ?>" class="float-right">
                     <i class="fas fa-pencil-alt"></i>
                     
                 </a>
                 
                 
              </div>
              
              <?php
              
                    }
              
              ?>
          </div>
          
          
          <div class="col-sm-5">
             <?php if(!$_GET): ?>
              <h1 class="mt-5 mb-5">Agregar tarea</h1>
              <form method="POST">
               
                <label for="txtColor" >Selecciona un color de etiqueta:</label>
                <select class="form-control mb-3" name="txtColor" id="txtColor">
                 <option>success</option>
                 <option>danger</option>
                 <option>warning</option>
                 <option>primary</option>
                 </select> 
                <!-- <input type="text" class="form-control mb-3" name="txtColor" placeholder="Elije el color de tu etiqueta " required> -->
                <label for="txtDescripcion">Agrega una tarea</label>
                <input type="text" class="form-control mb-3" name="txtDescripcion" required>
                <button class="btn btn-success">Agregar</button> 
                
              </form>
              <?php endif ?>
              
              <?php if($_GET): ?>
              <h1 class="mt-5 mb-5">Editar tarea</h1>
              <form method="GET" action="editar.php">
                
                <label for="txtColor" >Selecciona un color de etiqueta:</label>
                <select class="form-control mb-3" name="txtColor" id="txtColor" value="<?php echo $unico["color"];?>">
                 <option>success</option>
                 <option>danger</option>
                 <option>warning</option>
                 <option>primary</option>
                 </select> 
                
                <label for="txtColor" >Nueva tarea</label>
                <input type="text" class="form-control mb-3" name="txtDescripcion" placeholder="Agrega una descripcion" value="<?php echo $unico["descripcion"];?>">
                <input type="hidden" name="id" value="<?php echo $unico["id"];?>">
                <button class="btn btn-success">Editar</button>  
              </form>
              <?php endif ?>
          </div>
      </div>
  </div>
   
   
   
   
</body>
</html>
