<?php 
if (isset($_POST['serie'])) {
	$serie = $_POST['serie'];
	if ($serie == 's1') {
		echo "url(imagenes/futurama.jpg)";
	}
	else if ($serie == 's2') {
		echo "url(imagenes/pantera.jpg)";
	}
	else if ($serie == 's3') {
		echo "url(imagenes/simpson.jpg)";
	}	
}
?>