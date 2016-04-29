<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vectores Asociativoc (PHP)</title>
</head>
<body>
	<h1>Vectores Asociativoc (PHP)</h1>
	<hr>
	<?php 
       $simpsons  = array('Homero' => 44, 'Marge'=> 38 , 'Bart' => 12, 'liza' => 9, 'Maggi' =>2 );
       $simpsons ['pochi'] = 4;
       $simpsons ['Abraham'] = 94;
          

        // Mostrar el Arreglo
       print (var_dump($simpsons));


	 ?>
</body>
</html>