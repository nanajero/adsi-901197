<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Comparacion PHP</title>
	<style>
	body{
		text-align: center;
	}
	table{
		border: 0px solid #7086B4;
		color: #B40431;
		height: 200px;
		width: 400px;
		cursor: pointer;
		margin-left: 500px;
		border-collapse: collapse;
		}
	

	td {
		border: 1px solid #7086B4;
		height: 50px;
		width: 100px;
	}
	
	#s1{
		background-color: #F3F781;
	}

	</style>
</head>
<body>
	<h1>Operadores Comparacion PHP</h1>
	<hr>

	<table>
		<tr>
			<td id="s1"><strong>Operador</strong></td>
			<td id="s1"><strong>Descripcion</strong></td>
			<td id="s1"><strong>Es ejemplo </strong></td>
			<td id="s1"><strong>Resultado</strong></td>
			
		</tr>

		<tr>
			
			<td>==</td>
			<td>es igual</td>
			<td>5 == 8 </td>
			<td>
               <?php echo var_dump(5 == 8); ?>
			</td>
		</tr>

		<tr>
			
			<td>!=</td>
			<td>no es igual</td>
			<td> 5 != 8</td>
			<td>
				<?php echo var_dump(5!=8);
				 ?>
			</td>
		</tr>

		<tr>

			
			<td> <> </td>
			<td>no es igual</td>
			<td>5 <> 8</td>
			<td>
				<?php echo var_dump(5<>8);
				 ?>
			</td>
		</tr>


		<tr>
			
			<td>></td>
			<td>es mayor que</td>
			<td>5>8</td>
			<td>
				<?php echo var_dump(5>8) ?>
			</td>
		</tr>

		<tr>
			
			<td> < </td>
			<td>es menor que</td>
			<td> 5 < 8 </td>
			<td>
				<?php echo var_dump(5<8) ?>
			</td>
		</tr>

		<tr>
			
			<td> >= </td>
			<td>es mayor o igual que</td>
			<td>5 >= 8</td>
			<td>
				<?php echo var_dump(5>=8) ?>
			</td>
		</tr>

		<tr>
			
			<td> <= </td>
			<td>es menor o igual que</td>
			<td>5 <= 8 </td>
			<td>
				<?php echo var_dump(5<=8) ?>
			</td>
		</tr>
	</table>

	
</body>
</html>
