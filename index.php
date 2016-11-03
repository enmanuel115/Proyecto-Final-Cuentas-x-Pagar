<?php
	require('conexion.php');
	
	$query="SELECT id, descripcion, estado FROM cuentas where estado = 1";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		
	</style>
		<title>Concepto de pago</title>
	</head>
	<body>
		
		<center><h1>Concepto de pago</h1></center>
		
		
		<p></p>
		<div class="container">
		<table border=1 width="80%" class="table table-striped">
			<thead>
				<tr>
					<td><b>Descripcion</b></td>
					<td><b>Estado</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['descripcion'];?>
							</td>
							<td>
								<?php if ($row['estado']==1){echo "activo";} else {echo "inactivo";}?>
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<a class="btn btn-primary" href="nuevo.php">Concepto nuevo</a>
			</div>
		</body>
	</html>	
	
