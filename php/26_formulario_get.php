<!DOCTYPE html>
<html>
<head>
	<title>Formulario Metodo GET PHP</title>
</head>
<body>

<h1>Formulario Metodo GET PHP</h1>
<hr>

<form action="" method="GET">
	<fieldset>
		<legend><h4>Datos Personales</h4></legend>
		<input type="text" name="nombre" placeholder="Nombre Completo">
		<br>

        <input type="number" name="edad" placeholder="Edad">
		<br>

		<input type="submit" value="Enviar por GET">
		<br>

	</fieldset>
</form>

<?php 

if ($_GET) {
	echo "<li> El nombre es: ".$_GET['nombre']."</li>";
    echo "<li> La edad es: ".$_GET['edad']."</li>";
	
}

?>

</body>
</html>