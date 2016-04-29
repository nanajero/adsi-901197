<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ciclos DoWhile</title>
</head>
<body>
  <h1>Ciclos DoWhile</h1>
  <hr>

  <?php 
     
     $numero = 1;
     
    do {
   if (( $numero % 2) != 0 ) {
   echo '<br>'.$numero;
     
  
     }
       $numero++; 
}

while ( $numero <=100);
 


   ?>
</body>
</html>