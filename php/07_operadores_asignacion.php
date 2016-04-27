<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Asignacion PHP</title>
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
	<h1>Operadores Asignacion PHP</h1>
	<hr>

	<table>
		<tr>
			<td id="s1"><strong>Operador</strong></td>
			<td id="s1"><strong>Ejemplo</strong></td>
			<td id="s1"><strong>Es igual </strong></td>
			<td id="s1"><strong>Resultado</strong></td>
			
		</tr>

		<tr>
			<?php 
                $X = 20; 
                $y = 10; 
		     ?>
			<td>=</td>
			<td>x=y</td>
			<td>20 = 10 </td>
			<td>
               <?php echo $X=$y; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 2; 
                $y = 5; 
		     ?>
			<td>+=</td>
			<td>x+=</td>
			<td> 2 += 5</td>
			<td>
				<?php echo $X+=$y;
				 ?>
			</td>
		</tr>

		<tr>

			<?php 
                $X = 4;
                $y = 2;  
		     ?>
			<td>-=</td>
			<td>x-=y</td>
			<td>4 -= 2</td>
			<td>
				<?php echo $X-=$y; ?>
			</td>
		</tr>


		<tr>
			<?php 
                $X = 5;
                $y = 5;  
		     ?>
			<td>*=</td>
			<td>x*=y</td>
			<td>5 *= 5</td>
			<td>
				<?php echo $X*=$y; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 10;
                $y =  2;  
		     ?>
			<td>/=</td>
			<td>x/=y</td>
			<td>10 /= 2</td>
			<td>
				<?php echo $X/=$y; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 10;
                $y =  2;  
		     ?>
			<td>.=</td>
			<td>x.=y</td>
			<td>10 .= 2</td>
			<td>
				<?php echo $X.=$y; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 10;
                $y =  2;  
		     ?>
			<td>%=</td>
			<td>x%=y</td>
			<td>10 %= 2</td>
			<td>
				<?php echo $X%=$y; ?>
			</td>
		</tr>
	</table>

	
</body>
</html>
