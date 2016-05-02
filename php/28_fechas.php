<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fechas (PHP)</title>
</head>
<body>
	<h1>Fechas (PHP)</h1>
	<hr>

	<?php 
         
       echo date('d-m-Y')."<br>";
       echo date('d/m/Y')."<br>";
       // z:Número de dia shasta el dia de hoy
       // w: Número de la semana
       // l: 1 si el año es bisiesto, o 0 si no lo es 

         echo date('z-w-L')."<br>";
         echo date('d-m-Y h:i:s')."<br>";
         echo date('d-m-Y h:i:s A')."<br>";
         echo date('d M Y')."<br>";
         echo date('r')."<br>";

         echo date('r', '1519900000')."<br>";



	 ?>
</body>
</html>