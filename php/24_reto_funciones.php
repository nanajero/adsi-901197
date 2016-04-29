<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reto(Funciones)</title>
  <style >
body {
  font: 14px tahoma;
}

table{
  border-collapse: collapse;
  margin: 40px auto;
  width: 90%;
}

table td{
  border: thin dotted #FF33A2;
  padding: 10px
}


  </style>
</head>
<body>
  <h1>Reto (Funciones)</h1>
  <hr>
  <?php 
    function graficartabla($nf ,$nc){
     echo "<table border=1>";
     for ($i=0; $i <= $nf ; $i++) { 
     echo "<tr>";
     for ($j=0; $j <= $nc ; $j++){
         echo "<td> f".$i."c".$j."</td>";
     }

     echo "</tr>";
     }

     echo "</table>";
    }

 graficartabla(40, 30);

   ?>
</body>
</html>