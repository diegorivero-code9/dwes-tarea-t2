<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  
    /* Establecer la fuente predeterminada como monospace */  
    body {  
        font-family: monospace;  
    }  
</style>
</head>
<body>
<?php
 
 include("./clases/TriangleGenerator.php");
  
 $triangulo = new TriangleGenerator();
 echo $triangulo->generateTriangle(6);


 ?>
</body>
</html>