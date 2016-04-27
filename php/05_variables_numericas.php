<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>variables de tipo númerico (PHP)</title>

</head>
<body>
	<h1>variables de tipo númerico (PHP)</h1>
	<hr>

	<?php 

     $num1 = 10;
     $num2 = '20';
     $res  =  $num1 + intval($num2);
     $cantidad = 12897345;

     echo "<h3> La suma de 10 y 20 es: $res </h3>";

     echo "<br> La cantida sin formato es:".$cantidad;
     echo "<br> La cantidad con formato es:".number_format($cantidad);


	 ?>
</body>
</html>