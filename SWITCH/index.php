<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style>
    
    .imagen1{
        background:url("https://images.pexels.com/photos/994883/pexels-photo-994883.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:center;
        color:red;
        
        
    }
    
    .imagen2{
        background:url("https://images.pexels.com/photos/997731/pexels-photo-997731.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:center;
        color:red;
        
    }
    
    .imagen3{
        background:url("https://images.pexels.com/photos/994605/pexels-photo-994605.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:center;
        color:red;
        
    }
    
    .imagen4{
        
        background:url("https://images.pexels.com/photos/219014/pexels-photo-219014.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        height: 100vh;
        background: cover;
        background-repeat: no-repeat;
        background-position:center;
        color:red;
        
    }
    
</style>
</head>
<body>
</body>
</html>



<?php 


$random = rand(1,4);



switch ($random){

case "1": echo "<section class='container-fluid imagen1' </section>";
break;
case "2": echo  "<section class='container-fluid imagen2' </section>";
break;
case "3": echo  "<section class='container-fluid imagen3' </section>";
break;
case "4": echo  "<section class='container-fluid imagen4' </section>";
break;

}




?>