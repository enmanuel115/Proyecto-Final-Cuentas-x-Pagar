<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM cuentas WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar concepto</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Concepto eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar concepto</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>