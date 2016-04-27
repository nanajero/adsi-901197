<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>variables tipo cadena (PHP)</title>
</head>
<body>
	<h1>variables tipo cadena (PHP)</h1>
	<hr>
	<?php 
        
        $cadena1 = "Bienvenidos";
        $cadena2 =  " ADSI 901197";


        $concatenar = "<h2>".$cadena1." ".$cadena2."</h2>";
        echo $concatenar;

        // Longitud de cadena 

        echo "La longitud de la cadena es: ".strlen($concatenar);

        // posicion de caracteres
        echo "<br> La posicion de la palabra ADSI es ".strlen($concatenar, "ADSI");

        // Minisculas

	 ?>
</body>
</html>