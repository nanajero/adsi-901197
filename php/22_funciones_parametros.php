<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones parametros (PHP)</title>
</head>
<body>	
	   <h1>Funciones parametros (PHP)</h1>
	   <hr>

	   <?php 
        
          function mostrarDatos($nombre, $Edad){
          echo "<li>nombre</li>".$nombre."<li>";	
          echo "<li>Edad</li>".$Edad."<li>";
           echo "<hr>";
           }

           echo "<ul>";
           mostrarDatos('Andres', 27 );
           mostrarDatos('Jerónimo', 7 );
           echo "</ul>";

      ?>
</body>
</html>