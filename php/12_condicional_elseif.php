<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (elseif)</title>
</head>
<body>
	<?php 
         $dia = date("D");
 
  if($dia == "Fri"){
 
    echo "tenga un buen fin de semana";
 
  }elseif ($dia == "Wed"){
 
    echo "tenga un buen miercoles";
 
 }else{
 
    echo "Tenga un buen dia";
}



	 ?>
</body>
</html>