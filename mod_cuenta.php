<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$descripcion=$_POST['descripcion'];
	$estado=$_POST['estado'];

	
	$query="UPDATE cuentas SET descripcion='$descripcion', estado='$estado' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar concepto</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Concepto Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al modificar concepto</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				