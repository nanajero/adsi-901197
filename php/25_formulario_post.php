<!DOCTYPE html>
<html>
<head>
	<title>Formulario Post PHP</title>
</head>
<body>

<h1>Formulario Post PHP</h1>
<hr>

<form action="" method="POST">
	<fieldset>
		<legend><h4>Datos Personales</h4></legend>
		<input type="text" name="nombre" placeholder="Nombre Completo">
		<br>

        <input type="number" name="edad" placeholder="Edad">
		<br>

		<input type="submit" value="Enviar por POST">
		<br>

	</fieldset>
</form>

<?php 

if ($_POST) {
	echo "<li> El nombre es: ".$_POST['nombre']."</li>";
    echo "<li> La edad es: ".$_POST['edad']."</li>";
	
}

?>

</body>
</html>