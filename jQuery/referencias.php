<?php 

if (isset($_GET['marca'])) {
    $marca = $_GET['marca'];
    if ($marca == 1){
      echo "<option> gol </option>";
      echo "<option> polo </option>";
      echo "<option> golf </option>";
      echo "<option> jetta </option>";
    }
    else if ($marca == 2){
      echo "<option> clio </option>";
      echo "<option> sandero </option>";
      echo "<option> megane 3</option>";
      echo "<option> koleos </option>";
    }
    else if ($marca == 3){
      echo "<option> spark </option>";
      echo "<option> aveo </option>";
      echo "<option> sonic </option>";
      echo "<option> tracker </option>";
    }
}





?>