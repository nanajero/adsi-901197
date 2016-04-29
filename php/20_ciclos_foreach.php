<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ciclos foreach</title>
</head>
<body>
	<?php 

     $mascotas = array('gato', 'perro' ,'caballo','conejo','loro','gallina','cerdo','tortuga','sapo','iguana');
      foreach ($mascotas as $valor) {
      	echo("mascotas:" .$valor). "<br>";
      }
 

?>
</body>
</html>